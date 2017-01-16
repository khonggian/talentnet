<style>
#ab-brochure-popup{
	max-width: 700px !important;
}
.btn-carrer {
	width: 150px !important;
}
.ab-submit-status {
	min-height: 28px !important;
}
.padding-column2 {
	padding-left: 20px;
}
.item-status {
	padding-left: 0px !important;
}
.btn_download{ 
	color: white !important;
	background-color: #A84216;
	padding: 10px 20px;
	border-radius: 4px;
	text-transform: uppercase; 
}
.btn_download:hover{
	color:white;
}
</style>
<?php
	$name = language('name');
	$description = language('description');
	$content = language('content');
	$slug = language('slug');
?>
<?=modules::run('home/banner',$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:''))?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:'')?>" title="<?=$title_parent?>"><?=$title_parent?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:'')?>" title="<?=(!empty($get_category)?$get_category->$name:'')?>"><?=(!empty($get_category)?$get_category->$name:'')?></a>
		</div>
		<div class="ab-l col-md-8">
		<?php if(!empty($result)){?>
			<div class="ab-about">
				<h1 class="top-tt"><?=$result->$name?></h1>
				<!-- <div class="banner-main mt10">
					<img src="<?=base_url()?>assets/img/img-news-detail.jpg" class="img-responsive" alt="" />
				</div> -->
				<div class="date-bar-detail">
					<div class="row">
						<div class="col-sm-4"><?=date('d/m/Y, H:i',strtotime($result->created))?></div>
					</div>
				</div>
				<div class="detail-descript">
					<?=output_editor($result->$content)?>
				</div>
				<?php if(!empty($get_tags)){?>
				<div class="news_detail">
                    <div class="col_tag">
					Tag: 
					<?php
							foreach($get_tags as $tags){?>
					<a title="<?=$tags->name?>" href="javascript:void(0);" class="btn-joblist"># <?=$tags->name?></a>
					<?php }
					?>
                    </div>
                    <div class="col_download"></div>
                    <div class="clearAll"></div>
				</div>
				<?php }?>
				<?php if($this->uri->segment(4)=='mercer-and-talentnet-total-remuneration-survey-trs-2015-steadily-rising--MonEuy2wnh___________'){ ?>
				<div class="">
					<p style="margin-bottom: 15px;">Click the button below to download the general data of Salary Survey 2015 by Mercer & Talentnet</p>
					<a href="#ab-brochure-popup" class="btn_download" data-id="en">English Version</a>
					<a href="#ab-brochure-popup" class="btn_download" data-id="vi">Vietnamese Version</a>
				</div>
				<?php } ?>
				<div class="other_post">
					<?php 
					
						if($other_post){
					?>
						<h2 class="f-bb"><?=lang('other_post')?></h2>
					<?php
							foreach ($other_post as $row) {
					?>
						<div class="item-other">
							<a href="<?=PATH_URL_LANG.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$row->{'slug_'.$this->uri->segment(1)}?>" title="<?=$row->{'name_'.$this->uri->segment(1)}?>"><?=$row->{'name_'.$this->uri->segment(1)}?></a>
						</div>
					<?php
							}
						}
					?>
				</div>
			</div>
			<?php if(!empty($get_category) && $this->session->userdata('uid')){
					if($get_category->slug_en == 'talentnet-expertise'){
			?>
					<div class="mt20 job-detail">
						<!--<input type="button" class="btn-update btn-sign-in w131 p_submit" id="download_now" value="DOWNLOAD NOW" data-id="<?=$result->id?>" />-->
						<?php if(!empty($result->file)){ ?>
						<!-- <a href="<?=base_url().DIR_UPLOAD_INFORMATION.$result->file?>" id="download_now" data-id="<?=$result->id?>"  class="btn-update btn-sign-in" >DOWNLOAD NOW</a> -->
						<?php } ?>
					</div>
					<?php } ?>
			<?php }else{  if($get_category->slug_en == 'talentnet-expertise'){ ?>
					<div class="mt20 job-detail">
						<!-- <a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" id="download_now" data-id="<?=$result->id?>" class="btn-update btn-sign-in" >DOWNLOAD NOW</a> -->
					</div>
			<?php } }	?>
		<?php }?>
		</div>
		<div class="ab-r col-md-4">
            <?php if($type != 'market_entry'){?>
				<?//=modules::run('home/subscribe',$get_category->id,$table)?>
			<?php } else {?>
				<?=modules::run('block/brochure')?>
			<?php }?>
            <div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=$title_parent?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely"><a class="f-bb <?=$this->uri->segment(3)==$c->$slug?'active':''?>" href="<?=PATH_URL_LANG.$slug_parent.'/'.$c->$slug?>" title="<?=$c->$name?>"><?=$c->$name?></a></div>
						</div>
					<?php }
					}
					?>
				</div>
			</div>
            <?=modules::run('block/you_surely_use')?>
			<?=modules::run('home/in_the_news','YOU MAY INTEREST',$result->id);?>
		</div>
		
	</div>
