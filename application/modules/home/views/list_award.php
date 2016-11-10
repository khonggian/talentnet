<?php
$lang_name = language('name');
$lang_industry = language('industry');
 ?>
<?=modules::run('home/banner',uri_string())?>
<div id="news-talent" class="content-bg1 lawar">
    
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Awards');?></span>
		</div>
		<div class="ab-l col-md-8">
        <div class=" ab-about">
			<h1 class="f-bb"><?=lang('Awards');?></h1>
			<div class="fs13"></div>
			<div class="table-clients mt24">
				<table>
					<tr style="display:none">
						<td></td>
					</tr>
                    <?php if(!empty($result)){ ?>
                    <?php $i = 0;?>
                    <?php foreach($result as $row){ ?>                   
                    <tr style="background-color: #fff;" <?php if($i == 0){echo 'class="one first"';}else{echo 'class="one"';}?>>
						<td class="width40"><img src="<?=img(DIR_UPLOAD_AWARDS.$row->image,200,100)?>" alt="<?=$row->$lang_name?>"></td>
						<td class="width60 hide-mb cl-br"><?=$row->$lang_name?></td>
					</tr>
					<tr class="two">
						<td colspan="2">
							<!-- <div class="tt-aw cl-br"><?=$row->$lang_name?></div> -->
							<div class="ft-div shr">
								<div class="ct-ov-ft">
									<?=$row->{language('content')}?><?php if(strlen($row->{language('content')})>200){ ?> 	
								</div>
								<a href="javascript:void(0)" class="more_awar"><?=lang('view_more')?></a> <?php } ?>
							</div>
							<div class="ft-div full">
								<?=$row->{language('content')}?>
							</div>
						</td>
					</tr>
					<?php $i++;?>
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
            <?//=modules::run('home/comment_client_left')?>
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
	        window.location= '<?=PATH_URL_LANG.$this->uri->segment(2)?>?'+str_query;
	    }
	    $('#change_number_page').change(gotoURL);
	    //scroll to menu-ab when change page 
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('?');
	    if(sURLVariables!=""){
	    	scroll_to(".menu-ab");
	    }
	});
</script>