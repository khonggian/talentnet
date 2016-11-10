<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<div class="container-fluid">
			<!-- BEGIN LOGO -->
			<a class="brand" href="<?=base_url().LINK_ADMIN?>">
				<img src="<?=base_url()?>assets/admin/img/logo-big.png" alt="logo" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
			<img src="<?=base_url()?>assets/admin/img/menu-toggler.png" alt="" />
			</a>          
			<!-- END RESPONSIVE MENU TOGGLER -->				
			<!-- BEGIN TOP NAVIGATION MENU -->					
			<ul class="nav pull-right">
				<?php
					if(!empty($setting->language)){
				?>			
				<li class="dropdown language">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" src="<?=base_url().'assets/admin/img/flags/'.$this->session->userdata('adminwz_lang').'.png';?>" />
						<span class="username"><?=strtoupper($this->session->userdata('adminwz_lang'));?></span>
						<i class="icon-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<?php
							foreach($setting->language as $language){
						?>					
						<li>
						   <a href="<?=base_url().'adminwz/c/language/'.$language->key;?>" <?=($this->session->userdata('adminwz_lang') == $language->key) ? 'class="active"' : '';?>>
							   <img src="<?=base_url().'assets/admin/img/flags/'.$language->key.'.png';?>" alt="" />
							   <?=$language->value?>
						   </a>						
						</li>
						<?php
							}
						?>						
					</ul>
				</li>	
				<?php
					}
				?>				

				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<svg id="svg-avatar-small" width="28" height="28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
							<defs>
								<clipPath id="r-9fd3b85b09574f07b104583306412dcc">
									<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
								</clipPath>
								<clipPath id="r-c68bd35044794eb797f6e30f55f0550f">
									<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
								</clipPath>
								<clipPath id="r-1f438ec6161b4f6580b78135d6dc9a63">
									<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
								</clipPath>
							</defs>
							<image id="avatar-small" xlink:href="" x="" y="" width="28" height="28" clip-path="url(<?=current_path()?>#r-9fd3b85b09574f07b104583306412dcc)" transform="" />
						</svg>							
						<span class="username"><?=$this->session->userdata('admin_username')?></span>
						<i class="icon-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url().LINK_ADMIN_USER.'profile'?>"><i class="icon-user"></i> My Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?=base_url().LINK_ADMIN.'logout'?>"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->	
		</div>
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->