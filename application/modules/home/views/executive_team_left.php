<?php 
    $name_field = field('name');
?>
<div class="ab-salary">
    <div class="ab-salary-item">
        <div class="row team">
        	<div class="tt f-bb"><?=lang('team');?></div>
            <?php if(!empty($executive_team_left)){?>
                <?php foreach($executive_team_left as $k=>$v){?>
                    <?php if($k===0 || $k%3===0){?>
                        <div class="row">
                    <?php }?>
                        <div class="col-md-4">
                			<a title="<?=$v->$name_field;?>" href="javascript:void(0);" title=""><img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$v->image,66,81);?>" alt="" /></a>
                		</div>
                    <?php if(($k+1)%3===0 || $k== count($executive_team_left)-1){?>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