</div>
<div style="display: none;">
	<div id="ab-brochure-popup">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">DOWNLOAD</div>
            <div class="note">Please enter the information below to download file</div>
            <form method="post" id="form_brochure_info">
				<table style="width:100%">
				  <tr>
				    <td style="width: 340px" valign="top">
						<div class="ab-submit">
							<div class="item">
								 <div class="form_label"><?=lang('fullname')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="fullname" value="" placeholder="<?=lang('enter').' '.lang('fullname')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('title')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="title" value="" placeholder="<?=lang('enter').' '.lang('title')?>" /></div>				
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('company')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="company" value="" placeholder="<?=lang('enter').' '.lang('company')?>" /></div>				
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('phone')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left "><input type="text" name="phone" value="" placeholder="<?=lang('enter').' '.lang('phone')?>" /></div>				
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label">Email <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="email" value="" placeholder="<?=lang('enter')?> email" /></div>				
								<div class="clear"></div>
							</div>
							<div class="item item-captcha">
								<div class="form_label"><?=lang('verification')?> <span class="note-require">(*)</span></div>
								<div class="left ab-submit-text">
									<div class="verifi" id="box_catpcha">
										<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
										<span>Can’t see image?</span>
										<a href="javascript:void(0)" id="btRefresh" title="">Reload</a>
									</div>
								</div>				
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="ab-submit-text left "><input type="text" name="captcha" value="" placeholder="<?=lang('enter').' '.lang('verification')?>" /></div>				
								<div class="clear"></div>
							</div>
							<div class="clearall"></div>
						</div>
					</td>
				    <td style="width: 320px" valign="top">
						<div class="ab-submit padding-column2">
							<div class="form-group">
								<?=lang('how_know')?> <span class="note-require">(*)</span>
								<div class="input">
									<input type="text" class="field_state" name="how_know" placeholder="<?=lang('how_know')?>" value=""/>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div class="form-group" id="chkLookingDiv">
								<?=lang('looking_for')?> <span class="note-require">(*)</span>
								<div>
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('executive_search')?>"/>
									<span><?=lang('executive_search')?></span>
									<div class="clearfix_slim"></div>
								
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('hr_consulting')?>"/>
									<span><?=lang('hr_consulting')?></span>
									<div class="clearfix_slim"></div>
									
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('mercer_salary_surveys')?>"/>
									<span><?=lang('mercer_salary_surveys')?></span>
									<div class="clearfix_slim"></div>
									
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('payroll_outsourcing')?>"/>
									<span><?=lang('payroll_outsourcing')?></span>
									<div class="clearfix_slim"></div>
									
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('hr_services_market')?>"/>
									<span><?=lang('hr_services_market')?></span>
									<div class="clearfix_slim"></div>
									
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('choise_others')?>"/>
									<span><?=lang('choise_others')?></span>
									<div style="padding-top:5px;" class="clearfix"></div>
									<div class="input">
										<input type="text" class="field_state" name="choise_others_text" id="choise_others_text" placeholder="<?=lang('choise_others')?>"/>
									</div>
								</div>
								<div class="clearfix"></div>
								
								<div class="ab-submit">
									<div class="item item-status">
										<p class="ab-submit-status red"></p>
									</div>
								</div>
								<div class="ab-submit">
									<div class="item">
										<a class="btn-carrer btn-carrer-create signin f-bb" title="Send" href="javascript:void(0);"><?=lang('send')?></a>
									</div>
								</div>
							</div>
						</div>
					</td>
				  </tr>


				</table>
            </form>
		</div>
	</div>
