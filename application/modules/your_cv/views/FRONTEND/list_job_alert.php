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
        <?=modules::run('home/menu_user')?>

		<div class="menu-ab">
		<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="Candidates"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
		</div>
        
        <div class="tbl-saved-jobs">
            <p class="title"><?=$title?></p>
            
            <div class="tbl">
				<?php if(!empty($result)){
						$i = 1;
						foreach($result as $r){
				?>
                <div class="row tbl-item <?=$i%2!=0?'row-active':''?> item_job_<?=$r->id?>" style="width: 100%;">
                    <div class="number"><?=$i?></div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="tbl-td">
                                            <p><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'edit-job-alert':'chinh-sua-bao-cao-viec-lam').'/'.$r->slug?>" title="Click Edit" class="black-color"><?=$r->job_title?></a></p>
                                            <ul><li>Exp. <?=date('d/m/Y', strtotime($r->created));?></li><li><?=!empty($r->location)?$r->location->name:''?></li></ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="tbl-td">
                                            <p><a href="#" class="active-color"><?=!empty($r->industry)?$r->industry->$name:''?></a></p>
                                            <p>Saved <?=date('d/m/Y', strtotime($r->created));?></p>
                                            <p><?='$'.number_format($r->salary_min, 0, ',', ',').' - $'.number_format($r->salary_max, 0, ',', ',')?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="icon">
                        <ul>
                            <li>
                                <a href="javascript:;" class="dl-svjob del_jobs p_submit" data-id="<?=$r->id?>" data-type="<?=$type?>" title="Delete"><img class="delete-icon" src="<?=base_url()?>assets/img/dashboard/delete-icon.png"/></a><span>Delete</span>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
				<?php $i++;
					}
				} 
				else
				{
				?>
				<div class="c_update"><?=lang('updates')?></p>
				<?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
	</div>
</div>