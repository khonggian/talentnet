<!-- BEGIN NOTIFICATION DROPDOWN -->	
<li><input type="button" value="Reminder" id="btnReminder" class="btn" /></li>
<li class="dropdown" id="header_reminder_bar">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	<i class="icon-warning-sign"></i>
	<?php if(!empty($count_result)) { ?>
	<span class="badge badge-count"><?=$count_result?></span>
	<?php } ?>
	</a>
	<ul class="dropdown-menu extended notification">
		<?php
			if(!empty($past_reminder)){
		?>
		<li class="external">
			<a href="javascript:;" id="btnLoadReminder" data-start="<?=$past_reminder[0]?>" data-end="<?=$past_reminder[1]?>">View past reminder <i class="m-icon-swapright"></i></a>
		</li>	
		<?php
			}
		?>
		<li>
			<p>You have <span class="reminder-count"><?=$count_result?></span> new reminder</p>
		</li>
		<li>
			<div id="content-reminder">
				<?php
					if(!empty($reminder)){
						foreach($reminder as $k=>$v){
				?>
				<div class="item-reminder">
					<strong><?=date('d/m/Y', strtotime($k))?></strong>
					<?php
						if(!empty($v)){
					?>
						<ul>
					<?php
							foreach($v as $row){
					?>
						<li>
							<div class="reminder-title">
								<?php
									if(empty($row->link)){
								?>							
									<?=$row->title?>
								<?php
									}else{
								?>
									<a href="<?=$row->link?>" target="_blank"><?=$row->title?></a>
								<?php
									}
								?>
								<div class="reminder-edit" data-id="<?=$row->id?>"><a href="javascript:;" class="btnEdit" data-type="edit">Edit</a> | <a href="javascript:;" class="btnEdit" data-type="delete">Delete</a></div>
								<div class="clearAll"></div>
							</div>
							<div style="padding-left:10px;">
								<?=$row->content?>
							</div>
						</li>
					<?php
							}
					?>
						</ul>
					<?php
						}
					?>
				</div>
				<?php
						}
					}
				?>	
			</div>
		</li>
	</ul>
</li>			