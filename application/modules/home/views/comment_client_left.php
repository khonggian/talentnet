<?php 
    $name = language('name');
    $description = language('description');
?>
<div class="ab-salary">
    <div class="ab-salary-item ab-salary-item-1">
        <ul>
            <?php foreach($comment_client_left as $comment){?>
                <li>
                    <div class="row user">
                        <div class="col-md-12"><p><?=$comment->$description?></p><img src="<?=base_url()?>assets/img/bg/bg_salary.png" alt="" /></div>
                    	<div class="col-md-1"><img src="<?=img(DIR_UPLOAD_AVATAR_COMMENT_LINE.$comment->image,34,34)?>" alt="<?=CutText($comment->$name,100)?>" /></div>
                    	<div class="col-md-11">
                    		<div class="name"><?=CutText($comment->$name,100)?></div>
                    		<!--<div class="job"><?=CutText($comment->$name,100)?></div>-->
                    	</div>
                    </div>
                </li>
			<?php }?>
        </ul>
    </div>
    <div class="ab-salary-item ab-salary-item-2">
        <ul>
            <?php foreach($comment_client_left as $comment){?>
                <li>
                    <div class="row user">
                        <div class="col-md-12"><p><?=$comment->$description?></p><img src="<?=base_url()?>assets/img/bg/bg_salary.png" alt="" /></div>
                        <div class="col-md-1"><img src="<?=img(DIR_UPLOAD_AVATAR_COMMENT_LINE.$comment->image,34,34)?>" alt="<?=CutText($comment->$name,100)?>" /></div>
                        <div class="col-md-11">
                            <div class="name"><?=CutText($comment->$name,100)?></div>
                            <!--<div class="job"><?=CutText($comment->$name,100)?></div>-->
                        </div>
                    </div>
                </li>
            <?php }?>
        </ul>
    </div>
</div>