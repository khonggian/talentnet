<a  
	href="<?=$embed?>"
	style="display:block;width:520px;height:330px"  
	id="player"> 
</a> 
<script type="text/javascript">
$(function(){
	Admin.setupFlowPlayer('player', '<?=$embed?>');
});
</script>