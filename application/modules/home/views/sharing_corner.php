<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div id="news-talent" class="content-bg1 lah-cor">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Sharing_Corner')?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=lang('Sharing_Corner')?></h1>
                <?php $i = 0;?>       
				<?php if(!empty($result)){
						foreach($result as $r){
						$width = 175;
						$height = 106;
				?>
				<div class="item-news-talent <?php if($i == 0){echo "first"; $i++;}?>">
					<div class="img"><a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$r->$slug?>" title="<?=$r->$name?>"><img src="<?=img(DIR_UPLOAD_SHARING_CORNER.$r->image,$width,$height)?>" alt="<?=$r->$name?>" /></a></div>
					<div class="text">
						<div><a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$r->$slug?>" title="<?=$r->$name?>"><?=((CutText($r->$name,70)))?></a></div>
						<div class="date"><?=date('d/m/Y',strtotime($r->created))?></div>
						<div class="mt5"><?=CutText($r->$description,120)?></div>
						<div class="txt-r mt10"> <a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$r->$slug?>" title="<?=$r->$name?>"><?=lang('view_more');?></a></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php
				}
				?>
				<div class="page-bar">
					<?=$pagination?>
					
					<div class="clearfix"></div>
				</div>
				<?php } else {?>
					<div class="c_update"><?=$this->input->get('keyword')?lang('not_found'):lang('updates')?></div>
				<?php }?>
			</div>
		</div>
		<div class="ab-r col-md-4">
            
			<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=lang('Information_Center')?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely">
								<a class="f-bb" href="<?=PATH_URL_LANG.toSlug(lang('Information_Center')).'/'.$c->{$slug}?>" title="<?=$c->$name?>"><?=$c->$name?></a>
							</div>
						</div>
					<?php }
					}
					?>
				</div>
			</div>
			
            <?php if($type != 'market_entry'){?>
                <?=modules::run('block/you_surely_use')?>
            <?php }?>
			<?php if($type != 'information_center'){?>
			<?=modules::run('block/brochure')?>
			<?php }?>
			<?//=modules::run('home/services')?>
			
			<?=modules::run('home/in_the_news')?>
			
			<?php if($type != 'information_center'){?>
            
			
            <?=modules::run('home/client')?>
			<?php }?>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
    function gotoURL(){
        var view_by='';
        var keyword ='';
        var str_query ='';
        var by_day ='';
        var by_month ='';
        var by_year='';
        p=$('#change_number_page').val();
        
        if(typeof p=='undefined') 
            str_query='p=1';
        else 
            str_query ='p='+p;
        
        if($('#viewby').size()>0){
            view_by = $('#viewby').val();
            str_query += '&view_by='+view_by;
        }
        
        if($('#txtKeyword').size()>0){
            keyword = $('#txtKeyword').val();
            str_query += '&keyword='+keyword;
        }
        if($('#by_day').size()>0){
            by_day = $('#by_day').val();
            str_query += '&by_day='+by_day;
        }
        if($('#by_month').size()>0){
            by_month = $('#by_month').val();
            str_query += '&by_month='+by_month;
        }
        if($('#by_year').size()>0){
            by_year = $('#by_year').val();
            str_query += '&by_year='+by_year;
        }
        window.location= '<?=base_url().uri_string()?>?'+str_query;
    }
    //scroll to menu-ab when change page 
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('?');
    if(sURLVariables!=""){
    	scroll_to(".menu-ab");
    }
    
    $('#btSearchLibrary').click(gotoURL);
    $('#btSearchPressRelease').click(gotoURL);
    $('#viewby').change(gotoURL);
    $('#change_number_page').change(gotoURL);
});
</script>