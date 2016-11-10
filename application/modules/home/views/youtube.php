<script type="text/javascript">
$(function(){
	$('#button').live('click', function(){
		$('#_frUpload').ajaxForm({
			beforeSend: function() {					
			
			},
			uploadProgress: function(event, position, total, percentComplete) {						
				var percentVal = percentComplete + '%';
				console.log(percentVal);
			},
			complete: function(xhr) {			
				return false;
			}
		}); 	
		$('#_frUpload').submit();
	});
});
</script>
<form action="<?=base_url()?>home/youtube" method="post" enctype="multipart/form-data" id="_frUpload">
	<h3>Custom example</h3>
	<input type="file" name="file" id="" />
	<input type="hidden" name="csrf_token" value="<?=$this->security->get_csrf_hash();?>" />
	<input type="button" value="Upload" id="button" />
</form>
<script type="text/javascript">

</script>