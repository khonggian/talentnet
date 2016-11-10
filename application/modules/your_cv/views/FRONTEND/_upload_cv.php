<script type="text/javascript" src="<?=base_url()?>assets/js/plupload/plupload.full.min.js"></script>
<script type="text/javascript">
var uploader = new plupload.Uploader({
    runtimes : 'html5,flash,silverlight,html4',
    browse_button : 'upload_file', // you can pass in id...
    url : "<?=base_url()?>vi/your_cv/ajax_upload_file_cv",
    filters : {
        max_file_size : '4mb',
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
                } catch (e) {
                   showFileError('Upload xảy ra lỗi');
                }    
        },
        Error: function(up, err) {
            //console.log(err.code);
            if(err.code=='-600'){
                showFileError('Kích cỡ file quá lớn'); 
            }
            else if(err.code=='-601'){
                showFileError('File không đúng định dạng');   
            }
            else if(err.code=='-200'){
                showFileError('Không thể upload');
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
           fullname = $('#frmUploadCV input[name="fullname"]').val();
           email = $('#frmUploadCV input[name="email"]').val();
           phone = $('#frmUploadCV input[name="phone"]').val();
           uploaded_id = $('#uploaded_id').val();
           captcha = $('#frmUploadCV input[name="captcha"]').val();
           if(fullname==''){
                box_alert.html('Please enter Full name');
                return false;
           }
           if(email==''){
                box_alert.html('Please enter Email');
                return false;
           }
           if(!validate_email(email)){
                box_alert.html('Email is not valid. Please enter Email again');
                return false;
           }
           if(phone==''){
                box_alert.html('Please enter Phone');
                return false;
           }
           if(uploaded_id==''){
                box_alert.html('Please choose Attach file');
                return false;
           }
           url = base_url+'your_cv/ajax_upload_cv'
           $.post(url,{token:token,fullname:fullname,email:email,phone:phone,uploaded_id:uploaded_id,captcha:captcha},function(res){
                if(res.st=='TRUE'){
                    $.fancybox($('#pu-upload-cv').parent().html());
                }
           },'JSON');
        });
        $('#box_catpcha #btRefresh').bind('click',function(){
            rq= '?'+ new Date().getTime();;
            $('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
        });
    });
</script>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a><span class="active">Upload CV</span>
		</div>
		<div class="ab-a">
			<div class="col-md-12">
				<div class="upload_cv">
					<h1 class="f-bb">Upload CV</h1>
					<div class="form-profile">
			            <form class="form-horizontal" role="form" id="frmUploadCV">
			                <div class="form-group">
			                    <div class="lable"><?=lang('fullname')?></div>
								<div class="input">
                                    <?php $name='';
                                        if(!empty($user)) $name = empty($user->fullname)?$user->firstname.' '.$user->middlename.' '.$user->lastname:$user->fullname;
                                    ?>
									<input type="text" name="fullname" value="<?=$name?>" placeholder="<?=lang('your_name')?>"/>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable">Email</div>
								<div class="input">
									<input type="text" name="email" value="<?=isset($user->email)?$user->email:''?>" placeholder="Email"/>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable"><?=lang('phone')?></div>
								<div class="input">
									<input type="text" name="phone" value="" placeholder="<?=lang('your_phone')?>"/>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group" >
			                    <div class="lable">Attach file</div>
			                    <div class="ip_file left">   
                                    <input type="hidden" id="uploaded_id" value="" />
									<div class="input file">
										<input type="text" id="file-name" />
									</div>
			                    	<input type="button" id="upload_file" class="button-browse left" value="BROWSE"/> (doc,docx,pdf) < 4MB
			                    </div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group" id="box_progress" style="display: none;">
			                    <div class="lable"></div>
								<div class="verifi" >
									<p id="warning" class="red"></p>
                                    <p id="txt_progress">100%</p>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable">Verification</div>
								<div class="verifi" id="box_catpcha">
									<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
									<span>Can’t see image?</span>
									<a href="javascript:void(0)" id="btRefresh" title="">Reload</a>
								</div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group">
			                    <div class="lable"></div>
								<div class="input ip-capcha">
									<input type="text" name="captcha" value="" placeholder="<?=lang('enter_code_above')?>"/>
								</div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group">
			                    <div class="lable"></div>
								<div class="verifi red" id="box_alert">
									
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable btn">&nbsp;</div>
								<div class="mt8 mbt20 btn-form"><input type="button" value="SEND" id="btSend" class="btn-update" /></div>
								<div class="clearfix"></div>
			                </div>
			            </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="display:none;">
	<div id="pu-upload-cv">
		<div class="pu-upload-cv">
			<a class="pu-upload-cv-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
			<h1 class="f-bb">thank you</h1>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<a class="btn-ok f-bb" href="javascript:void(0);" onclick="$.fancybox.close();" title="">OK</a>
		</div>
	</div>
</div>