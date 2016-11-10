<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-home.jpg" class="img-responsive" alt="" />
</div>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="col-md-12" style=" text-align: center;    padding: 50px 0px;">
		  	<h1 align-center="" style="    color: #a84216;    font-size: 6em;    font-family: RobotoCondensed;    font-weight: 900;">Thank You</h1>
			<h4>We appreciate your interest in Talentnet solutions.</h4>
		</div>
	</div>
	
	
</div>
<?php if(!empty($result_client)){?>
<div class="box-banner">
	<div id="logo-owl" class="owl-wrap-pn">
		<?php
		$name = language('name');
		 foreach($result_client as $client){

			?>
			<div class="item-logo"><a href="<?php if($client->link==''){ echo 'javascript:;'; }else{ echo $client->link; };  ?>" <?php if($client->link==''){  }else{ echo 'target="_blank"'; };  ?>><img src="<?=img(DIR_UPLOAD_CLIENT.$client->image,120,60)?>" alt="<?=$name?>" /></a></div>
		<?php }?>
	</div>
	<div class="clearfix"></div>
</div>
<?php }?>

<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>


<!-- Google Code for Download Brochure Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 879721249;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "9JzFCJa_3GcQofa9owM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/879721249/?label=9JzFCJa_3GcQofa9owM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>