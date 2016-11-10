(function($){
 	$.fn.extend({ 
 		validate: function(options) {
			// Kiểm tra từng element và xử lý
    		return this.each(function() {
				var obj = $(this);
				var data= obj.data('validate');
				if(!data)
				{
					obj.data('validate', 'validate');
					var require= obj.attr('require');
					if(require)
					{
						value= obj.val();
						switch(obj.prop("tagName").toLowerCase()){
							case('input'):
								if($.validate.checkable(obj))
								{
									obj.live('click', function() {
										$.validate.checkbox(obj);
									});									
								}													
							case('textarea'):
								if($.validate.checkable(obj))
								{
									obj.live('click', function() {
										$.validate.checkbox(obj);
									});									
								}
								else
								{
									obj.live('blur', function() {
										$.validate.input(obj);
									});										
								}
								break;
							case('select'):
									obj.live('change', function() {
										$.validate.select(obj);
									});								
								break;
							
						}
					}
				}
    		});
    	},

		
	});
	$.validate= {	
		checkable: function( element ) {
			return (/radio|checkbox/i).test(element.attr('type'));
		},
		text_require: 'This field is required.',
		input: function($this){
			if($this.val() == '')
			{
				$.validate.error($this, $.validate.text_require);
			}
			else
			{
				$.validate.success($this);
			}
		},
		select: function($this){
			if($this.val() == '')
			{
				$.validate.error($this, $.validate.text_require);
			}
			else
			{
				$.validate.success($this);
			}
		},
		checkbox: function($this){
			var checked= $this.prop('checked');
			if(!checked)
			{
				//$.validate.error($this, $.validate.text_require);
			}
			else
			{
				$.validate.success($this);
			}
		},
		error: function($this, txt){
			$this.closest('.control-group').removeClass('success').addClass('error').find('.help-inline').text(txt).removeClass('ok');
			$.validate.form_disable($this);
		},
		success: function($this){
			$this.closest('.control-group').removeClass('error').addClass('success').find('.help-inline').text('');
			if($this.attr('type')!= 'checkbox' && $this.attr('type')!= 'radio'){
				$this.closest('.control-group').find('.help-inline').addClass('ok');
			}
			$.validate.form_open($this);
		},
		form_disable: function($this){
			$this.closest('form').find('._btnV').attr({'disabled':'disabled'});
		},
		form_open: function($this){
			$this.closest('form').find('._btnV').removeAttr('disabled');
		}	
	}	
})(jQuery);