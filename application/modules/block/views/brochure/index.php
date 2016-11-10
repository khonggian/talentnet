<!--<div class="ab-brochure"><a href="<?=PATH_URL_LANG.'download'?>" title="Download"></a></div>-->
<div class="ab-brochure"><a href="#ab-brochure-popup" id="popup_brochure" title="Download"><img src="<?=base_url()?>assets/img/btn/btn-brochure.png" alt="" /></a></div>
<div class="legislation" style="margin-bottom:20px"><a href="http://backup.talentnet.vn/edm/client-subcribe.html">Stay update with Vietnam HR Legislation</a></div>
<div style="display: none;">
	<div id="ab-brochure-popup">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">DOWNLOAD</div>
            <div class="note">Please enter the information below to download our brochure</div>
            <form method="post" id="form_brochure_info">
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
            <div class="ab-submit">
            	<div class="item">
					<p class="ab-submit-status red"></p>
            	</div>
			</div>
            <div class="ab-submit">
            	<div class="item">
	                <a class="btn-carrer btn-carrer-create signin f-bb" title="Send" href="javascript:void(0);"><?=lang('send')?></a>
            	</div>
			</div>
            </form>
		</div>
	</div>
</div>
<a href="#ab-brochure-popup-tk" id="ab-brochure-popup-click"></a>
<div style="display: none;">
	<div id="ab-brochure-popup-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<!--<div class="ab-pu-endorse-tt f-bb">ENDORSE NOW</div>-->
			<div class="ab-pu-endorse-tk f-bb" style="height: 110px;padding-left: 5px;padding-right: 5px;">
				<span><?=lang('thank_you_download_brochure')?></span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a></div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#box_catpcha #btRefresh').bind('click',function(){
		rq= '?'+ new Date().getTime();;
		$('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
	});	
	
    $('#popup_brochure').fancybox();
    $('#ab-brochure-popup-click').fancybox();
    $('#form_brochure_info .btn-carrer').bind('click',function(){
        var el_status = $('#form_brochure_info .ab-submit-status'); 
		var $this= $(this);
        if(!$(this).hasClass('disabled')){
            $(this).addClass('disabled');
            el_status.html('');
            var info={
				action:"Download brochure",
                token:token,
                fullname: $('#form_brochure_info input[name="fullname"]').val(),
                title : $('#form_brochure_info input[name="title"]').val(),
                company : $('#form_brochure_info input[name="company"]').val(),
                phone : $('#form_brochure_info input[name="phone"]').val(),
                email : $('#form_brochure_info input[name="email"]').val(),
				captcha : $('#form_brochure_info input[name="captcha"]').val()
                }
           $.post('<?=PATH_URL_LANG.'block/brochure_ajax_post_info'?>',info,function(res){
                
                if(res.error.length>0)
                    el_status.html(res.error[0].txt);
                else{
                    $('#form_brochure_info input[name="fullname"]').val('');
                    $('#form_brochure_info input[name="title"]').val('');
                    $('#form_brochure_info input[name="company"]').val('');
                    $('#form_brochure_info input[name="phone"]').val('');
                    $('#form_brochure_info input[name="email"]').val('');
					$('#form_brochure_info input[name="captcha"]').val('');
                    $.fancybox.close();
                    // $('#ab-brochure-popup-click').trigger('click');

					// $('#btRefresh').trigger('click');
					
                    window.location = res.link_download;
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