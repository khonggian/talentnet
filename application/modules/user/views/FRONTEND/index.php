<p><a href="javascript:;" class="OpenID" data-title="Facebook Login" data-url="<?=getUrlLoginOpenID('fb');?>">Facebook</a></p>
<p><a href="javascript:;" class="OpenID" data-title="Google Login" data-url="<?=getUrlLoginOpenID('google');?>">Google</a></p>
<p><a href="javascript:;" class="OpenID" data-title="Yahoo Login" data-url="<?=getUrlLoginOpenID('yahoo');?>">Yahoo</a></p>
<form id="_FormRegister">
<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
Name *:<input type="text" name="first_name" id="first_name" maxlength="30" /> 
	<input type="text" name="middle_name" id="middle_name" maxlength="100" /> 
	<input type="text" name="last_name" id="last_name" maxlength="30" /> <br /><br />
Login Email *:<input type="text" name="email" id="email" maxlength="100" />	<br /><br />
Password *:<input type="text" name="password" id="password" maxlength="100" />	<br /><br />
Confirm Password *:<input type="text" name="re_password" id="re_password" maxlength="100" /><br /><br />
<a href="javascript:;" id="submit" class="submit_form" data-form="_FormRegister" data-type="register">SUBMIT</a>
<span class="notice"></span>
</form>
<script type="text/javascript">
$(function(){
	Page.user();
});
</script>