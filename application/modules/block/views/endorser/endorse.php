<?php
    $field_name = language('name'); 
?>
<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=lang('skills_endorsements')?></div>
                <div style="padding-top:12px ;"><?=lang('endorsements_hint')?> 
                	<?php 
                		if($this->uri->segment(3,0)=='0' ){ 
                			if($this->uri->segment(2)=='about-talentnet' || $this->uri->segment(2)=='gioi-thieu-talentnet'){
                				echo 'Talentnet expertise';	
                			}else{
                				echo lang('hr_services');	
                			}
                		}else{
                			$name=language('name'); echo $hr_cate[$name]; echo ' expertise' ;
                			
                		}
                	?>
               	</div>
				<div class="ab-skill">
				<?php if(!empty($lstDorse)){ ?>
                <?php foreach($lstDorse as $d){ ?>	
					<div class="row">
						<div class="col-md-8">
							<div class="row it-skill" id="skill_<?=$d->id?>">
								<!-- <div class="col-md-1 f-bb" style="display:<?=$d->counter>0?'table-cell':'none'?>"><?=$d->counter ?></div> -->
								<div class="col-md-1 f-bb" ><?=$d->counter ?></div>
								<div class="col-md-11">
									<a class="show_endorse" data-id="<?=$d->id;?>" href="javascript:void(0)" title="">
										<span class="hl"><?=$d->$field_name?></span>
										<span class="hv"><span><span>ENDORSE NOW</span></span></span>
									</a>
								</div>
							</div>
						</div>
                        <!--<?php if($d->counter>0){ ?>
						<div class="col-md-4"><img src="<?=img(DIR_UPLOAD_AVATAR.$d->avatar,23,23)?>" alt="" />
						</div>
                        <?php } ?>-->
					</div>
                <?php } }?>		
		</div>
</div>
<a href="#ab-pu-endorse-tk" id="popup_tk"></a>
<a href="#ab-pu-endorse-lg" id="popup_lg"></a>
<script type="text/javascript">
$(document).ready(function(){
    var flag=0;
    $('#popup_tk').fancybox();
    $('.show_endorse').bind('click',function(){
       if(flag==1) return false;
       flag=1;
       skill_id= $(this).data('id');
       //console.log(skill_id);
       var url= base_url+'block/post_skill';
       $.post(url,{token:token,skill_id:skill_id},function(res){
       		console.log(res);
            if(res.status=='true') {
            	$('#skill_'+skill_id+' div:first').show();
                $('#skill_'+skill_id+' div:first').html(res.counter);
            /*}else if(res.login=='false'){
            	$('#popup_lg').fancybox();
            	$('#popup_lg').trigger('click');*/
            	flag=0;
            }else{
            	flag=0;
                $('#popup_tk').trigger('click');
            }      
       },'JSON');
    });

    
	/*$('#popup_tk').fancybox();
	$('#popup_lg').fancybox();
	$('.show_endorse').fancybox({
		beforeShow:function(){
			var url = base_url+'block/ajax_skill'; 
			$.post(url,{token:token},function(res){
				if(res.st=='true'){
					$('.ab-pu-endorse-form .row').html(res.listCheck);
					$('.ab-submit-text input[name="email"]').val(res.email);
					$('.iCheck').uniform();
				}
			},'JSON');
			setTimeout(function(){
				$('.ab-scroll').jScrollPane();
			},250);
		}
	});
	$('.ab-submit-btn').bind('click',function(){
	   var url= base_url+'block/post_skill';
	   data_post = {token:token};
	   $('input[name*="chkDorse"]').each(function(index){
			if($(this).is(':checked'))
				data_post['chkDorse['+index+']']= $(this).val();
	   });
	   data_post['email'] = $('.ab-submit-text input[name="email"]').val();
	   if(data_post['email'] == ''){
			$('input[name="email"]').focus();
			return false;
	   }
	   $.post(url,data_post,function(res){
			if(res=='true'){
				$.fancybox.close();
				$('#popup_tk').trigger('click');
				$.post(base_url+'block/endorse_ajax',{token:token},function(res_en){
					console.log(res_en);
					 $('.ab-skill').html(res_en);
				});
			}
	   });
	}); */
});
</script>
<div style="display: none;">
	<div id="ab-pu-endorse">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">ENDORSE NOW</div>
			<div class="note">Please select the skills you want to endorse</div>
			<div class="ab-pu-endorse-form">
				<div class="ab-scroll">
					<div class="row">
						<div class="col-md-4">
							<!--<input class="iCheck" type="checkbox" name="" value=""/><span>Online Advertising</span>-->
						</div>
					</div>
				</div>
			</div>
			<div class="ab-submit">
				<div class="ab-submit-text left"><input type="text" name="email" value="" placeholder="Enter your email" /></div><a class="left ab-submit-btn" href="javascript:void(0);" title=""></a>
				<div class="clearall"></div>
			</div>
		</div>
	</div>
</div>
<div style="display: none;">
	<div id="ab-pu-endorse-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb"><?=lang('endorse_now')?></div>
			<div class="ab-pu-endorse-tk f-bb">
				<span><?=lang('can_not_choose_more')?></span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a></div>
		</div>
	</div>
</div>
<div style="display: none;">
	<div id="ab-pu-endorse-lg">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<!--<div class="ab-pu-endorse-tt f-bb"><?=lang('sign_in_here')?></div>-->
			<div class="ab-pu-endorse-tk f-bb">
				<span><?=lang('login_to_endorse')?></span>
			</div>
			<!--ab-btn-close-->
			<div class="txt-c"><a class="btn-update" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" title="<?=lang('Sign_in')?>" onclick="$.fancybox.close();" title=""><?=lang('sign_in_here')?></a></div>
		</div>
	</div>
</div>