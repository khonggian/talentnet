<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div id="news-talent" class="content-bg1 licenter fix-pager">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>" title="<?=$title_parent?>"><?=$title_parent?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about faq">
				<h1 class="f-bb"><?=$title?></h1>
                        <?php if($get_category->id==4){ ?>
                        <div class="faq-search mbt14" style="">
                        	<div class="row">
	                            <div class="col-md-10"><input type="text" name="keyword" id="txtKeyword" value="<?=$library_keyword?>" placeholder="<?=lang('enter_keywords')?>"/></div>
	    						<div class="col-md-2"><a class="f-bb" id="btSearchLibrary" href="javascript:void(0);" title=""><?=lang('Search')?></a></div>
	                            <div class="clearAll"></div>
	                        </div>
                        </div>
                        <?php }else if($get_category->id==6){
                            $by_day = isset($by_day)?$by_day:'';
                            $by_month = isset($by_month)?$by_month:'';
                            $by_year = isset($by_year)?$by_year:'';
                            ?>
                        <div class="date-bar">
                        <form action="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>" method="GET">
						<div class="text w84" style="width: 94px;"><?=lang('search_by_date');?></div>
						<div class="sl-by">
							<div class="select w69">
								<select class="js-select" name="by_day" id="by_day">
									<option value=""><?=lang('Day');?></option>
                                    <?php for($i=1;$i<=31;$i++){?>
                                    <option value="<?=$i?>" <?=$by_day==$i?'selected="selected"':''?>><?=$i?></option>        
                                    <?php }?>
								</select>
							</div>
                            <div class="select w69">
								<select class="js-select" name="by_month" id="by_month">
									<option value=""><?=lang('Month');?></option>
                                    <?php for($i=1;$i<=12;$i++){?>
                                    <option value="<?=$i?>" <?=$by_month==$i?'selected="selected"':''?>><?=$i?></option>        
                                    <?php }?>
								</select>
							</div>						
                            <div class="select w69">
								<select class="js-select" name="by_year" id="by_year">
									<option value=""><?=lang('Year');?></option>
                                    <?php for($i=2007;$i<=date('Y');$i++){?>
                                    <option value="<?=$i?>" <?=$by_year==$i?'selected="selected"':''?>><?=$i?></option>        
                                    <?php }?>
								</select>
							</div>
                            <div class="search"><input type="button" id="btSearchPressRelease" value="<?=lang('search');?>" class="btn-search" /></div>
                            	
							<div class="clearfix"></div>
						</div>
                        <div class="input"><input type="text" name="keyword" id="txtKeyword" value="<?=$this->input->get('keyword')?htmlspecialchars($this->input->get('keyword')):''?>" placeholder="<?=lang('enter_keywords');?>" /></div>
                        </form>
                        </div>
                        <?php }else{ ?>
                        <div class="date-bar">
                        <form action="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>" method="GET">
						<div class="text"><?=lang('search_by');?></div>
						<div class="sl-by">
							<div class="select">
								<select class="js-select" name="viewby" id="viewby">
									<option value=""><?=lang('View_all');?></option>
									<?php if($list_service){ ?>
                                        <?php foreach($list_service as $key_service=>$value_service){?>
                                    <option value="<?=$key_service?>" <?=$view_by==$key_service?'selected="selected"':''?>><?=$value_service[$this->uri->segment(1)]?></option>        
                                    <?php } } ?> 
								</select>
							</div>
							
							<div class="clearfix"></div>
						</div>
                        </form>
                        </div>
						<?php } ?>
					<div class="clearfix"></div>
				<?php if(!empty($result)){ ?>
				<div class="wr-licenter">
					<?php 
							foreach($result as $r){
							$width = 175;
							$height = 106;
					?>
					<div class="item-news-talent">
						<div class="img"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><img src="<?=img($path_img.$r->image,$width,$height)?>" alt="<?=$r->$name?>" /></a></div>
						<div class="text">
							<div><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><?=ucfirst(CutText($r->$name,70))?></a></div>
							<div class="date"><?=date('d/m/Y',strtotime($r->created))?></div>
							<div class="mt5"><?=CutText($r->$description,120)?></div>
							<div class="txt-r mt10"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=lang('view_more');?>" class="viewmore"><?=lang('view_more');?></a></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php
					}
					?>
				</div>
				<div class="page-bar">
					<?=$pagination?>
					<div class="clearfix"></div>
				</div>
				<?php } else { ?>
					<div class="c_update"><?=$this->input->get('keyword')?lang('not_found'):lang('no_result')?></div>
				<?php }?>
			</div>
		</div>
		<div class="ab-r col-md-4">
            <?php if($type != 'market_entry' && $get_category->id!=4 && $get_category->id!=6){?>
                <?//=modules::run('home/subscribe',$get_category->id,$table)?>		
			<?php }?>
			<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=$title_parent?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely">
								<a class="f-bb <?=$this->uri->segment(3)==$c->$slug?'active':''?>" href="<?=PATH_URL_LANG.($c->slug_en =='faq'?'faq':$slug_parent.'/'.$c->$slug)?>" title="<?=$c->$name?>"><?=$c->$name?></a>
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
        window.location= '<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>?'+str_query;
    }
    $('#btSearchLibrary').click(gotoURL);
    $('#btSearchPressRelease').click(gotoURL);
    $('#viewby').change(gotoURL);
    $('#change_number_page').change(gotoURL);
    //scroll to menu-ab when change page 	
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('?');
    console.log(sURLVariables);
    if(sURLVariables!=""){
    	scroll_to(".menu-ab");
    }
});
</script>