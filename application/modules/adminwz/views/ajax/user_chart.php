<div id="container_user_register" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
	$(function () {
		var series_user= {name: 'User',color: '#FF4040', data : []};
		<?php
			$count= 1;
			foreach($result_user as $row){
		?>
		series_user.data.push([Date.UTC(<?=date('Y', strtotime($row->date))?>, <?=date('m', strtotime($row->date)) - 1?>, <?=date('d', strtotime($row->date))?>),<?=$row->count?>]);
		<?php
				$count++;
			}
		?>
		Admin.setupHighchartsLine('#container_user_register', '', '', 'Member', [series_user]);
	});					
</script>