<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-login.jpg" class="img-responsive" />
</div>

<div id="login-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="javscript:void(0);" title="">Homepage</a><span class="active">Sign In</span>
		</div>
		
		<div class="form-profile">
			<div class="title">SIGN IN HERE</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Login email</div>
					<div class="input">
						<input type="text" placeholder="Your login email"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Password</div>
					<div class="input">
						<input type="password" placeholder="Password"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"></div>
						<div class="ck left">
							<input type="checkbox" />Remember me
                            <a href="#" class="forgot-pass">Forgot Password?</a> 
						</div>  
					<div class="clearfix"></div>
	           </div>
				<div class="form-group">
                    <div class="lable">&nbsp;</div>
					<div><input type="button" value="UPDATE" class="btn-update btn-sign-in" />&nbsp;&nbsp;<input type="button" value="DONT'T HAVE AN ACCOUNT YET" class="btn-update btn-dont-have-acc" /></div>
                </div>
                <div class="form-group form-left">
					<div class="mbt20 btn-form">
						<div class="fs18 f-bb c_010 mt20">OR SIGN UP WITH</div>
						<div class="fs18 f-bb c_010 mt15"><a href="#" title="" class="btn-face"></a>&nbsp;&nbsp;<a href="#" title="" class="btn-mail"></a>&nbsp;&nbsp;<a href="#" title="" class="btn-yahoo"></a>&nbsp;&nbsp;<a href="#" title="" class="btn-in"></a></div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>