<script type="text/javascript" src="<?=base_url()?>assets/js/plupload/plupload.full.min.js"></script>
<script type="text/javascript">
var uploader = new plupload.Uploader({
    runtimes : 'html5,flash,silverlight,html4',
    browse_button : 'upload_file', // you can pass in id...
    url : "<?=base_url()?>en/career/ajax_upload_file_cv",
    filters : {
        max_file_size : '2mb',
        mime_types: [
            {title : "Document files", extensions : "doc,docx,pdf"},
        ]
    },
    flash_swf_url : '<?=base_url()?>assets/js/plupload/Moxie.swf',
    silverlight_xap_url : '<?=base_url()?>assets/js/plupload/Moxie.xap',
    multipart_params : {action : 'post', token : token},
    init: {
        PostInit: function() {
        },
        FilesAdded: function(up, files) {
            plupload.each(files, function(file) {
                $('#file-name').val(file.name);
            });
            setTimeout(function(){uploader.start();},500);
        },
        UploadProgress: function(up, file) {
            $('#box_progress #warning').html('');
            $('#box_progress').show();
            $('#box_progress .txt_progress').html('<strong>'+file.percent+'%'+'</strong>');
        },
        FileUploaded: function(up, file, info) {
            console.log(info);
            showFileError('');
            try {
                   result = JSON.parse(info.response);
                   filename = $('#upload_file').val();
                   $('#uploaded_id').val(result.id);
                   $('#box_progress').hide();
                   showFileError('Upload file ' + file.name +' thành công.');
                } catch (e) {
                   showFileError('Upload xảy ra lỗi');
                }    
        },
        Error: function(up, err) {
            //console.log(err.code);
            if(err.code=='-600'){
                showFileError('File size is too large. File <= 2 MB'); 
            }
            else if(err.code=='-601'){
                showFileError('File is not format');   
            }
            else if(err.code=='-200'){
                showFileError("Can't upload");
            }
            //$('.step_one .progress_upload').html('<strong style="color:red">'+err.code + ": " + err.message+'</strong>');
        }
    }
}); 
function showFileError(txt){
    $('#box_progress').show();
    $('#box_progress #txt_progress').html('');
    $('#box_progress #warning').html(txt);
}
</script>
<script type="text/javascript">

    $(function(){
        uploader.init();
        $('#frmUploadCV #btSend').bind('click',function(){
           box_alert =  $('#frmUploadCV #box_alert');
           box_alert.html('');
           firstname = $('#frmUploadCV input[name="firstname"]').val();
           lastname = $('#frmUploadCV input[name="lastname"]').val();
           email = $('#frmUploadCV input[name="email"]').val();
           phone = $('#frmUploadCV input[name="phone"]').val();
           curtit = $('#frmUploadCV input[name="curtit"]').val();
           yearsex = $('#frmUploadCV input[name="yearsex"]').val();
           linkedin = $('#frmUploadCV input[name="linkedin"]').val();
           
           uploaded_id = $('#uploaded_id').val();
           captcha = $('#frmUploadCV input[name="captcha"]').val();
           
         

           if(firstname==''){
                box_alert.html('Please enter your First name. Ex: Nguyen Quang Minh, enter "Quang Minh"');
                return false;
           }
           if(lastname==''){
                box_alert.html('Please enter your Last name. Ex: Nguyen Quang Minh, enter "Nguyen"');
                return false;
           }
           if(email==''){
                box_alert.html('Please enter your Email');
                return false;
           }
           if(!validate_email(email)){
                box_alert.html('Email is not valid. Please enter Email again. (Ex: name@gmail.com, name@live.com ...)');
                return false;
           }
            
            if(isNaN(phone) == true || phone == '') {
                box_alert.html('Mobile phone is number, not empty and character. (Ex: 0978123321, 0913123321 ...)');
                return false;
           }


           if(curtit==''){
                box_alert.html('Please enter your Current title');
                return false;
           }

           if(isNaN(yearsex) == true || yearsex == '') {
                box_alert.html('Years of experience is number, not empty and character');
                return false;
           }


           if(uploaded_id==''){
                box_alert.html('Please choose Attach file');
                return false;
           }


           url = base_url+'career/ajax_upload_cv';
           $.post(url,{token:token, firstname:firstname, lastname:lastname, email:email, phone:phone, curtit:curtit, yearsex:yearsex, linkedin: linkedin, uploaded_id:uploaded_id, captcha:captcha},function(res){
                rq= '?'+ new Date().getTime();
                $('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
                
                if(res.st=='TRUE'){
                    $.fancybox($('#pu-upload-cv').parent().html());
                    document.getElementById("frmUploadCV").reset();
                }
                else{
                	box_alert.html(res.alert);
                }
           },'JSON');
        });
        $('#box_catpcha #btRefresh').bind('click',function(){
            rq= '?'+ new Date().getTime();
            $('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
        });
    });
</script>

<style type="text/css">
  .input{
    border: none;
  }
  .input  span{
    width: 130px;
    float: left;
    margin-top: 10px;
    font-size: 14px;
  }
  .input label{
    color: red;
  }
  .input  input{
    border: 1px solid #e9eaea !important;
    float: left;
    padding: 0px 8px;
    width: 70%;
  }
</style>
<div class="banner-main">
	<img src="<?=base_url()?>assets/img/careertop.jpg" class="img-responsive" alt="" />
</div>
<div id="career-content" class="career-content ">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a>
      <span class="active"><a href="<?=PATH_URL_LANG?>career">Careers At Talentnet</a></span>
      <span class="active"><a href="<?=PATH_URL_LANG.'career/'.$result->slug_en?>"><?=$result->name_en?></a></span>
      <span class="active"><a href="<?=PATH_URL_LANG.'career/submit_job/'.$result->slug_en.'-'.$result->id?>">Apply</a></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="job-description career-submit">
				<h4>Apply for: <span class="text-red"><?=$result->name_en?></span></h4>
				<hr>
				<p>Please fill in your contact information and choose your resume:</p>
				<h5 class="text-red">Your Contact Information <span style="color: #666;font-family: 'RobotoCondensed', Arial, sans-serif;font-size: 14px;">(<label style="color:red"> *</label>Required)</span></h5>
				<form class="form-horizontal" role="form" id="frmUploadCV">
					<div class="form-text">
						<div class="form-text-top2">
							<div class="input">
								<span>First name <label>*</label></span><input type="text" name="firstname" id="" value="" placeholder="Ex: Nguyen Quang Minh, enter 'Quang Minh'">
							</div>
							<div class="input">
								<span>Last name <label>*</label></span><input type="text" name="lastname" id="" value="" placeholder="Ex: Nguyen Quang Minh, enter 'Nguyen'">
							</div>	
						</div>
						<div class="input">
							<span>Email <label>*</label></span><input type="text" name="email" id="" value="" placeholder="Ex: name@gmail.com, name@live.com ...">
						</div>
            <div class="input">
              <span>Mobile phone <label>*</label></span><input type="text" name="phone" id="" value="" placeholder="Ex: 0978123321, 0913123321 ...">
            </div>
            <div class="input">
              <span>Current title <label>*</label></span><input type="text" name="curtit" id="" value="" placeholder="">
            </div>
            <div class="input">
              <span>Years of experience <label>*</label></span><input type="text" name="yearsex" id="" value="" placeholder="">
            </div>
            <div class="input">
              <span>Your Linkedin </span><input type="text" name="linkedin" id="" value="" placeholder="Ex: https://www.linkedin.com/in/nguyen-quang-minh-11111 ...">
            </div>
            
          
					</div>
					<h5 class="text-red">Your Resume</h5>
					<div class="file-upload">
						<div><input type="radio" name="" id="" value="" checked >Upload your resume (Supports <b>*.doc, .*docx, *.pdf and <= 2 MB</b>).</div>
						<div class="fileUpload btn">
						    <span><i class="fa fa-folder"></i>Browse For File</span>
						    <input type="file" id="upload_file" class="upload" />
						</div>
             <div class="verifi" id="box_progress" >
                <p id="warning" class="red"></p>
                <p id="txt_progress"></p>
              </div>
						<!-- <p><i class="fa fa-download" style="margin-right:5px;"></i>Choose from: <b><a href="">Google Drive</a>,<a href=""> Dropbox</a></b></p> -->
						<p>If you don’t have a resume yet? You can download our resume template <a href="<?=(!empty($setting->cv_sample_download))? base_url().DIR_UPLOAD_FILE_DOWNLOAD.$setting->cv_sample_download:''?>" target="_blank" class="text-red">[ Download ]</a></p>
           
					</div>
					<div class="form-group" style="    margin: 20px;">
	                    <div class="lable">Verification</div>
						<div class="verifi" id="box_catpcha" style="width: 200px;float: left;">
							<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
							<span>Can’t see image?</span>
							<a href="javascript:void(0)" id="btRefresh" title="">Reload</a>
						</div>
						<div class="input ip-capcha" style="    float: left;">
								<input type="text" name="captcha" value="" placeholder="Enter Captcha"/>
						</div>
						<div class="clearfix"></div>
	        </div>
          <input type="hidden" id="uploaded_id" value="" />

					<div class="verifi red" id="box_alert"></div>
					<div class="search"><input type="button" id="btSend" value="APPLY NOW" class="btn-search"></div>
				</form>
			</div>
		</div>
		<div class="ab-r col-md-4">
		 <div class="job-description jobdetail">
        <h2 class="career-content-title">JOB DETAIL</h2>
        <table style="margin-top: 54px;">
          <?php if(0){ ?>
          <tr>
            <td>Jobcode:</td>
            <td><?=$result->id?></td>
          </tr>
          <?php } ?>
          <tr>
            <td>Job Title:</td>
            <td><?=$result->{'name_'.$languageurl}?></td>
          </tr>
          <tr>
            <td>Function:</td>
            <td><?=$category->name_en?></td>
          </tr>
          <tr>
            <td>Level:</td>
            <td><?=$result->{'level'}?></td>
          </tr>
          <tr>
            <td>Location:</td>
            <td><?php if(isset($province->name)) echo $province->name?></td>
          </tr>
          <tr>
            <td>Status:</td>
            <td class="job-status"><?php if($result->status == 1 && strtotime($result->deadline) >= time()) echo "Open"; else echo 'Close';?></td>
          </tr>
        </table>
        <div class="deadline">
          <p>DEADLINE</p>
          <h2><?=date("d", strtotime($result->deadline))?></h2>
          <h4><?=date("M Y", strtotime($result->created))?></h4>
        </div>
      </div>
		</div>
	</div>

</div>


<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>

<style type="text/css">
  ::-webkit-input-placeholder {
   color: #c7bfc7;
       font-size: 14px;
}

:-moz-placeholder { /* Firefox 18- */
   color: #c7bfc7;  
       font-size: 14px;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #c7bfc7;  
       font-size: 14px;
}

:-ms-input-placeholder {  
   color: #c7bfc7;  
       font-size: 14px;
}
</style>