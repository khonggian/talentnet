<?php
    $name = language('title');
    $slug = language('slug');
    $link = language('link');
?>
<?php  if(!empty($list_notification)){?>
	<?php foreach ($list_notification as $noti){?>
        <p>
            <a href="<?=base_url().$noti->$link?>" class="notification" data-nid="<?=$noti->nid?>" data-cid="<?=$noti->cid?>" data-type="<?=$noti->type?>"><?=$noti->$name?></a>
        </p>
    <?php } ?>
<?php } ?>