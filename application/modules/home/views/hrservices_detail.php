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

<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$content = language('content');
	$slug = language('slug');
?>
<div id="about-talent" class="content-bg1 hr-detail">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="<?=lang('hr_services')?>"><?=lang('hr_services')?></a><span class="active"><?=$category->$name?></span>
		</div>
		<div class="ab-l col-md-8">
			<?php if(!empty($category)){?>
			<div class="ab-about">
				<h1 class="top-tt"><?=$category->$name?></h1>
				<!-- <div class="banner-main mt10">
					<img src="<?=base_url()?>assets/img/img-news-detail.jpg" class="img-responsive" alt="" />
				</div> -->
				<div class="date-bar-detail">
					<div class="row">
						<!--<div class="col-sm-4"><?=date('d/m/Y , H:i',strtotime($category->created))?></div>-->
					</div>
				</div>
				<div class="detail-descript" style="margin-top:0px;">


					<?php if($result){ ?>
					<?php foreach($result as $key=>$row){ ?>
					<h2 class="sub_title"><?=$row->$name?> <span >view more</span></h2>
					<div class="sub_content">
						<?=output_editor($row->$content)?>
						<?php
							$sub=$this->model->fetch('*','wz_hrservices_sub2',"`status` = 1 and hrservices_sub={$row->id}","order","asc");
							if($sub){
							foreach($sub as $key=>$row2){
						?>
							<h3 class="sub2_title"><?=$row2->$name?><span class="arrow"></span></h3>
							<div class="sub2_content">
								<?=output_editor($row2->$content)?>
							</div>
							<?php } ?>
							<?php } ?>
					</div>
					<?php } ?>
					<?php } ?>
					<h2 class="sub_title ctu"><?=lang('contact_us')?></h2>
					<div class="sub_content info">
						<?php
							$category_offline = language('category');
							$position = language('position');
							if(!empty($office_location)){
								$i = 0;
								foreach($office_location as $office){
						?>

						<div class="row <?=$i%2!=0?'one':'';?>">
							<div class="col-md-5 f-bb">
								<div>
									<span><?=$office->$name?></span>
									<p class="job"><?=$office->$position?></p>
								</div>
							</div>
							<div class="col-md-7"><div><p class="phone"><?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
						</div>

						<?php $i++;}
						}
						?>
					</div>
				</div>
				<!-- <div class="ab-story services-contact">
					<h2 class="f-bb"><?=lang('contact_us')?><a class="bullet active" title=""></a></h2>
					<div class="ab-story-ct" style="display:block">
						<?php
							$category_offline = language('category');
							$position = language('position');
							if(!empty($office_location)){
								$i = 0;
								foreach($office_location as $office){
						?>

						<div class="row <?=$i%2!=0?'one':'';?>">
							<div class="col-md-6 f-bb">
								<div>
									<span><?=$office->$name?></span>
									<p class="job"><?=$office->$position?></p>
								</div>
							</div>
							<div class="col-md-6"><div><p class="phone"><?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
						</div>

						<?php $i++;}
						}
						?>
					</div>
				</div> -->
			</div>
			<?php if(!empty($get_category) && $this->session->userdata('uid')){
					if($get_category->slug_en == 'talentnet-expertise'){
			?>
			<div class="mt20 job-detail">
				<input type="button" class="btn-update btn-sign-in w131 p_submit" id="download_now" value="DOWNLOAD NOW" data-id="<?=$result->id?>" />
			</div>
			<?php }
			}
			?>
		  <?php }?>
		</div>
		<div class="ab-r col-md-4 hr">
			<?php //pr($category,1);
				if(!empty($category)){ ?>
            	<?=modules::run('block/endorse',intval($category->id)+1)?>
			<?php }?>
			<?=modules::run('block/brochure')?>
			<?=modules::run('block/you_surely_use')?>



			<?=modules::run('home/in_the_news')?>
			<?php
			if($this->uri->segment(3) == 'payroll-and-hr-outsourcing' || $this->uri->segment(3) == 'dich-vu-gia-cong-phan-mem-nhan-su-va-luong'){
				//echo modules::run('block/salary_calc_for','employer');
			}
			?>
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
function contact_change_know(element) {
	$("#how_know").val(element.value);
	if(element.value != "") {
		$("#how_know_group").hide();
	} else {
		$("#how_know_group").show();
	}
}
$(document).ready(function(){
	$(document).on('click','.sub_title',function(){
		$this=$(this);
		$this.next().stop().slideToggle();
	});
	$('.sub_title').first().trigger('click');
	$('.sub_title.ctu').trigger('click');
	$(document).on('click','.sub2_title',function(){
		$this=$(this);
		$this.find('.arrow').toggleClass('active');
		$this.next().stop().slideToggle();
	});






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
