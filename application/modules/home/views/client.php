<div class="ab-salary">
    <div class="ab-salary-item">
        <div class="row client">
        	<div class="tt f-bb"><?=$title?></div>
            <?php if(!empty($result)){?>
                <?php foreach($result as $k=>$c){ ?>
                    <?php if($k%2===0){?>
                        <div class="col-md-5">
                            <a href="javascript:void(0);" title=""><img src="<?=img($dir_img.$c->image,103,35);?>" alt="" /></a>
                        </div>
                        <div class="col-md-2"></div>
                    <?php }else{?>
                        <div class="col-md-5">
                            <a href="javascript:void(0);" title=""><img src="<?=img($dir_img.$c->image,103,35);?>" alt="" /></a>
                        </div>
                    <?php }?>
                <?php } ?>
            <?php }?>
        </div>
    </div>
</div>
