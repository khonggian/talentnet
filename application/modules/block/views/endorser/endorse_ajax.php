<?php
    $field_name = language('name'); 
?>
<?php if(!empty($lstDorse)){ ?>
<?php foreach($lstDorse as $d){ ?>	
	<div class="row">
		<div class="col-md-8">
			<div class="row">
			<?php if($d->counter>0){ ?>
				<div class="col-md-1 f-bb"><?=$d->counter ?></div>
			<?php  } ?>
				<div class="col-md-11"><a class="show_endorse" href="#ab-pu-endorse" title=""><span class="hl"><?=$d->$field_name?></span><span class="hv">ENDORSE NOW</span></a></div>
			</div>
		</div>
		
	</div>
<?php } }?>