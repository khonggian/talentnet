<?php
    $field_name = language('name');
 ?>
<?php if(!empty($lstDorse)){ ?>
<?php foreach($lstDorse as $key=>$d) {?>
<?php if($key==0 || $key%3==0){?>
    <div class="row3">
<?php }?>
<div class="col-md-4">
	<input class="iCheck" type="checkbox" name="chkDorse[]" value="<?=$d->id?>"/>
    <span class="right"><?=$d->$field_name?></span>
</div>
<?php if(($key+1)%3==0 || $key == count($lstDorse)-1){?>
    <div class="clearAll"></div>
    </div>
<?php }?>
<?php } }?>