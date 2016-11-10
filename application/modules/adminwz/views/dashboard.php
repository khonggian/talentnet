<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- THEMESCRIPT.NET -->
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				Dashboard				
				<small>statistics and more</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url().LINK_ADMIN?>">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><span>Dashboard</span></li>
				<li class="pull-right no-text-shadow">
					<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>
						<span></span>
						<i class="icon-angle-down"></i>
					</div>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-user"></i>
				</div>
				<div class="details">
					<div class="number">
						<?=$sum_user->count?>
					</div>
					<div class="desc">									
						User Register
					</div>
				</div>					
			</div>
		</div>
		<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
			<div class="dashboard-stat green">
				<div class="visual">
					<i class="icon-comments"></i>
				</div>
				<div class="details">
					<div class="number"><?=$sum_comment->count?></div>
					<div class="desc">Comment</div>
				</div>					
			</div>
		</div>
	</div>	
	<div class="row-fluid">
		<div class="portlet solid bordered light-grey">
			<div class="portlet-body" id="ga_chart"></div>	
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<!-- BEGIN PORTLET-->
			<div class="portlet solid bordered light-grey">
				<div class="portlet-title">
					<h4><i class="icon-user"></i>User Register</h4>
					<div class="input-prepend fright">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<input type="text" autocomplete="off" value="<?=date('d/m/Y', strtotime('-1 week')) .' - ' . date('d/m/Y')?>" name="date_range" class="m-wrap m-ctrl-medium date-range">
					</div>
					<div class="clearAll"></div>
				</div>
				<div class="portlet-body" id="user_chart">
	
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
		<div class="span6">
			<!-- BEGIN PORTLET-->
			<div class="portlet solid light-grey bordered" id="user_percent_chart">
				<div class="portlet-title">
					<h4><i class="icon-user"></i>User Percent</h4>
				</div>
				<div class="portlet-body">
					<div id="container_user_percent" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
					<script type="text/javascript">
						$(function () {							
							var series_user_percent= {type: 'pie',name : 'User percent', data : [],};
							series_user_percent.data.push({name : 'Direct', y : <?=$user_percent->direct?>, sliced : true, selected : true, color : '#A4C639'});
							series_user_percent.data.push({name : 'Facebook', y : <?=$user_percent->facebook?>, color: '	#9966CC'});
							series_user_percent.data.push({name :'Google', y : <?=$user_percent->google?>, color : '#FF033E'});
							series_user_percent.data.push({name : 'Yahoo', y: <?=$user_percent->yahoo?>, color : '#FF7E00'});
							Admin.setupHighchartsPie('#container_user_percent', '', '', '', [series_user_percent]);
						});
					</script>				
				</div>
			</div>
			<!-- END PORTLET-->
		</div>
	</div>	
	<!-- END PAGE HEADER-->
	<div id="dashboard">

	</div>
</div>
<!-- END PAGE CONTAINER-->
<script>
$(function() {
	App.init(); // init the rest of plugins and elements
	Admin.dashboard();
});
</script>