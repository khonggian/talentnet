<?php
	$name = language('name');
	$industry_name = language('industry_name');
	$salary_min = language('salary_min');
	$salary_max = language('salary_max');
	$slug = language('slug');
?>
<?=modules::run('home/banner',uri_string())?>

<div id="saved-jobs-page" class="content-bg1">
	<div class="row content-row">
        <div class="menu-ab">
          <a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="Candidates"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
        </div>
        
        <?=modules::run('home/menu_user')?>
        
        <div class="tbl-saved-jobs">
            <p class="title"><?=$title?></p>
            <div class="tbl <?php if($type!="save_job"){echo 'jobs-applied';}?>">
				<?php if(!empty($result)){
						$i = 1;
						foreach($result as $r){
				?>
                <div class="tbl-item <?=$i%2!=0?'row-active':''?> item_job_<?=$r->id?>">
                    <div class="number">
                        <div><span><?=$i?></span></div>
                    </div>
                    <div class="sj-tbl">
                        <div class="n-job sj-tr left">
                            <div>
                                <p>
                                    <a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$r->slug;?>" title="<?=$r->name?>" class="black-color"><?=$r->name?></a>
                                </p>
                                <ul>
                                    <li>Exp. <?=date('d/m/Y', strtotime($r->expired));?></li>
                                    <!--<li><?=implode_json($r->location)?></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="lc-job sj-tr left">
                            <div><?=implode_json($r->location)?></div>
                        </div>
                        <div class="ps-job sj-tr left">
                            <div>
                                <!--<a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$r->slug;?>" class="active-color">-->
                                     <p class="active-color"><?=implode_json($r->industry)?></p>
                                <!--</a>-->
                            </div>
                        </div>
                        <div class="sv-job sj-tr left">
                            <div>
                                Saved <?=date('d/m/Y', strtotime($r->sv_created));?>
                            </div>
                        </div>
                        <div class="sl-job sj-tr left">
                            <div>
                                <?=number_format($r->salary_min, 0, ',', ',')?> - <?=number_format($r->salary_max, 0, ',', ',')?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php if($type == 'save_job'){?>
                        <a href="javascript: void(0);" class="dl-svjob del_jobs p_submit icon-delete" data-id="<?=$r->id?>" data-type="<?=$type?>" title="Delete"><span>Delete</span></a>
                    <?php }?>
                </div>
				<?php $i++;
					}?>
                    <?php if($type == 'save_job'){?>
                    <p style="font-size:13px;color:#989898;margin-left:45px; margin-top: 5px;">* These jobs will be automatically deleted upon expiry date</p>
                    <?php }?>
				<?php } 
				else
				{
				?>
				<div class="c_update"><?=lang('updates')?></p></div>
				<?php }?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>