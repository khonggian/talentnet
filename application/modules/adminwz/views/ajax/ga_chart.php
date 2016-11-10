<div id="container_ga" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
	$(function () {				
		var series_ga= {name : 'Visits', data : []};
		<?php
			$count= 0;
			foreach($referrers as $key=>$val){
				if($count!=0){
		?>
			series_ga.data.push([Date.UTC(<?=date('Y', strtotime($key))?>, <?=date('m', strtotime($key)) - 1?>, <?=date('d', strtotime($key))?>),<?=$val->visits?>]);
		<?php
				}
				$count++;
			}
		?>
		Admin.setupHighchartsSpline('#container_ga', '<?=$setting->name?>', 'Total visits: (<?=$referrers['summary']->metrics->visits?>)', 'Visits', [series_ga]);
	});			
</script>	