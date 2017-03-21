<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$slug = language('slug');
	$vm = lang('view_more');
?>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG. $parent_cat?>" title=""><?=lang('Market_Entry')?></a><span class="active"><?=lang('FAQ')?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="faq">
				<h1 class="f-bb"><?=lang('FAQ')?></h1>
				<div class="faq-search">
					<div class="row">
						<div class="col-md-10"><input type="text" name="keyword" value="<?=$keyword?>" placeholder="<?=lang('enter_keywords')?>"/></div>
						<div class="col-md-2"><a class="f-bb" id="btSearch" href="javascript:void(0);" title=""><?=lang('Search')?></a></div>
					</div>
				</div>
				<div class="faq-question">
                <?php if(!empty($result)){ ?>
                <?php foreach($result as $row){ ?>
					<div class="row">
						<div class="col-md-4">
                            <a href="javascript:void(0);" title="">
                                <img src="<?=img(DIR_UPLOAD_FAQ.$row->image,163,94);?>" alt="<?=$row->question?>" />
                            </a></div>
						<div class="col-md-8">
							<p class="faq-question-one">
							<?php if(explode_textarea_array($row->question)){
									foreach(explode_textarea_array($row->question) as $text){
										if(strlen($text)>130){
											echo '<span class="q-shr">'.CutText(nl2br($text),130).'</span><a href="javascript:void(0)" class="more_ques">'.$vm.'</a>';
											echo '<span class="q-full">'.$text.'</span><br/>';
										}else{
											echo $text.'<br/>';
										}
									}
								}
							?>
							</p>
							<!--<p class="time-post"><?=lang('Posted_on')?> <?=date('l, M d, Y',strtotime($row->created)).' '.lang('by').' '.$row->fullname?></p>-->
							<a class="faq-question-btn f-bb" href="javascript:void(0);" title=""><?=lang('view_answer')?></a>
							<div class="faq-answer ab-hide">
							<?php if(!empty($row->answer)){ ?>
								<p>
									<?=CutText(nl2br($row->answer),300)?><?php if(strlen($row->answer)>300){ ?> <a href="javascript:void(0)" class="more_faq"><?=lang('view_more')?></a> <?php } ?>
								</p>
								<p style="display:none">
									<?php if(explode_textarea_array($row->answer)){
											foreach(explode_textarea_array($row->answer) as $text){
												echo $text .'<br />';
											}
										}
									?>
								</p>
							<?php } ?>
							</div>
						</div>
					</div>
				<?php } 
                        }else{ ?>
                        <div class="c_update"><?=lang('not_found')?></div>
                <?php } ?>
				</div>
				<div class="page-bar">
                    <?=$pagination?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4">
			<?php if(!empty($new_arrivals_category)){?>
			<div class="ab-crtalent">
				<div class="ab-crtalent-tt f-bb"><?=lang('Market_Entry')?></div>
				<div class="ab-crtalent-menu">
					<?php foreach($new_arrivals_category as $new_arrivals){ ?>
					<div class="ab-crtalent-item"><a href="<?=PATH_URL_LANG.($new_arrivals->slug_en=='faq'?($this->uri->segment(1)=='vi')?'cau-hoi':'faq':url_lang(lang('market_entry')).'/'.$new_arrivals->$slug)?>" title="<?=$new_arrivals->$name?>" class="f-bb <?=$new_arrivals->slug_en=='faq'?'active':''?>"><?=$new_arrivals->$name?></a></div>
					<?php }?>
					<div class="ab-crtalent-item">
						<a href="<?=PATH_URL_LANG.url_lang(lang('Client_List'))?>" class=" f-bb <?=($this->uri->segment(2)==url_lang(lang('Client_List')))?'active':''?>" title="<?=lang('Client_List')?>"><?=lang('Client_List')?></a>
					</div>

				</div>
			</div>	
			<?php }?>
			<div class="ab-brochure">
				<a href="javascript:void(0);" title="">
					<img src="<?=base_url()?>assets/img/btn/btn-brochure.png" alt="" />
				</a>
			</div>
			<div class="legislation"><a href="http://backup.talentnet.vn/edm/client-subcribe.html">STAY UPDATED WITH VIETNAM’S HR LEGISLATION</a></div>
			
			<div class="ab-question mt29">
				<div class="ab-question-tt f-bb"><?=lang('user_questions')?></div>
				<div class="ab-question-form">
					<div class="row">
						<form id="faq_form">
						<div class="col-md-12"><input type="text" name="fullname" value="" placeholder="<?=lang('fullname')?>"/></div>
						<div class="col-md-12"><input type="text" name="company" value="" placeholder="<?=lang('company_name')?>"/></div>
						<div class="col-md-12"><input type="text" name="email" value="" placeholder="<?=lang('email')?>"/></div>
						<div class="col-md-12 txt"><textarea name="quest" placeholder="<?=lang('question')?>"></textarea></div>
						<div class="col-md-12 txt faq_captcha" id="box_catpcha">
							<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
							<span>Can’t see image?</span>
							<a href="javascript:void(0)" id="btRefresh" title="">Reload</a>
						</div>
						<div class="col-md-12"><input type="text" name="captcha" value="" placeholder="<?=lang('enter_code_above')?>"/></div>
                        <div class="col-md-12 green" id="box_alert" style="padding-top: 5px;border:none;display: none;"></div>
						<div class="col-md-12 send"><a class="f-bb submit_faq" href="javascript:void(0);" title=""><?=lang('send')?></a></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#fad-tk" id="fad-tk-popup-click"></a>
<div style="display: none;">
	<div id="fad-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tk f-bb" style="height: 110px;padding-left: 5px;padding-right: 5px;">
				<span>Thank you for submitting questions.<br/>We will respond as soon as possible.</span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a></div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    Page.faq();
    /*$('#select_size').change(function(){
            s = ($(this).find("option:selected").val()) ? $(this).find("option:selected").val() : 5;
            k= $('input[name="keyword"]').val();
            window.location = '<?=current_url()?>?k='+encodeURIComponent(k)+'&s='+s;
        });*/
    $('.faq-search #btSearch').bind("click",function(){
       //s = ($(this).find("option:selected").val()) ? $(this).find("option:selected").val() : 5;
       k= $('input[name="keyword"]').val();
       window.location = '<?=current_url()?>?k='+encodeURIComponent(k); 
    });
    $('#box_catpcha #btRefresh').bind('click',function(){
        rq= '?'+ new Date().getTime();;
        $('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
    });

    $('#change_number_page').bind('change',function(){
    	p=$(this).val();
        
        if(typeof p=='undefined') 
            str_query='&p=1';
        else 
            str_query ='&p='+p;
        k= $('input[name="keyword"]').val();
       window.location = '<?=current_url()?>?k='+encodeURIComponent(k)+str_query; 
    });

    //scroll to menu-ab when change page 
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('?');
    if(sURLVariables!=""){
    	scroll_to(".menu-ab");
    }
    $('#fad-tk-popup-click').fancybox();
});
</script>