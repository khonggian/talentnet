function Admin(){
	var self= this;
	var timeout_modal;
	var mid= $('input[name="mid"]').val();
	
	this.init = function(){
		self.jquery();
		self.reminder();
		return self;		
	};
	
	this.ckUpdate= function(){
		if(typeof CKEDITOR != "undefined")
		{
			for (instance in CKEDITOR.instances)
				CKEDITOR.instances[instance].updateElement();
			return true;
		}	
	};
	
	this.dashboard = function(start, end) {
        $('#dashboard-report-range').daterangepicker({
            ranges: {
                'Last 7 Days': [Date.today().add({
                    days: -6
                }), 'today'],
                'Last 30 Days': [Date.today().add({
                    days: -29
                }), 'today'],
                'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
                'Last Month': [Date.today().moveToFirstDayOfMonth().add({
                    months: -1
                }), Date.today().moveToFirstDayOfMonth().add({
                    days: -1
                })]
            },
            opens: 'left',
            format: 'DD/MM/YYYY',
            separator: ' to ',
            startDate: start,
            endDate: end,
            minDate: '01/01/2012',
            maxDate: '12/31/2014',
            locale: {
                applyLabel: 'Submit',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom Range',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            },
            showWeekNumbers: true,
            buttonClasses: ['btn-danger btn']
        },function (start, end) {
            //App.blockUI(jQuery("#dashboard"));
				post_start= start.toString('DD-MM-YYYY');
				post_end= end.toString('DD-MM-YYYY');
				self.postGaChart(post_start, post_end);
				//window.location= base_url + 'adminwz?start='+post_start + '&end=' + post_end;
            //$('#dashboard-report-range span').html(start.toString('MMMM DD, YYYY') + ' - ' + end.toString('MMMM DD, YYYY'));
        });
		
		$('.btn-range-apply').live('click', function() {
			var range= $('input[name="date_range"]').val();
			if(range)
			{
				self.postUserChart(range);
			}
		});	
		self.postGaChart('', '');
		self.postUserChart('');	
	};
	
	this.formReset= function(element){
		$(element).each(function(){
			this.reset();
			$("input.submit_btn").attr("disabled", false);
			$("input.next_btn").attr("disabled", false);
			$("input.send_email_btn").attr("disabled", false);
		});	
	};
	
	this.fancybox= function(html){
		$.fancybox([{
			padding: 0,
			margin: 0,
			centerOnScroll: true,
			showCloseButton : false,
			content: html
		}]);
	};	
	
	this.jquery= function(){
		//$('.dropdown-toggle').dropdownHover();
		var fixed_top= $.cookie("fixed_top");
		if(fixed_top)
		{
			if(fixed_top != 'none')
			{
				$('input.header').prop( "checked", true );
				$("body").addClass("fixed-top");
				$(".header").addClass("navbar-fixed-top");
			}
			else
			{
				$('input.header').prop( "checked", false );
				$("body").removeClass("fixed-top");
				$(".header").removeClass("navbar-fixed-top");					
			}
		}
		
		$('._form input, ._form textarea, ._form select').livequery(function () {
			$(this).validate();
		});
					
		$('._form select.chosen').livequery(function () {
			$(this).chosen({no_results_text: "Oops, nothing found!"});
		});	
				
		$('input[data-type="int"]').keyup(function () { 
			this.value = this.value.replace(/[^0-9\.]/g,'');
		});		
		
		$(document).on('click', '.fancybox', function(){
		   $this = $(this);
			$.fancybox({
				href: $this.attr('href')			
			});
			return false;			
		});
		
		$('.date-range').daterangepicker({
			format: 'DD/MM/YYYY',
			buttonClasses : 'btn btn-range-apply'
		});			
		
		$('a.delete').on('click', function() {
			var r=confirm("Delete item !")
			if (r==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		});
		
		$('._table .group-checkable').change(function () {
			var set = $(this).attr("data-set");
			var checked = $(this).is(":checked");
			$(set).each(function () {
				if (checked) {
					$(this).attr("checked", true);
				} else {
					$(this).attr("checked", false);
				}
			});
			$.uniform.update(set);
		});		
		
		$('.embed').live('click', function() {
			var ext= $(this).attr('data-embed').split('.').pop().toLowerCase();
			switch(ext){
				case('jpg'):
				case('png'):
				case('gif'):
					$(this).attr({'href': $(this).attr('data-embed')});
					$(this).removeClass('embed').addClass('fancybox');
					$(this).click();
					return false;
					break;
			}
			
			var data_post = {
				action		:'post',
				type		:'postEmbed',
				embed_type	: $(this).attr('data-type'),
				embed		: $(this).attr('data-embed'),
				token	: token
			};	
			$.post(
				base_url + 'adminwz',
				data_post,
				function(data){
					if(data.st == 'SUCCESS')
					{
						$.fancybox([{
							centerOnScroll: true,
							content: data.html
						}]);						
					}
				},'json'
			);
		});
		
		$('.close-modal').live('click', function(){
			clearTimeout(timeout_modal);
		});
				
		$('.td-colspan').each(function(index){
			var $tr_head= $(this).closest('.table').find('thead tr th');
			$(this).attr({colspan:$tr_head.length});
		});
		
		$(document).on('click', '.btnDeleteFile', function(){
			var r =confirm("Are you sure you want to delete ?");
			if(r==true)
			{
				var $this= $(this);
				var data_field= $this.attr('data-field');
				var data_nid= $('input[name="nid"]').val();
				var data_url= $this.closest('.control-group').find('.file_url').val();
				var data_type= $this.attr('data-type');
				if(data_nid && data_type == 'edit'){
					var post_data = {
						action		:'post',
						type		:'postDeleteFile',
						nid			: data_nid,
						field		: data_field,
						data_type	: data_type,
						url			: data_url,
						token	: token
					};			
					$.post(
						base_url+'adminwz',
						post_data,
						function(data){
							if(data.st == 'SUCCESS')
							{
								$this.closest('.control-group').find('.file_url').val('');
								$this.closest('.control-group').find('.fileupload-preview').html('');
							}
						},'json'
					);
				}else{
					$this.closest('.control-group').find('.file_url').val('');
					$this.closest('.control-group').find('.fileupload-preview').html('');
				}				
			}
		});
		
		//ACTIVE MENU
		$('.page-sidebar-menu').find('li.active').closest('li.main').addClass('active open').find('li').addClass('open');
		$('.page-sidebar-menu').find('li.active').closest('li.main').find('ul.sub-menu').show();
		
		$(".sticker").sticky({ topSpacing: 70});

		//ACTIVE MENU
		  $('.page-sidebar-menu li').each(function(index){
		   var $this= $(this);
		   $this.attr({'data-length':$this.find('li.active').length});
		   if($this.find('li.active').length)
		   {
		    $this.addClass('active');
		    $this.closest('ul').addClass('open').fadeIn();
		   }
		   else if($this.hasClass('active'))
		   {
		    $this.closest('ul').addClass('open').fadeIn();
		   }
		  });

		$(window).resize(function(){
			self.resizeChosen();
		});		
	};
	
	this.mapsInit= function(){
		
	};
	
	this.module = function() {
		$('.module_sticker').css({'width': $('.module_sticker').closest('.span6').width()});
		
		$(window).resize(function(){
			$('.module_sticker').removeAttr('style');
			$('.module_sticker').css({'width': $('.module_sticker').closest('.span6').width()});
		});			
		
        $('#nestable_list_m').nestable({
            group: 1
        }).on('change', function(e){
			
			var id= $(this).closest('.dd').attr('data-id');
			history.pushState({}, '', base_url + 'adminwz/module/manage?mid='+id);
			
			var name= $(this).closest('.dd').find('li.dd-item[data-id="'+id+'"] .dd-handle').eq(0).text();
			var link_module_manage				= base_url + 'adminwz/module/manage-edit?mid=' + id;
			var link_module_manage_page_list	= base_url + 'adminwz/module/manage-page-list?mid=' + id;
			var link_module_manage_page_edit	= base_url + 'adminwz/module/manage-page-edit?mid=' + id;
			var link_module_page_list			= base_url + 'adminwz/module/page-list?mid=' + id;
			var link_module_page_edit			= base_url + 'adminwz/module/page-edit?mid=' + id;
			
			$('.module-item').removeClass('active');
			$(this).addClass('active');
			$('#_bt1').attr({'href':link_module_manage});
			$('#_bt2').attr({'href':link_module_manage_page_list});
			$('#_bt3').attr({'href':link_module_manage_page_edit});
			$('#_bt4').attr({'href':link_module_page_list});
			$('#_bt5').attr({'href':link_module_page_edit});
			$('.name-module').html(name);
			
			if($('.module_sticker').is('hidden')){
				$('.module_sticker').css('width', '');
				$('.module_sticker').css({'width': $('.module_sticker').closest('.span6').width()});				
			}
			
			$('.module_sticker').show();	
			$(".sticker").sticky('update');			

			var list = e.length ? e : $(e.target);
			var data_form = {
				action	:'post',
				type	:'postModuleOrder',
				token	: token,
				module	: list.nestable('serialize')
			};
	
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					
				},'json'
			);					
		});
	};
	
	this.moduleEdit = function() {
		/*Add module page*/
		$('select[name="field_type"]').live('change', function(e){
			var val= $(this).val();
			$('.data_field').hide();
			$('.data_field_'+val).show();
		});				
		
		$('select[name="field_type"]').change();
		$('#_btnModule').live('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);
			var $form= $('#_frModule').serialize();
			var data = {
				action		:'post',
				type		:'postModule',
				token	: token
			};
			var data_form = $form + '&' + $.param(data);
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.st=='SUCCESS')
					{
						self.showModal('Admin Module', data.txt);
						setTimeout(function(){
							window.location= base_url + 'adminwz/module/manage?mid='+mid;
						}, 1000);
					}
					else
					{
						self.showResponse(data, $('#_frModule'));
					}
				},'json'
			);			
		});
		/*End Add module page*/			
	};
	
	this.modulePageList = function() {
		$('.btn-range-apply').live('click', function() {
			$('#_ps').closest('form').submit();
		});
		
		$('#_ps').on('change', function(){
			$(this).closest('form').submit();
		});
		
		$('input[name="k"]').keypress(function(e){
			if(e.which==13) $(this).closest('form').submit();
		});
		
		$('._upStatus').live('click', function() {
			var item={},post_data={};
			var $this= $(this).closest('.portlet-body').find('._table');
			$this.find('.item-checkbox:checked').each(function(index){
				item[index]= $(this).val();
			});
			if(Object.keys(item).length > 0)
			{
				post_data['mid']= $('input[name="mid"]').val();
				post_data['action']= 'post';
				post_data['type']= 'postUpdateStatus';
				post_data['item']= item;	
				post_data['task']= $(this).attr('data-status');
				post_data['token']= token;
				$.post(
					base_url+'adminwz',
					post_data,
					function(data){
						if(data)
						{
							$.each(data.item, function(key, value){
								$this.find('tr[data-id="'+value.id+'"]').find('td[data-field="status"]').html(value.status);
							});
						}
					},'json'
				);
			}
		});
		
		$(document).on('click', '.item-status', function(){
			var $this= $(this);
			post_data={};
			post_data['mid']= $('input[name="mid"]').val();
			post_data['action']= 'post';
			post_data['type']= 'postUpdateStatus';
			post_data['item']= $this.closest('tr').attr('data-id');	
			post_data['task']= $(this).attr('data-status');
			post_data['token']= token;
			$.post(
				base_url+'adminwz',
				post_data,
				function(data){
					if(data)
					{
						$.each(data.item, function(key, value){
							$('tr[data-id="'+value.id+'"]').find('td[data-field="status"]').html(value.status);
						});
					}
				},'json'
			);
		});
		
		$('#_delete').live('click', function() {
			var r =confirm("Are you sure you want to delete ?");
			if(r==true)
			{
				var item={},post_data={};
				var $this= $(this).closest('.portlet-body').find('._table');
				$this.find('.item-checkbox:checked').each(function(index){
					item[index]= $(this).val();
				});
				if(Object.keys(item).length > 0)
				{
					post_data['mid']= $('input[name="mid"]').val();
					post_data['action']= 'post';
					post_data['type']= 'postDeleteItem';
					post_data['item']= item;
					post_data['token']= token;
					$.post(
						base_url+'adminwz',
						post_data,
						function(data){
							if(data.st=='SUCCESS')
							{
								self.resetCheckbox();
								location.reload();
							}
						},'json'
					);
				}			
			}
		});	
		
		$('.item-delete').on('click', function() {
			$(this).closest('tr').find('.checkboxes').prop('checked', true);
			$.uniform.update();
			$('#_delete').click();
		});
	};
	
	this.managePageListField = function() {
		$('input[name="table_type"]').live('click', function() {
			var table_type= $(this).val();
			$('.wrap_select_table_type').hide();
			$('.table_'+table_type).show();
			self.resizeChosen();
		});
		
		$('#_foreign_field').live('change', function() {
			var table_foreign= $(this).val();
			var data = {
				action		:'post',
				type		:'postListTableField',
				table		: table_foreign,
				token 	:token
			};
			var data_form = $.param(data);			
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					if(data.st=='SUCCESS'){
						$('.wrap_table_foreign_field').html(data.html);
					}
				},'json'
			);
		});
		
		$('#_btnModulePageListField').live('click', function(){
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);	
			var $form= $('#_frModulePageListField').serialize();
			var data = {
				action		:'post',
				type		:'postSavePageList',
				token 	:token
			};
			var data_form = $form + '&' + $.param(data);
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.st=='SUCCESS')
					{
						self.showModal('Admin Manage Page List Field', data.txt);
						setTimeout(function(){
							window.location= base_url + 'adminwz/module/manage-page-list?mid=' + $('input[name="mid"]').val();
						}, 1000);						
					}
					else
					{
						self.showResponse(data, $('#_frModulePageListField'));
					}
				},'json'
			);			
		});		
	};
	
	this.managePageListFilter = function() {				
		$('#_btnModulePageListFilter').live('click', function(){
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);	
			var $form= $('#_frModulePageListFilter').serialize();
			var data = {
				action		:'post',
				type		:'postSavePageListFilter',
				token 	:token
			};
			var data_form = $form + '&' + $.param(data);
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.st=='SUCCESS')
					{
						self.showModal('Admin Manage Page List Filter', data.txt);
						setTimeout(function(){
							window.location= base_url + 'adminwz/module/manage-page-list?mid=' + $('input[name="mid"]').val();
						}, 1000);						
					}
					else
					{
						self.showResponse(data, $('#_frModulePageListFilter'));
					}
				},'json'
			);			
		});		
	};	
	
	this.managePageEditField = function() {
		$('select[name="field_type"]').live('change', function(e){
			var val= $(this).val();
			$('#primary_field').show();
			$('#require_field').show();
			$('.data_field').hide();
			$('.data_field_'+val).show();
			
			switch(val){
				case('group'):
					$('#primary_field').hide();
					$('#require_field').hide();
					break;							
				case('tags'):
					$('#primary_field').show();
					break;
				case('slug'):
					$('#require_field').hide();
					$('#option-field').hide();
					break;
				case('ids'):
					$('#require_field').hide();
					break;
				default:
					$('.label_data_field').html(val);
					break;
			}
		});		
		self.resizeChosen();
		
		$('select[name="table_foreign"]').live('change', function(e){
			var table_foreign= $(this).val();
			var data = {
				action		:'post',
				type		:'postListTableField',
				table		: table_foreign,
				token 	:token
			};
			var data_form = $.param(data);			
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					if(data.st=='SUCCESS'){
						$('.wrap_table_foreign_field').html(data.html);
					}
				},'json'
			);
		});	

		$('#_btnModulePageEditField').live('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);	
			var $form= $('#_frModulePageEditField').serialize();
			var data = {
				action		:'post',
				type		:'postSavePageEditField',
				token	: token
			};
			var data_form = $form + '&' + $.param(data);
			$.post(
				base_url+'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);				
					if(data.txt)
					{
						self.showModal('Admin Manage Page Edit Field', data.txt);
					}	
					
					if(data.st=='SUCCESS')
					{
						setTimeout(function(){
							window.location= base_url + 'adminwz/module/manage-page-edit?mid=' + $('input[name="mid"]').val();
						}, 1000);					
					}
					else
					{
						self.showResponse(data, $('#_frModulePageEditField'));
					}
				},'json'
			);			
		});
		if($('select[name="field_type"]').val())
		{
			$('select[name="field_type"]').change();
		}
	};
	
	this.modulePageEdit = function(mid, referrer) {
		$('.collapse_filelist').live('click', function(){
			var $wrapper_filelist= $(this).closest('.control-group').find('.wrapper_filelist');
			if($wrapper_filelist.hasClass('hide'))
			{
				$('.collapse_filelist').removeClass('up');
				$wrapper_filelist.fadeIn();
				$wrapper_filelist.removeClass('hide');$wrapper_filelist.addClass('show');
			}
			else
			{
				$('.collapse_filelist').addClass('up');
				$wrapper_filelist.fadeOut();
				$wrapper_filelist.removeClass('show');$wrapper_filelist.addClass('hide');
			}
		});	
		
		$('.btn-hidden-text').live('click', function() {
			var $wrapper_item_text= $(this).closest('table');
			if($(this).attr('data-collapse') == 'show')
			{
				$(this).attr({'data-collapse':'hide'});
				$wrapper_item_text.find('.item-text').fadeOut();
			}
			else
			{
				$(this).attr({'data-collapse':'show'});
				$wrapper_item_text.find('.item-text').fadeIn();				
			}			
		});
	
		$('.btn-cancel').live('click', function(){
			if(referrer){
				window.location= referrer;
			}else{
				window.history.back();	
			}
		});		
	
		$('#_btnPageEdit').on('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el); self.ckUpdate();
			var $form= $('#_frPageEdit').serialize();
			var data = {
				action		:'post',
				type		:'postSavePageEdit',
				token 	: token
			};
			var data_form = $form + '&' + $.param(data);	
			$.post(
				base_url + 'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.txt)
					{
						self.showModal('Admin', data.txt);
					}	
					
					if(data.st=='SUCCESS')
					{
						setTimeout(function(){
							if(referrer){
								window.location= referrer;
							}else{
								window.location= base_url + 'adminwz/module/page-list?mid='+mid;
							}
						}, 1000);					
					}
					else
					{
						self.showResponse(data, $('#_frPageEdit'));
						$.each(data.error, function(key, value){
							var field_offset= $('#'+value.field).offset();
							$('html, body').animate({scrollTop: field_offset.top - 50 +'px'}, 300,function(){});
							return false;
						});
					}
				},'json'
			);
		});		
	};

	this.customPageEdit = function(module, referrer){	
		$('.collapse_filelist').live('click', function(){
			var $wrapper_filelist= $(this).closest('.control-group').find('.wrapper_filelist');
			if($wrapper_filelist.hasClass('hide'))
			{
				$('.collapse_filelist').removeClass('up');
				$wrapper_filelist.fadeIn();
				$wrapper_filelist.removeClass('hide');$wrapper_filelist.addClass('show');
			}
			else
			{
				$('.collapse_filelist').addClass('up');
				$wrapper_filelist.fadeOut();
				$wrapper_filelist.removeClass('show');$wrapper_filelist.addClass('hide');
			}
		});	
		
		$('.btn-hidden-text').live('click', function() {
			var $wrapper_item_text= $(this).closest('table');
			if($(this).attr('data-collapse') == 'show')
			{
				$(this).attr({'data-collapse':'hide'});
				$wrapper_item_text.find('.item-text').fadeOut();
			}
			else
			{
				$(this).attr({'data-collapse':'show'});
				$wrapper_item_text.find('.item-text').fadeIn();				
			}			
		});
	
		$('.btn-cancel').live('click', function(){
			if(referrer){
				window.location= referrer;
			}else{
				window.history.back();	
			}
		});			
	
		$('#_btnPageEdit').on('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el); self.ckUpdate();
			var $form= $('#_frPageEdit').serialize();
			var data = {
				token 	: token
			};
			var data_form = $form + '&' + $.param(data);	
			$.post(
				base_url + 'adminwz/module/custom/'+module+'/save',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.txt)
					{
						self.showModal('Admin', data.txt);
					}	
					
					if(data.st=='SUCCESS')
					{
						setTimeout(function(){
							if(referrer){
								window.location= referrer;
							}else{
								window.location= base_url + 'adminwz/module/custom/'+module+'?mid='+mid;
							}
						}, 1000);
					}
					else
					{
						self.showResponse(data, $('#_frPageEdit'));
						$.each(data.error, function(key, value){
							var field_offset= $('#'+value.field).offset();
							$('html, body').animate({scrollTop: field_offset.top - 50 +'px'}, 300,function(){});
							return false;
						});
					}
				},'json'
			);
		});	

		$('#_ps').on('change', function(){
			$(this).closest('form').submit();
		});		
		
		$('._upStatus').live('click', function() {
			var item={},post_data={};
			var $this= $(this).closest('.portlet-body').find('._table');
			$this.find('.item-checkbox:checked').each(function(index){
				item[index]= $(this).val();
			});
			if(Object.keys(item).length > 0)
			{
				post_data['mid']= mid;
				post_data['action']= 'post';
				post_data['type']= 'postUpdateStatus';
				post_data['item']= item;	
				post_data['task']= $(this).attr('data-status');
				post_data['token']= token;
				$.post(
					base_url+'adminwz',
					post_data,
					function(data){
						if(data)
						{
							$.each(data.item, function(key, value){
								$this.find('tr[data-id="'+value.id+'"]').find('td[data-field="status"]').html(value.status);
							});
						}
					},'json'
				);
			}
		});
		
		$(document).on('click', '.item-status', function(){
			var $this= $(this);
			post_data={};
			post_data['mid']= $('input[name="mid"]').val();
			post_data['action']= 'post';
			post_data['type']= 'postUpdateStatus';
			post_data['item']= $this.closest('tr').attr('data-id');	
			post_data['task']= $(this).attr('data-status');
			post_data['format']= $(this).attr('data-format');
			post_data['token']= token;
			$format = $(this).attr('data-format');
			$.post(
				base_url+'adminwz',
				post_data,
				function(data){
					if(data)
					{
						$.each(data.item, function(key, value){
							$('tr[data-id="'+value.id+'"]').find('td[data-field="'+$format+'"]').html(value.status);
						});
					}
				},'json'
			);
		});		
		
		$('#_delete').live('click', function() {
			var r =confirm("Are you sure you want to delete ?");
			if(r==true)
			{
				var item={},post_data={};
				var $this= $(this).closest('.portlet-body').find('._table');
				$this.find('.item-checkbox:checked').each(function(index){
					item[index]= $(this).val();
				});
				if(Object.keys(item).length > 0)
				{
					post_data['mid']= mid;
					post_data['action']= 'post';
					post_data['type']= 'postDeleteItem';
					post_data['item']= item;
					post_data['token']= token;
					$.post(
						base_url+'adminwz',
						post_data,
						function(data){
							if(data.st=='SUCCESS')
							{
								self.resetCheckbox();
								location.reload();
							}
						},'json'
					);
				}			
			}
		});	
		
		$('.item-delete').on('click', function() {
			$(this).closest('tr').find('.checkboxes').prop('checked', true);
			$.uniform.update();
			$('#_delete').click();
		});
		
		$('.btn-range-apply').live('click', function() {
			$('#_ps').closest('form').submit();
		});
		
		$('input[name="k"]').keypress(function(e){
			if(e.which==13) $(this).closest('form').submit();
		});		
	};	
	
	this.reloading = function(element){
		var el = $(element).parents(".portlet");
		App.blockUI(el);	
	};
	
	this.resetCheckbox = function(){
		$('.checkboxes').prop('checked',false);
		$('.group-checkable').prop('checked',false);
		$.uniform.update();	
	};
	
	this.resizeChosen= function(){
		$(".chzn-container, .chzn-drop").css('width', $('.controls .m-wrap[type="text"]').eq(0).outerWidth());
		$(".chzn-container-single .chzn-search input").css('width', $(".chzn-container").outerWidth() - 35);
	};
	
	this.postGaChart = function(start, end) {
		var post_data = {
			action		:'post',
			type		:'postGaChart',
			start		: start,
			end			: end,
			token	: token
		};
		self.reloading('#ga_chart');
		$.post(
			base_url + 'adminwz',
			post_data,
			function(data){
				if(data.st == 'SUCCESS')
				{
					$('#dashboard-report-range span').html(data.start + ' - ' + data.end);
					$('#ga_chart').html(data.html);
					$('#dashboard-report-range').show();	
					self.unloading('#ga_chart');
				}
			},'json'
		);			
	};
	
	this.postUserChart = function(range){
		var post_data = {
			action		:'post',
			type		:'postUserChart',
			range		: range,
			token	: token
		};
		self.reloading('#user_chart');
		$.post(
			base_url + 'adminwz',
			post_data,
			function(data){
				if(data.st == 'SUCCESS')
				{
					self.unloading('#user_chart');
					$('#user_chart').html(data.html);
				}
			},'json'
		);		
	}	
	
	this.plupload= function(type, button, container, filelist, callback){
		var uploader_file = new plupload.Uploader({
			runtimes : 'html5,flash,silverlight,html4',
			browse_button : button, // you can pass in id...
			container: document.getElementById(container), // ... or DOM Element itself
			url : base_url+'adminwz',
			flash_swf_url : base_url+'assets/admin/upload-process/Moxie.swf',
			silverlight_xap_url : base_url+'assets/admin/upload-process/Moxie.xap',
			multipart_params : {action : 'post', type : type, token : token},
			init: {
				PostInit: function() {
					document.getElementById(filelist).innerHTML = '';
				},

				FilesAdded: function(up, files) {
					plupload.each(files, function(file) {
						document.getElementById(filelist).innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <strong></strong></div>';
					});
					uploader_file.start();
				},

				UploadProgress: function(up, file) {
					document.getElementById(file.id).getElementsByTagName('strong')[0].innerHTML = '<span>' + file.percent + "%</span>";
				},

				FileUploaded: function(up, files, response) {
					var data = $.parseJSON(response.response);
					setTimeout(function() {
						$('div[id="'+files.id+'"]').remove();
					}, 3000);
					
					if(data.st == 'SUCCESS')
					{
						if(callback)
						{
							callback.call(data);
						}
					}
				},
				
				Error: function(up, err) {
					//document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
				}
			}
		});
		uploader_file.init();			
	};
		
	this.resetError= function(form, link){
		$(form).find('.control-group').removeClass('error');
		$(form).find('.help-inline').html('');
		if(link)
		{
			timeout_modal= setTimeout(function() {
				window.location= link;
			}, 1000);			
		}
	};
		
	this.setting = function() {
		$('#_btnSetting').live('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);
			// var $form= $('#_frSetting').serialize();
			// var data = {
				// action		:'post',
				// type		:'postSetting',
				// token 		:token
			// };
			// var data_form = $form + '&' + $.param(data);
			// $.post(
				// base_url+'adminwz',
				// data_form,
				// function(data){
					// App.unblockUI(el);
					// if(data.st=='SUCCESS')
					// {
						// self.showModal('Admin', data.txt);
						// $('html, body').animate({scrollTop: '0px'}, 0,function(){});
						// setTimeout(function(){
							// location.reload(); 
						// }, 1000);
					// }
					// else
					// {
						// self.showResponse(data, $('#_frSetting'));
						// $.each(data.error, function(key, value){
							// var field_offset= $('#'+value.field).offset();
							// $('html, body').animate({scrollTop: field_offset.top - 50 +'px'}, 300,function(){});
							// return false;
						// });						
					// }
				// },'json'
			// );	
			$('#_frSetting').submit(function(e)
			{

				if(window.FormData !== undefined)  // for HTML5 browsers
				{
					var formData = new FormData(this);
					$.ajax({
						url: base_url+'adminwz',
						type: 'POST',
						data:  formData,
						mimeType:"multipart/form-data",
						contentType: false,
						cache: false,
						processData:false,
						success: function(data, textStatus, jqXHR)
						{
							var obj = jQuery.parseJSON(data);
							App.unblockUI(el);
							if(obj.status == 'SUCCESS'){
								self.showModal('Admin', data.txt);
								$('html, body').animate({scrollTop: '0px'}, 0,function(){});
								setTimeout(function(){
									location.reload(); 
								}, 1000);	
							}else{
								self.showResponse(obj, $('#_frSetting'));
								$.each(obj.error, function(key, value){
									var field_offset= $('#'+value.field).offset();
									$('html, body').animate({scrollTop: field_offset.top - 50 +'px'}, 300,function(){});
									return false;
								});			
							}
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							$("#multi-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
						} 	        
				   });
					e.preventDefault();
					e.unbind();
				}
				return false;
			});
		});		
	};	
	
	this.setupHighchartsLine = function(element, title, subtitle, Ytext, series) {
		$(element).highcharts({
			chart: {
				type: 'line'
			},
			title: {
				text: title
			},
			subtitle: {
				text: subtitle
			},
			xAxis: {
				type: 'datetime'
			},
			yAxis: {
				title: {
					text: Ytext
				}
			},					
			tooltip: {
				valueSuffix: ''
			},
			series: series,
			navigation: {
				menuItemStyle: {
					fontSize: '10px'
				}
			},
			credits: {
				enabled: false
			}
		});		
	};
	
	this.setupHighchartsSpline = function(element, title, subtitle, Ytext, series) {
		$(element).highcharts({
			chart: {
				type : 'spline'
			},		
			title: {
				text: title
			},
			subtitle: {
				text: subtitle
			},
			xAxis: {
                type: 'datetime'
			},
			yAxis: {
				title: {
					text: Ytext
				}
			},					
			tooltip: {
				valueSuffix: ''
			},
			plotOptions: {
				spline: {
					lineWidth: 4,
					states: {
						hover: {
							lineWidth: 5
						}
					},
					marker: {
						enabled: false
					}
				}
			},
			series: series,
			navigation: {
				menuItemStyle: {
					fontSize: '10px'
				}
			},
			credits: {
				enabled: false
			}
		});		
	};
	
	this.setupHighchartsPie = function(element, title, subtitle, Ytext, series) {
		$(element).highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: {
				text: title
			},
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
						color: '#000000',
						connectorColor: '#000000',
						format: '<b>{point.name}</b>: {point.percentage:.1f} %'
					},
					showInLegend: true
				}
			},
			series: series,
			credits: {
				enabled: false
			}								
		});		
	};
	
	this.showModal = function(title, content){
		$('#portlet-config h3').html(title);
		$('#portlet-config .modal-body p').html(content);
		$('#portlet-config').modal('show');
	}
	
	this.setupTableSortField= function(element ,mid, post_case) {
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};	
		
		$(element).sortable({ 
			containment: $(element).closest('.row-fluid'),
			handle: "td.sortable",
			helper: fixHelper,
			placeholder: 'ui-placeholder',	
			distance: 15,
			start: function (event, ui){
				var sort_height= $(element+' tr:first').height() - 15;
				var sort_colspan= $(element+' tr:first td').length;
				ui.placeholder.html('<tr><td colspan="'+sort_colspan+'" style="height:'+sort_height+'px"></td></tr>')
			},
			stop: function(event, ui){
				var post_data={},sort_arr= {};
				$(element+' tr').each(function(index) {
					sort_arr[index]= $(this).attr('data-id');
				});
				post_data['mid']= mid;
				post_data['action']= 'post';
				post_data['type']= 'postSortOrder';
				post_data['post_case']= post_case;
				post_data['item']= sort_arr;
				post_data['token']= token;
				$.post(
					base_url+'adminwz',
					post_data,
					function(data){
						
					},'json'
				);
				
			}
		}).disableSelection();
	};
	
	this.setupSortFile = function(element) {
		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};	
		
		$(element).sortable({ 
			containment: $(element).closest('.row-fluid'),
			handle: "img.sortable",
			helper: fixHelper,
			placeholder: 'ui-placeholder',	
			distance: 15,
			start: function (event, ui){
				var sort_height= $(element+' tr:first').height() - 15;
				var sort_colspan= $(element+' tr:first td').length;
				ui.placeholder.html('<tr><td colspan="'+sort_colspan+'" style="height:'+sort_height+'px"></td></tr>');
			},
			stop: function(event, ui){
				$(element+' tr').each(function(index) {
					$(this).find('input.order').val(index);
				});				
			}
		});			
	};
		
	this.setupFile = function(mid, field, id, file_token) {
		var field_name= field + '_' + id;
		var uploader_file = new plupload.Uploader({
			runtimes : 'html5,flash,silverlight,html4',
			browse_button : 'pickfiles_'+id, // you can pass in id...
			container: document.getElementById('container_'+id), // ... or DOM Element itself
			url : base_url+'adminwz',
			flash_swf_url : base_url+'assets/admin/upload-process/Moxie.swf',
			silverlight_xap_url : base_url+'assets/admin/upload-process/Moxie.xap',
			multipart_params : {action : 'post', type : 'postUploadFile', field : id, mid: mid, nid : 0, file_token: file_token, token: token},
			init: {
				PostInit: function() {
					document.getElementById('filelist_'+id).innerHTML = '';
				},

				FilesAdded: function(up, files) {
					plupload.each(files, function(file) {
						document.getElementById('filelist_'+id).innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <strong></strong></div>';
					});
					uploader_file.start();
				},

				UploadProgress: function(up, file) {
					document.getElementById(file.id).getElementsByTagName('strong')[0].innerHTML = '<span>' + file.percent + "%</span>";
				},

				FileUploaded: function(up, files, response) {
					var data = $.parseJSON(response.response);
					$('#file_message_'+id).removeAttr('class').addClass(data.st.toLowerCase()).html(data.message);
					setTimeout(function() {
						$('div[id="'+files.id+'"]').remove();
						$('#file_message_'+id).removeAttr('class').html('');
					}, 3000);
					if(data.st == 'SUCCESS')
					{
						var file_preview= '<a href="javascript:;" data-type="file" class="embed" data-embed="'+base_url + data.full_path+'" >'+data.file_path+'</a> ('+data.file_size+')';
						file_preview+= '<img src="'+base_url+'assets/admin/img/icon/detele_26x26.png" alt="" class="pointer btnDeleteFile" data-field="'+id+'" data-type="tmp" />';
						
						$('input[name="'+field_name+ '"]').val(data.file_path);
						$('#fileupload_preview_'+id).html(file_preview);
						$('#'+field_name).removeClass('error');
						$('#'+ field_name).find('.help-inline').html('');
					}
				},
				
				Error: function(up, err) {
					//document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
				}
			}
		});
		uploader_file.init();		
	};
	
	this.setupFileMulti = function(mid, nid, field, id, file_token, element) {
		$element= $(element);

		$(element+' tbody tr').each(function(index) {
			$(this).find('input.order').val(index);
		});			
		
		var field_name= field + '_' + id;
		var uploader_filemulti = new plupload.Uploader({
			runtimes : 'html5,flash,silverlight,html4',
			browse_button : 'pickfiles_'+id, // you can pass in id...
			container: document.getElementById('container_'+id), // ... or DOM Element itself
			url : base_url+'adminwz',
			flash_swf_url : base_url+'assets/admin/upload-process/Moxie.swf',
			silverlight_xap_url : base_url+'assets/admin/upload-process/Moxie.xap',
			multipart_params : {action : 'post', type : 'postUploadFile', field : id, token: token, mid: mid, nid : nid, file_token : file_token, token : token},
			init: {
				PostInit: function() {
					document.getElementById('filelist_'+id).innerHTML = '';
				},

				FilesAdded: function(up, files) {
					plupload.each(files, function(file) {
						document.getElementById('filelist_'+id).innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <strong></strong></div>';
					});
					uploader_filemulti.start();
				},

				UploadProgress: function(up, file) {
					document.getElementById(file.id).getElementsByTagName('strong')[0].innerHTML = '<span>' + file.percent + "%</span>";
				},

				FileUploaded: function(up, files, response) {
					var data = $.parseJSON(response.response);
					$('#file_message_'+id).removeAttr('class').addClass(data.st.toLowerCase()).html(data.message);
					setTimeout(function() {
						$('div[id="'+files.id+'"]').remove();
						$('#file_message_'+id).removeAttr('class').html('');
					}, 3000);
					if(data.st == 'SUCCESS')
					{
						var tr_filelist= '<tr data-id="'+data.file_id+'">';
								tr_filelist+= '<td class="td-1">';
									tr_filelist+= '<div class="image-preview">';
										tr_filelist+= '<img src="'+base_url+'assets/admin/img/icon/move_24x24.png" class="move sortable" alt="" />';
										if(data.image)
										{
											tr_filelist+= '<img src="'+data.image+'"class="preview" alt="" />';
										}
										else
										{
											tr_filelist+= '<img src="'+base_url+'assets/admin/img/icon/file.png" class="preview" alt="" />';
										}
										tr_filelist+= '<div class="clearAll"></div>';
									tr_filelist+= '</div>'
								tr_filelist+= '</td>';
								
								tr_filelist+= '<td class="va-t">'
									tr_filelist+= '<div class="item-info">';
										tr_filelist+= '<span><img src="'+base_url+'assets/admin/img/icon/file/image.png" alt="" /></span>';
										tr_filelist+= '<span><a class="fancybox" href="'+data.full_path+'"> '+data.file_path+'</a></span>';
										tr_filelist+= '<span> ('+data.file_size+')</span>';
									tr_filelist+= '</div>';
								if(data.is_image)
								{
									tr_filelist+= '<div class="item-text">';
										tr_filelist+= '<div class="div_title_text">';
											tr_filelist+= '<div><strong>Title text</strong></div>';
											tr_filelist+= '<div><input type="text" name="'+ field_name +'_' + data.file_id+'_file_title" class="span6 m-wrap" /></div>';
										tr_filelist+= '</div>';
										tr_filelist+= '<div class="div_caption_text">';
											tr_filelist+= '<div><strong>Caption text</strong></div>';
											tr_filelist+= '<div><textarea class="span6 m-wrap" rows="3" name="'+ field_name + '_'+data.file_id+'_file_caption" ></textarea></div>';
										tr_filelist+= '</div>';
										tr_filelist+= '<div class="div_youtube">';
											tr_filelist+= '<div><strong>Youtube</strong></div>';
											tr_filelist+= '<div><input type="text" name="'+ field_name +'_' + data.file_id+'_file_youtube" class="span6 m-wrap" /></div>';
										tr_filelist+= '</div>';										
										tr_filelist+= '<div class="clearAll"></div>';
									tr_filelist+= '</div>';
								}
								tr_filelist+= '</td>';
								
								tr_filelist+= '<td class="td-3 center">';
									tr_filelist+= '<a class="mini btn red _btn file-delete"><i class="icon-trash"></i> Delete Item</a>';
									tr_filelist+= '<input type="hidden" name="'+ field_name +'_'+data.file_id+'_file_order" class="order" />';
								tr_filelist+= '</td>';
								
							tr_filelist+= '</tr>';
							
							$('#table_filelist_'+id+' tbody').prepend(tr_filelist);
							var file_length= $('#table_filelist_'+id+' tbody tr').length;
							$('#'+field_name).removeClass('error');
							$('#'+field_name).find('.help-inline').html('');
							$('input[name="'+field_name+'"]').val(file_length);
							
							if($element.find('.btn-hidden-text').attr('data-collapse') == 'show')
							{
								$element.find('.item-text').fadeIn();	
							}
							else
							{
								$element.find('.item-text').fadeOut();
							}								
					}
					
					$(element+' tbody tr').each(function(index) {
						$(this).find('input.order').val(index);
					});						
				},
				
				Error: function(up, err) {
					document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
				}
			}
		});
		uploader_filemulti.init();
		$('#table_filelist_'+id+' .file-delete').live('click', function() {
			var r=confirm("Delete file !");
			var $this= $(this);
			if (r==true)
			{
				var post_data = {
					action		:'post',
					type		:'postDeleteFileMulti',
					mid			: mid,
					nid			: nid,
					fid			: id,
					id			: $(this).closest('tr').attr('data-id'),
					token	: token
				};			
				$.post(
					base_url+'adminwz',
					post_data,
					function(data){
						if(data.st == 'SUCCESS')
						{
							$this.closest('tr').fadeOut('slow').remove();
						}
					},'json'
				);
			}		
		});
	};
	
	this.setupMaps = function(field, id, field_content) {
		var field_name= field + '_' + id;
		var options = {
			map: "#map_canvas_"+id,
			location: "",
			  markerOptions: {
				draggable: true
			},
			 details: ""
		};
		$('input[name="'+field_name+'"]').geocomplete(options);	
		
		$('input[name="'+field_name+'"]').bind("geocode:result", function(event, result){
			$('input[name="'+field_name+'_lat"]').val(result.geometry.location.lat());
			$('input[name="'+field_name+'_lng"]').val(result.geometry.location.lng());
			$('input[name="'+field_name+'_formatted_address"]').val(result.formatted_address);	
		});
	  
		$('input[name="'+field_name+'"]').bind("geocode:dragged", function(event, latLng){
			$('input[name="'+field_name+'_lat"]').val(latLng.lat());
			$('input[name="'+field_name+'_lng"]').val(latLng.lng());
			$('input[name="'+field_name+'_formatted_address"]').geocomplete("find", latLng.lat() + "," + latLng.lng());
			$('input[name="'+field_name+'"]').geocomplete("find", latLng.lat() + "," + latLng.lng());
		});	 
		
		if(field_content)
		{
			$('input[name="'+field_name+'"]').geocomplete("find", field_content);
		}
	};
		
	this.setupTags = function(field, id, field_content) {
		var field_name= field + '_' + id;
		$('textarea[name="'+field_name+'"]').tagsInput({
			width: '47.5%',
			autocomplete_url: base_url+'adminwz/module/get-tags', // jquery ui autocomplete requires a json endpoint,
			onAddTag: function(){
				$('textarea[name="'+field_name+'"]').closest('.control-group').removeClass('error').find('.help-inline').html('');
			}
		});
		
		
		if(field_content)
		{
			$('textarea[name="'+field_name+'"]').importTags(field_content);
		}
	};
	
	this.setupSelectChildren = function(parent, element, fid, field_content) {
		$('select'+parent).live('change', function(){
			if($(this).val()){
				var post_data = {
					action			:'post',
					type			:'postSelectChildren',
					fid				: fid,
					pid				: $(this).val(),
					field_content	: field_content,
					token			: token
				};		
				
				$.post(
					base_url + 'adminwz',
					post_data,
					function(data){
						if(data.st == 'SUCCESS')
						{
							$('select'+element).parent().html(data.html);
							$('select'+element).change();
						}
					},'json'
				);	
			}
		});
		if(field_content)
		{
			$('select'+parent).change();
			$('select'+parent).closest('.control-group').removeClass('success');
		}				
	};
	
	this.setupDatetimePicker = function(field, id) {
		var field_name= field + '_' + id;
		var el= $('#'+field_name+'_datetimepicker').datetimepicker();	
		el.on('changeDate', function(e) {
			$('#'+field_name+'_datetimepicker').closest('.control-group').removeClass('error').find('.help-inline').html('');
		});		
	};
	
	this.setupPrice = function(field, id) {
		var field_name= field + '_' + id;
		$('input[name="'+field_name+'"]').number(true);		
	};	
	
	this.settupColorPicker = function(field, id){
		var field_name= field + '_' + id;
		var el= $('.'+field_name+'-colorpicker-default').colorpicker({ format: 'hex'});	

		el.on('changeColor', function(e) {
			$('.'+field_name+'-colorpicker-default').closest('.control-group').removeClass('error').find('.help-inline').html('');
		});			
	};
	
	this.showAlert = function(txt, type, $form){
		if(type=='SUCCESS')
		{
			$form.find('.alert').removeClass('alert-error').addClass('alert-success');
		}
		else
		{
			$form.find('.alert').removeClass('alert-success').addClass('alert-error');
		}
		$form.find('.alert').show().find('span').text(txt);
		setTimeout(function() {
			$form.find('.alert').fadeOut();
		}, 5000);		
	};
	
	this.showResponse = function(data, $form){
		$form.find('.control-group').removeClass('error');
		$form.find('.help-inline').html('');
		$.each(data.error, function(key, value) {
			var $this= $('div.control-group#'+value.field);
			if(data.st=='SUCCESS')
			{
				$this.removeClass('error').addClass('ok');
				$this.find('.help-inline').text('');			
			}
			else
			{
				$this.removeClass('success').removeClass('ok').addClass('error');
				$this.find('.help-inline').text(value.txt);		
			}
		});	
	};
	
	this.setupFlowPlayer= function(id){
		flowplayer(id, base_url+"assets/admin/flow-player/flowplayer-3.2.16.swf");
	};
	
	this.reminder= function(){
		$(document).on('click', '#btnReminder', function(){
			$.post(
				base_url+'adminwz/c/reminder',
				{
					token	: token
				},
				function(data){
					self.fancybox(data.html);
				},'json'
			);
		});

		$(document).on('click', '.btnEdit', function(){
			var $this= $(this);
			var type= $this.attr('data-type');
			if(type == 'delete')
			{
				var r = confirm("Delete reminder");
				if (r != true)
				{
					return false;
				}
			}

			var id= $this.parent().attr('data-id');
			$.post(
				base_url + 'adminwz/c/reminder',
				{
					token	:	token,
					type	:	type,
					id		:	id
				},
				function(data){
					if(data.st == 'SUCCESS'){
						switch(data.type){
							case('edit'):
								self.fancybox(data.html);
								break;
							case('delete'):
								var reminder_count= parseInt($('.reminder-count').html());
								var reminder_count_sum= reminder_count - 1;
								if(reminder_count_sum == 0){
									$('.item-reminder').remove();
									$('.badge-count').remove();
								}
								$('.reminder-count').html(reminder_count_sum);
								$('.badge-count').html(reminder_count_sum);
								$this.closest('li').remove();
								var $item_reminder= $this.closest('.item-reminder').find('ul li');
								if($item_reminder.length) $this.closest('.item-reminder').remove();
								break;
						}
					}
				},'json'
			);
			return false;
		});

		$(document).on('click', '#btnLoadReminder', function(){
			var $this= $(this);
			if(!$this.hasClass('disable')){
				$this.addClass('disable');
				var start= $(this).attr('data-start');
				var end= $(this).attr('data-end');
				$.post(
					base_url + 'adminwz/c/load_reminder',
					{token:token, start:start, end:end},
					function(data){
						$this.removeClass('disable');
						if(data.st == 'SUCCESS'){
							$('#content-reminder').prepend(data.html);
							if(!data.past_reminder[0]){
								$('#btnLoadReminder').parent().remove();
							}else{
								$('#btnLoadReminder').attr({'data-end':data.past_reminder[1], 'data-start':data.past_reminder[0]});
							}
						}
					},'json'
				);
				return false;
			}
		});

		$(document).on('click', '#btnPostReminder', function(){
			$.post(
				base_url+'adminwz',
				{
					token				: token,
					action				: 'post',
					type				: 'postReminder',
					reminder_id			: $('input[name="reminder_id"]').val(),
					reminder_time		: $('input[name="reminder_time"]').val(),
					reminder_title		: $('input[name="reminder_title"]').val(),
					reminder_content	: $('textarea[name="reminder_content"]').val(),
					reminder_link		: $('input[name="reminder_link"]').val()
				},
				function(data){
					if(data.st == 'SUCCESS'){
						$.fancybox.close();
						self.showModal('Reminder', data.txt);
						setTimeout(function(){
							location.reload();
						}, 1000);
					}else{
						self.showResponse(data, $('#_frReninder'));
						$.each(data.error, function(key, value){
							var field_offset= $('#'+value.field).offset();
							$('html, body').animate({scrollTop: field_offset.top - 50 +'px'}, 300,function(){});
							return false;
						});
					}
				},'json'
			);
		});
	};
		
	this.userEdit = function() {
		$('#_btnUser').live('click', function() {
			var el = $(this).parents(".portlet");
			App.blockUI(el);
			var data = {
				action		:	'post',
				type		:	'postSaveUser',
				token 	:	token
			};
			var $form= $('#_frUserEdit');
			var form= $form.serialize();
			var data_form = form + '&' + $.param(data);	
			$.post(
				base_url + 'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.txt)
					{
						self.showModal('Admin User', data.txt);
					}		
					
					if(data.st=='SUCCESS')
					{
						self.resetError($form, base_url + 'adminwz/user/manage');
					}
					else
					{			
						self.showResponse(data, $form);
					}
				},'json'
			);
		});		
	};
	
	this.userProfile = function(){
		// Profile= {
			// call : function(data){
				// $('#_avatar').attr({src:data.image});
				// $('#small-avatar').attr({src:data.image});				
			// }
		// }
		
		$('#_btnProfile').live('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);
			var data = {
				action		:	'post',
				type		:	'postSaveUserProfile',
				token 	:	token
			};
			var $form= $('#_frUserProfile');
			var form_data= $form.serialize();
			var data_form = form_data + '&' + $.param(data);	
			$.post(
				base_url + 'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					$('html, body').animate({scrollTop: 135 +'px'}, 300,function(){});
					if(data.st=='SUCCESS')
					{
						self.resetError($form);
						self.showModal('Admin', data.txt);
						$('html, body').animate({scrollTop: '0px'}, 300,function(){});
					}
					else
					{
						self.showAlert(data.txt, data.st, $form);
						self.showResponse(data, $('#_frUserProfile'));
					}
				},'json'
			);
		});
	};
	
	this.userRoleEdit = function() {
		$(document).on('click', 'input[type="checkbox"]', function(){
			var $this= $(this);
			if($this.is(":checked")){
				$this.closest('li').find('input[value="'+$this.val()+'"]').prop( "checked", true);
			}else{
				$this.closest('li').find('input[value="'+$this.val()+'"]').prop( "checked", false);
			}
			self.uniformUpdate();
		});
	
		$('#_btnUserRole').live('click', function() {
			var el = jQuery(this).parents(".portlet");
			App.blockUI(el);
			var data = {
				action		:	'post',
				type		:	'postSaveUserRole',
				token 	:	token
			};
			var $form= $('#_frUserRoleEdit').serialize();
			var data_form = $form + '&' + $.param(data);	
			$.post(
				base_url + 'adminwz',
				data_form,
				function(data){
					App.unblockUI(el);
					if(data.txt)
					{
						self.showAlert(data.txt, data.st, $('#_frUserRoleEdit'));
					}	
					
					if(data.st=='SUCCESS')
					{
						window.location= base_url + 'adminwz/user/role';
					}
					else
					{
						self.showResponse(data, $('#_frUserRoleEdit'));
					}
				},'json'
			);
		});
	};	
	
	this.uniformUpdate = function(){
		if($.uniform){
			$.uniform.update();
		}
	};	
	
	this.unloading= function(element){
		var el = $(element).parents(".portlet");
		App.unblockUI(el);
	};	
}

Admin= new Admin();
Admin.init();