<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-dashboard.jpg" class="img-responsive" />
</div>

<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<!--
        <div class="content-nav">
            <div class="row list-nav">
                <div class="col-md-2 col-sm-4 col-xs-6"><a class="active">DASHBOARD</a></div>
                <div class="col-md-2 col-sm-4 col-xs-6"><a>CV-BUILDER</a></div>
                <div class="col-md-2 col-sm-4 col-xs-6"><a>ACCOUNT</a></div>
                <div class="col-md-2 col-sm-4 col-xs-6"><a>SAVED JOBS</a></div>
                <div class="col-md-2 col-sm-4 col-xs-6"><a>APPLY JOBS</a></div>
                <div class="col-md-2 col-sm-4 col-xs-6"><a>LOGOUT</a></div>
            </div>
        </div>
        -->
        <nav>
            <ul class="nav navbar-nav">
                <li><a href="#" title="DASHBOARD" class="">DASHBOARD</a></li>
                <li class="option-2"><a href="#" title="CV-BUILDER">CV-BUILDER</a></li>
                <li class="option-3"><a href="#" title="ACCOUNT">ACCOUNT</a></li>
                <li class="option-4"><a href="#" title="SAVED JOBS">SAVED JOBS</a></li>
                <li class="option-5"><a href="#" title="APPLY JOBS">APPLY JOBS</a></li>
                <li><a href="#" title="LOGOUT">LOGOUT</a></li>
            </ul>
        </nav>

		<div class="menu-ab">
			<a href="javscript:void(0);" title="">Homepage</a><a href="javscript:void(0);" title="">Candidates</a><span class="active">Profile</span>
		</div>
		
		<div class="form-profile">
			<div class="title">PROFILE</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Your Name<span> *</span></div>
					<div class="input-group">
						<div class="input">
							<input type="text" placeholder="Last Name"/>
						</div>
						<div class="input">
							<input type="text" placeholder="Last Name"/>
						</div>
						<div class="input">
							<input type="text" placeholder="Last Name"/>
						</div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Alias name <span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Alias name"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Your email<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Your email"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Password<span> *</span></div>
					<div class="input">
						<input type="password" placeholder="Password"/>
					</div>
					<div class="clearfix"></div>
                </div>
				<div class="form-group">
                    <div class="lable">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="UPDATE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>