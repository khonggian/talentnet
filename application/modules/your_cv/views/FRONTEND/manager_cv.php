<?php
	$slug = language('slug');
?>
<?=modules::run('home/banner',uri_string())?>
<div id="saved-jobs-page" class="content-bg1">
	<div class="row content-row">
        <div class="menu-ab">
        <a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="Candidates"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
        </div>
        
        <?=modules::run('home/menu_user')?>
		
        
        <div class="tbl-saved-jobs your-cv">
            <p class="title"><?=$title?></p>
            <div class="tbl">
				<?php if(!empty($result)){
						$i = 1;
						foreach($result as $r){
				?>
                <div class="tbl-item <?=$i%2!=0?'row-active':''?> item_job_<?=$r->id?>">
                    <div class="sj-tbl">
                        <div class="sj-tr left">
                            <div><a href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'en' ? 'your-cv' : 'cong-viec-cua-ban').'/'.$r->slug_cv?>" class="black-color">Your CV</span></a></div>
                        </div>
                        <div class="sj-tr left">
                            <div>
                                <a href="javascript:;" class="active-color"><?=date('d/m/Y', strtotime($r->created));?></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <a href="javascript:;" class="dl-svjob del_jobs p_submit icon-delete" data-id="<?=$r->id?>" data-type="your_cv" title="Delete"><span>Delete</span></a>
                </div>
				<?php $i++;
					}
				} 
				else
				{
				?>
				<div class="c_update">
                    <span><?=lang('no_cv_found')?></span>
                    <a class="no-cv-btn" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec')?>"><?=lang('Create_online')?></a>
                    <?php if(!$cv_upload){?><a class="no-cv-btn" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'upload_cv':'upload_cv')?>"><?=lang('Upload_CV')?></a><?php } ?>     
                </div>
				<?php }?>
				<div class="clearfix"></div>
			</div>


            <div class="tbl">
                <?php if($cv_upload){?>
                <div class="tbl-item row-active item_job_<?=$cv_upload->id?>" style="width: 100%;">
                    <div class="sj-tbl">
                        <div class="sj-tr left">
                            <div><a href="<?=base_url().DIR_UPLOAD_CV.$cv_upload->file?>" class="black-color">Your CV Upload</span></a></div>
                        </div>
                        <div class="sj-tr left">
                            <div>
                                <a href="javascript:;" class="active-color"><?=date('d/m/Y', strtotime($cv_upload->created));?></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <a href="javascript:;" class="dl-svjob del_jobs p_submit icon-delete" data-id="<?=$cv_upload->id?>" data-type="cv_upload" title="Delete"><span>Delete</span></a>
                </div>
                <?php
                } else if(!empty($result))
                {
                ?>
                <div class="c_update">
                    <span><?=lang('no_cv_found')?></span>
                    <a class="no-cv-btn" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'upload_cv':'upload_cv')?>"><?=lang('Upload_CV')?></a>    
                </div>
                <?php }?>
            </div>
		</div>
	</div>
</div>
