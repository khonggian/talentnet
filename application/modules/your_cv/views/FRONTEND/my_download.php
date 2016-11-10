<?php
	$slug = language('slug');
	$name = language('name');
?>
<?=modules::run('home/banner',uri_string())?>
<div id="saved-jobs-page" class="content-bg1">
	<div class="row content-row">
        <?=modules::run('home/menu_user')?>
		<div class="menu-ab">
		<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="Candidates"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="tbl-saved-jobs my-download">
            <p class="title"><?=$title?></p>
			<div class="tbl">
					<?php if(!empty($result)){
							$i = 1;
							foreach($result as $r){
					?>
					<div class="tbl-item <?=$i%2!=0?'row-active':''?> item_job_<?=$r->id?>" style="width: 100%;">
						<div class="number"><div><span><?=$i?></span></div></div>
						<div class="sj-tbl">
                        	<div class="sj-tr left">
                        		<div><a href="javascript:;" title="<?=$r->$name?>" class="black-color"><?=$r->$name?></a></div>
                        	</div>
                        	<div class="sj-tr left">
                        		<div>
                        			<p><a href="<?=PATH_URL_LANG.'download-document'?>" class="active-color">Link Download</a></p>
                                	<p>Download <?=date('d/m/Y', strtotime($r->created));?></p>
                        		</div>
                        	</div>
                        	<div class="clear"></div>
                    	</div>
						<!-- <div class="row">
							<div class="col-md-4 col-sm-6 col-xs-6">
								<table>
	                                <tbody>
	                                    <tr>
	                                        <td class="tbl-td">
	                                            <p><a href="javascript:;" title="<?=$r->$name?>" class="black-color"><?=$r->$name?></a></p>
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
	                                            <p><a href="<?=PATH_URL_LANG.'download-document'?>" class="active-color">Link Download</a></p>
	                                            <p>Download <?=date('d/m/Y', strtotime($r->created));?></p>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
							</div>
						</div> -->
					</div>
					<?php $i++;
						}
					} 
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
