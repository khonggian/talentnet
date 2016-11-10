<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->        	
	<ul class="page-sidebar-menu">
		<li class="mb27">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		</li>
		<li class="start <?=($this->uri->segment(2) == '') ? 'active' : ''?>">
			<a href="<?=base_url().LINK_ADMIN?>">
			<i class="icon-home"></i> 
			<span class="title">Dashboard</span>
			<span class="selected"></span>
			</a>
		</li>
		<?php
			if($this->session->userdata('admin')){
		?>						
		<li <?=($this->uri->segment(2) == 'module' && $this->uri->segment(3) == 'manage' && empty($mid)) ? 'class="active"' : ''?>>
			<a href="<?=base_url()?>adminwz/module/manage" title="Manage">
				<i class="icon-th-list"></i>
				Manage
			</a>
		</li>
		<?php
			}
		?>		
		<?=$menu_module_left;?>
		<?php
			if($this->session->userdata('admin')){
		?>
		<li class="<?=($this->uri->segment(2) == 'user') ? 'active' : ''?>">
			<a href="javascript:;">
			<i class="icon-user"></i> 
			<span class="title">User</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu sub">
				<li <?=($this->uri->segment(2) == 'user' && $this->uri->segment(3) == 'manage') ? 'class="active"' : ''?>><a href="<?=base_url().LINK_ADMIN_USER?>manage" title="Manage">Manage</a></li>
				<li <?=($this->uri->segment(3) == 'role') ? 'class="active"' : ''?>><a href="<?=base_url().LINK_ADMIN_USER?>role">Role</a></li>
			</ul>
		</li>
				
		<li <?=($this->uri->segment(2) == 'logs') ? 'class="active"' : ''?>>
			<a href="<?=base_url().LINK_ADMIN_LOGS?>">
			<i class="icon-hdd"></i> 
			<span class="title">Logs</span>
			<span class="selected"></span>
			</a>
		</li>	
		<li <?=($this->uri->segment(2) == 'setting') ? 'class="active"' : ''?>>
			<a href="<?=base_url().LINK_ADMIN_SETTING?>">
			<i class="icon-cogs"></i> 
			<span class="title">Setting</span>
			<span class="selected"></span>
			</a>
		</li>					
		<?php
			}
		?>
		<li <?=($this->uri->segment(2) == 'faq') ? 'class="active"' : ''?>>
			<a href="<?=base_url().LINK_ADMIN_FAQ?>">
			<i class="icon-briefcase"></i> 
			<span class="title">FAQ</span>
			<span class="selected"></span>
			</a>
		</li>			
	</ul>
	<!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->