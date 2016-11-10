<!DOCTYPE HTML>
<html>
<!-- BEGIN HEAD -->
<head>
	<title><?=$title?></title>
	<base href="<?=base_url()?>"/>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<?=modules::run('adminwz/style');?>
	<?=$_styles?>
	<link rel="shortcut icon" href="<?=base_url()?>assets/admin/img/favicon.ico" />
	<script src="<?=base_url()?>assets/admin/js/jquery-1.8.3.min.js"></script>	
	<script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<?=modules::run('adminwz/header');?>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<?=modules::run('adminwz/menu');?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide fade" tabindex="-1" role="dialog">
				<div class="modal-header">
					<button data-dismiss="modal" class="close close-modal" type="button"></button>
					<h3></h3>
				</div>
				<div class="modal-body">
					<p></p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?=modules::run('adminwz/theme');?>
			<?=$content?>
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<div class="footer">
		2014 &copy; by Wizard.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	<?=modules::run('adminwz/script');?>
	<?=$_scripts?>
</body>
<!-- END BODY -->
</html>