</div>
<script type="text/javascript">
var lang_click="";
var link_down="";
var choise_others_empty = "<?=lang('choise_others_empty')?>";
var choise_service_offerings = "<?=lang('choise_service_offerings')?>";
	
function newCaptcha() {
	$('#btRefresh').trigger('click');
}

function DisplayMessage(message, elem) {
	var el_status = $('#form_brochure_info .ab-submit-status'); 
	el_status.html(message);
	elem.focus();
}
$(document).ready(function(){
	$('#box_catpcha #btRefresh').bind('click',function(){
		rq= '?'+ new Date().getTime();;
		$('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
	});	
	$('.btn_download').click(function(){
		lang_click=$(this).data('id');
		link_down=$(this).attr('rel');
		$('#btRefresh').trigger('click');
	});
    $('.btn_download').fancybox();    
    $('#form_brochure_info .btn-carrer').bind('click',function(){
		if(link_down != "" && link_down.indexOf("http") != 0) {
			link_down = '<?=base_url()?>' + link_down;
		}
        var el_status = $('#form_brochure_info .ab-submit-status'); 
		var $this= $(this);
        if(!$(this).hasClass('disabled')){
            $(this).addClass('disabled');
            el_status.html('');
			
			var data = {};
			var chkLooking = "[";
			var stop = false;
			$('input[name*="chkLooking"]').each(function(index){
				if($(this).is(':checked')) {
					if(parseInt(index) == 5) {
						if($.trim($("#choise_others_text").val()) == "") {
							DisplayMessage(choise_others_empty, $("#choise_others_text"));
							stop = true;
						} else {
							chkLooking = chkLooking + "," + $.trim($("#choise_others_text").val());
						}
					} else {
						chkLooking = chkLooking + "," + $(this).val();
					}
				}	
			});
			
			chkLooking = chkLooking.replace("[,", "").replace("[", "");
			if(chkLooking == "") {
				DisplayMessage(choise_service_offerings, $("#chkLookingDiv"));
				stop = true;
			}
			if(stop == true) {
				$this.removeClass('disabled');
				return;
			}
			
            var info={
				action: link_down,
                token:token,
                fullname: $('#form_brochure_info input[name="fullname"]').val(),
                title : $('#form_brochure_info input[name="title"]').val(),
                company : $('#form_brochure_info input[name="company"]').val(),
                phone : $('#form_brochure_info input[name="phone"]').val(),
                email : $('#form_brochure_info input[name="email"]').val(),
				captcha : $('#form_brochure_info input[name="captcha"]').val(),
				how_know : $('#form_brochure_info input[name="how_know"]').val(),
				chkLooking : chkLooking
                }
           $.post('<?=base_url()?>en/block/ajax_download',info,function(res){
                
                if(res.error.length>0)
                    el_status.html(res.error[0].txt);
                else{
                    $('#form_brochure_info input[name="fullname"]').val('');
                    $('#form_brochure_info input[name="title"]').val('');
                    $('#form_brochure_info input[name="company"]').val('');
                    $('#form_brochure_info input[name="phone"]').val('');
                    $('#form_brochure_info input[name="email"]').val('');
					$('#form_brochure_info input[name="captcha"]').val('');
					$('#form_brochure_info input[name="how_know"]').val('');
					$('#form_brochure_info input[name="choise_others_text"]').val('');
                    $.fancybox.close();
     				// $('#ab-brochure-popup-click').trigger('click');
					// $('#btRefresh').trigger('click');
					/*
					if(lang_click=="en"){
						window.location = '<?=base_url()?>assets/Mercer and Talentnet Salary Survey 2015.pdf';
					}else{
						window.location = '<?=base_url()?>assets/Ket Qua Khao Sat Luong Mercer va Talentnet 2015.pdf';
					}
					*/
					window.location = link_down;
                    setTimeout(function(){
                    	window.location.href = '<?=PATH_URL_LANG?>' + 'thank-you';
                    }, 200);
                    
					
                }

				$this.removeClass('disabled');
           },'JSON');     
        }
    });
});

</script>