$(function() {
	$('input[name="username"]').focus();
	$('#_btnLogin').live('click', function() {
		var username= $('input[name="username"]');
		var password= $('input[name="password"]');
		var remember= $('input[name="remember"]');
		if(!username.val()){
			show_login_error(username, 'Username is required');
			return false;
		}
		
		if(!password.val()){
			show_login_error(password, 'Password is required');
			return false;
		}
		
		$.post(
			base_url+'adminwz/login',
			{
				action		:'post',
				type		:'postLogin',
				username	:username.val(),
				password	:password.val(),
				remember	:remember.val(),
				token 		:token
			},
			function(data){
				if(data.st=='SUCCESS')
				{
					window.location.href = base_url+'adminwz';
				}
				else
				{
					show_login_error($('input[name="'+data.error.field+'"]'), data.error.txt);
				}
			},'json'
		);
	});
		
	$('input[name="username"], input[name="password"]').live('keypress', function(e){
		if(e.which==13)
		{
			$('#_btnLogin').click();
			return false;
		}
	});
	
	$('input[name="username"], input[name="password"]').live('blur', function(){
		if($(this).val()!='') blur_login_error($(this));
	});	
	
	$('#forget-password').click(function () {
		$('.login-form').hide();
		$('.forget-form').show();
	});

	$('#back-btn').click(function () {
		$('.login-form').show();
		$('.forget-form').hide();
	});	
	
	$("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)").uniform();	
});

function show_login_error($this, error){
	$('.alert-error').show(); 
	$('.alert-error').find('span').text(error);
	if($this){
		$this.closest('.control-group').addClass('error');
		$this.focus();
	}
}

function blur_login_error($this){
	$('.alert-error').hide(); $('.alert-error').find('span').text('');
	if($this){
		$this.closest('.control-group').removeClass('error');
	}
}