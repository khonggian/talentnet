<?php
$lang_name = language('name');
$lang_industry = language('industry');
 ?>
<?=modules::run('home/banner',uri_string())?>
<div id="news-talent" class="content-bg1 lpar">
    
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Partners');?></span>
		</div>
		<div class="ab-l col-md-8">
        <div class=" ab-about">
			<h1 class="f-bb"><?=lang('Partners_list');?></h1>
			<div class="fs13"></div>
			<div class="table-clients mt24">
				<table>
					<tr style="display:none">
						<td></td>
					</tr>
                    <?php if(!empty($result)){ ?>
                    <?php $i = 0?>
                    <?php foreach($result as $row){ ?>                   
                    <tr <?php if($i == 0){echo 'class="tr-first"'; $i++;}?>>
						<td width="30%"><img src="<?=img(DIR_UPLOAD_PARTNERS.$row->image,149)?>" alt="<?=$row->$lang_name?>"></td>
						<td width="20%"><?=$row->$lang_name?></td>
						<td width="50%"><?=$row->{language('content')}?></td>
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
             <?//=modules::run('home/client_partners',lang('Partners'),PARTNERS_TB,DIR_UPLOAD_PARTNERS)?>
             <?=modules::run('block/you_surely_use')?>
             <?=modules::run('home/in_the_news')?>
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

<script type="text/javascript">
	$(document).ready(function(){
		Page.list_client();
        $('#select_size').change(function(){
            s = $(this).find("option:selected").val();
            r= $('select[name="range"] option:selected').val();
            window.location = '<?=current_url()?>?r='+r+'&s='+s;
        });
        $('select[name="range"]').change(function(){
            r = $(this).find("option:selected").val();
            s= $('#select_size option:selected').val();
            window.location = '<?=current_url()?>?r='+r+'&s='+s;
        });
        //scroll to menu-ab when change page 
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('?');
	    if(sURLVariables!=""){
	    	scroll_to(".menu-ab");
	    }
	});
</script>