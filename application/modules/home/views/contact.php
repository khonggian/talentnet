<?php
    $title_field = field('title');
    $address_field = field('address');
?>
<?php if(!empty($address)){?>
    <?php foreach ($address as $key=>$val){?>
        <?php if($key===0){?>
            <div class="mt5">
        <?php }else{?>
            <div class="mt13">
        <?php }?>
            <b><?=$val->$title_field;?></b><br/>
			<?=$val->$address_field;?><br/>
			Phone: <?=$val->phone;?><br/>
			Email: <a href="mailto:<?=$val->email;?>" ><?=$val->email;?></a><br/>
		</div>
    <?php }?>
<?php }?>