<?php
$lang_name = language('name');
$lang_industry = language('industry');
 ?>
<?=modules::run('home/banner',uri_string())?>
<div id="news-talent" class="content-bg1 lclient-page">
    
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
        <div class=" ab-about">
			<h1 class="f-bb"><?=$title?></h1>
			<div class="table-clients mt24">
                <div class="faq-search mbt14" style="">
                        <form action="" name="frmSearchClients">
    						<div class="col-md-10"><input type="text" name="txtKeyword" id="txtKeyword" value="<?=$keyword?>" placeholder="<?=lang('enter_keywords')?>"/></div>
    						<div class="col-md-2"><a class="f-bb" id="btSearchClients" href="javascript:void(0);" title=""><?=lang('Search')?></a></div>
                            <div class="clearAll"></div>
                        </form>
				</div>
				<table>
					<tr>
						<td class="f-s60"><?=lang('name');?>
							<div class="search-clients lc">
								<div class="form-candidate">
									<form action="">
										<div class="">
											<div class="select left lc" style="width:70%">
												<select class="js-select" name="range">
													<option value="" <?=(empty($range))?'selected="selected"':''?>>All</option>
													<option value="a-d" <?=(isset($range)&& $range=='a-d')?'selected="selected"':''?>>A - D</option>
													<option value="e-h" <?=(isset($range)&& $range=='e-h')?'selected="selected"':''?>>E - H</option>
													<option value="i-l" <?=(isset($range)&& $range=='i-l')?'selected="selected"':''?>>I - L</option>
				                                    <option value="m-p" <?=(isset($range)&& $range=='m-p')?'selected="selected"':''?>>M - P</option>
				                                    <option value="q-t" <?=(isset($range)&& $range=='q-t')?'selected="selected"':''?>>Q - T</option>
				                                    <option value="u-x" <?=(isset($range)&& $range=='u-x')?'selected="selected"':''?>>U - X</option>
				                                    <option value="y-z" <?=(isset($range)&& $range=='y-z')?'selected="selected"':''?>>Y - Z</option>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
									</form>
								</div>
							</div>
						</td>
						<td><?=lang('industry');?>
							<div class="search-clients rc">
								<div class="form-candidate">
									<form action="">
										<div class="">
											<div class="select left lc" style="width:100%">
												<select class="js-select" name="industry">
													<option value="" <?=(empty($range))?'selected="selected"':''?>>All</option>
													<?php
														$indus=language('industry');
														foreach ($industry as $key => $row) {
													?>
													<option value="<?php echo $row->$indus; ?>" <?=$row->$indus==$this->input->get('i')?'selected="selected"':''?>><?php echo $row->$indus; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
									</form>
								</div>
							</div>
						</td>
					</tr>
                    <?php if(!empty($result)){ ?>
                    <?php $i = 0;?>
                    <?php foreach($result as $row){ ?>                   
                    <tr <?php if($i == 0){echo 'class="bdt"'; $i++;}?>>
						<td><?=$row->$lang_name?></td>
						<td>
						<?php if(!empty($row->$lang_industry)){
								foreach(explode_textarea_array($row->$lang_industry) as $value){
									echo $value .'<br/ >';
								}
							}
						?>
						</td>
					</tr>
                    <?php  } }else{ ?>
					<tr>
						<td><div class="c_update"><?= lang('updates');?></div></td>
					</tr>
                    <?php }?>
				</table>
			</div>
            <div class="page-bar">
            		<?=$pagination?>
					<div class="clearfix"></div>
				</div>
            </div>
		</div>
		<div class="ab-r lc col-md-4">
            <?=modules::run('home/comment_client_left')?>
            <?=modules::run('block/you_surely_use')?>
            <?=modules::run('home/in_the_news')?>
            <!--<?=modules::run('home/client_partners',lang('clients'),CLIENT_TB,DIR_UPLOAD_CLIENT)?>-->
			<!--<div class="ab-crtalent mt15">
				<div class="ab-crtalent-tt f-bb"><?=lang('career_talentnet');?></div>
				<div class="ab-crtalent-menu">
					<div class="ab-crtalent-item"><a class="f-bb active" href="javascript:void(0);" title=""><?=lang('news_activeties');?></a></div>
					<div class="ab-crtalent-item"><a class="f-bb" href="javascript:void(0);" title=""><?=lang('talentnet_inside');?></a></div>
					<div class="ab-crtalent-item"><a class="f-bb" href="javascript:void(0);" title=""><?=lang('career');?></a></div>
				</div>
			</div>
            
			div class="ab-joinourteam">
				<a href="javascript:void(0);" title=""><img src="<?=base_url()?>assets/img/bg/img-carrer-tl.png" alt="" /></a>
			</div-->
		</div>
    </div>
</div>

<?php if(!empty($result_client)){?>
<div class="box-banner" style="border: none;">
	<div id="logo-owl">
		<?php foreach($result_client as $client){?>
		<div class="item-logo"><a href="<?php if($client->link==''){ echo 'javascript:;'; }else{ echo $client->link; };  ?>" <?php if($client->link==''){  }else{ echo 'target="_blank"'; };  ?>><img src="<?=img(DIR_UPLOAD_CLIENT.$client->image,120,60)?>" alt="<?=$client->$lang_name?>" /></a></div>
		<?php }?>
	</div>
	<div class="clearfix"></div>
</div>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		
		Page.list_client();

        $('#select_size').change(function(){
            //s = $(this).find("option:selected").val();
            k= $("#txtKeyword").val();
            window.location = '<?=current_url()?>?k='+encodeURIComponent(k);
        });
        $('a#btSearchClients').bind('click',function(){
            k = $("#txtKeyword").val();
            //s= $('#select_size').val();
            window.location = '<?=current_url()?>?k='+encodeURIComponent(k);
        });
		
		$( "#txtKeyword" ).keypress(function( event ) {
			if ( event.which == 13 ) {
				$('a#btSearchClients').click();
				return false;
			}
		});		
		$('select[name="range"]').change(function(){
            r = $(this).val();
            //s= $('#select_size').val();
            window.location = '<?=current_url()?>?r='+r;
        });
        $('select[name="industry"]').change(function(){
            i = $(this).val();
            //s= $('#select_size').val();
            window.location = '<?=current_url()?>?i='+i;
        });

        //scroll to menu-ab when change page 	
        var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('?');
	    console.log(sURLVariables);
	    if(sURLVariables!=""){
	    	scroll_to(".menu-ab");
	    }
	});


	$('#change_number_page').change(function(event) {
		k = $("#txtKeyword").val();
		r = $('select[name=range]').val();
		//console.log(r);
		//return false;
		if(k !='' && r != ''){
			str = '?k='+k+'&r='+r+'&p='+$(this).val();
		}else if(k !=''){
			str = '?k='+k+'&p='+$(this).val();
		}else if(r !=''){
			str = '?r='+r+'&p='+$(this).val();
		}else{
			str = '?p='+$(this).val();

		}
		window.location = '<?=current_url()?>'+str;
	});
</script>