var w_ = $(window).width();
var h_ = $(window).height();
var btn_hmn = true;
var slider;
var $result = [];
var $selectionData = '';
var notify ='';
var time_socialicon;
var print_body=$('body');
function Page(){
	var self= this;
	
	this.init= function(){
		$(window).load(function(){
			html2canvas(print_body, {
				onrendered: function(canvas) {
					var myImage = canvas.toDataURL("image/png");
					$("#imgprev").html("<img src='"+ myImage +"' />");
				}
		    });
		});
		$(document).on('change','.date-bar select',function(){
			$('#btSearchEntry').trigger('click');
		});
		$('.faq-search input').on('keypress', function(e) {
			if (e.which == 13) {
				$("#btSearch").click();
				$('#btSearchLibrary').click();
				e.preventDefault();
				return false;
			}
		});
		$(document).on('click','.lang_popup',function(){
			$(".pop_content").css('width','400px');
			$(".pop_content").html('Phiên bản Tiếng Việt hiện đang được cập nhật. Vui lòng quay trở lại sau.');
			$selectionData = 'none';
			$(".fancybox").trigger('click');
			return false;
		})
		$('.popup_brochure').fancybox({
			padding: 30
		});
		$('.OpenID').click(function(){
			var title= $(this).attr('data-title');
			var url= $(this).attr('data-url');
			self.window_open(title, url);
		});	
		$('.loading').hide();
		self.jquery();
		self.nav_menu();
		self.menu_services();
		//self.submit_form();
		//self.change_number_page();
		self.save_jobs();
		self.all_cv($result);
		self.delete_jobs();
		self.check_max_create_cv();
		self.load_city();
		self.notification();
		self.download_now();
		$('.input_submit').on('keypress', function(e) {
			if (e.which == 13) {
				$(".submit_login").click();
				e.preventDefault();
				return false;
			}
		});
		
		$('.input_popup_sb').on('keypress', function(e) {
			if (e.which == 13) {
				$(".submit_login_popup").click();
				e.preventDefault();
				return false;
			}
		});
		
		$(".change_lang").change(function(){
			var change_url = $(this).val();
			window.location.href = change_url;
		});

		$('#form_skill_language #category').bind('change',function(){
			var val = $(this).val();
			if(val == 'Languages'){
				self.load_type_language(1,'');
			}else{
				self.load_type_language(0,'')
			}
		})
	};
	
	
	this.jquery = function(){
		$('.nf').click(function(event){
			event.stopPropagation();
			if($('#box_notification.mb-nf').css('display') == 'none'){
				$('#box_notification.mb-nf').fadeIn();
			}else{
				$('#box_notification.mb-nf').fadeOut();
			}
		})
		$('#box_notification.mb-nf').click(function(event){
			event.stopPropagation();
		})
		$('body').click(function(event){
			// event.stopPropagation();
			$('#box_notification.mb-nf').fadeOut();
		})
		// if($("#box_notification ._body").length > 0){
		// 	$("#box_notification ._body").niceScroll({
		// 		autohidemode: false,
		// 		cursorcolor:"#6f533e",
		// 		cursorwidth: "5px",
		// 		zindex: "100",
		// 		cursorborder: "none",
		// 		background: "none"
		// 	});
		// }
		if($('#btPrint').length>0){
			$('#btPrint').bind('click',function(){
				
			});
		}
		if($('form').length > 0){
			$('input').placeholder();
		}
		var hr_url = window.location.href;
		 $('.auto').autoNumeric('init');
		if($('.user-exec.pc .bxslider').length > 0){
			$('.user-exec.pc .bxslider').bxSlider({
				pager: false,
				slideWidth: 250,
				slideMargin: 24,
				maxSlides: 2,
				minSlides: 1,
				moveSlides: 1,
				infiniteLoop: false,
				hideControlOnEnd: true
			});
		}
		if($('.ab-salary-item-1 ul').length > 0){
			$('.ab-salary-item-1 ul').bxSlider({
				pager: false,
				// slideWidth: 253,
				slideMargin: 0,
				maxSlides: 1,
				minSlides: 1,
				moveSlides: 1,
				auto: true,
				pause: 3000
			});
		}
		if($('.ab-salary-item-2 ul').length > 0){
			$('.ab-salary-item-2 ul').bxSlider({
				pager: false,
				// slideWidth: 235,
				slideMargin: 20,
				maxSlides: 2,
				minSlides: 1,
				moveSlides: 1
			});
		}

		if($('.user-exec.androi .bxslider').length > 0){
			$('.user-exec.androi .bxslider').bxSlider({
				pager: false,
				slideWidth: 235,
				slideMargin: 24,
				maxSlides: 1,
				minSlides: 1,
				moveSlides: 1,
				infiniteLoop: false,
				hideControlOnEnd: true
			});
		}

		if($('#logo-owl').length > 0){
			var owl = $('#logo-owl');
			owl.owlCarousel({
				itemsCustom : [
						[320, 1],
						[360, 2],
						[480, 2],
						[640, 3],
						[768, 3],
						[1200, 5]
					],
				autoPlay : 2000,
				pagination : false,
				navigation : true,
				stopOnHover : false
			});
			// $('#logo-owl .owl-prev, #logo-owl .owl-next').on('click',function(){
			//     owl.trigger('owl.stop');
			// });
		}
		if($('.owl-user-exec').length > 0){
			$('.owl-user-exec').owlCarousel({
				items : 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall : [900, 2],
				itemsTablet: [767, 1],
				itemsMobile : [480, 1],
				pagination : false,
				navigation : true,
				navigationText: false
			});
		}
		if($('.owl-wrap-pn').length > 0){
			$('.owl-wrap-pn').owlCarousel({
				itemsCustom : [
						[320, 1],
						[360, 2],
						[480, 2],
						[640, 3],
						[768, 3],
						[1200, 5]
					],
				pagination : false,
				navigation : true
			});
		}

		$('.no-top').live('click', function(){
			var b_top = $('#footer').offset().top;
			$('html, body').stop().animate({'scrollTop': b_top}, 1000);
			return false;
		});
		
		$('.back-top').live('click',function(){
			$('html,body').stop().animate({ scrollTop: 0 }, 1000);
			return false; 
		})
		// $('.no-top').live('click',function(){
		// 	$('html,body').stop().animate({ scrollTop: 10000 }, 1000);
  //     		return false; 
		// })

		if(w_<=997){
			// setTimeout(function(){
			// 	$('.share-bar').stop().animate({right: -47});	
			// }, 5000)
		}
		$(window).resize(function(){
			w_ = $(window).width();
			// if(w_<=997){
			// 	setTimeout(function(){
			// 		$('.share-bar').stop().animate({right: -47});	
			// 	}, 5000)
			// }
		})
		$('.mb-share-tt').click(function(){
			$('.share-bar').stop().animate({right: 0});			
		})
		$('.mb-cl-ss').click(function(){
			$('.share-bar').stop().animate({right: -47});			
		})
		
		$(window).scroll(function(){
			console.log(111);
			var h_top = $(window).scrollTop();
			if (h_top < 230){
				$('.no-top').show();
				$('.back-top').hide();
			}else{
				$('.no-top').hide();
				$('.back-top').show();
			}
		});

		if($('.fancybox').length>0){
			$('.fancybox').fancybox({
				afterLoad: function(){
				setTimeout(function(){
						$('.ab-scroll').jScrollPane();
					},500);
				},
				afterClose : function() {
					self.call_action_do();
				},
				padding:0,
				margin:0
			});
		}	

		$(".video_home").fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			closeBtn	: true,
			openEffect	: 'none',
			closeEffect	: 'none',
			afterShow	:function(){
				setTimeout(function(){
					$('.fancybox-skin').css({
					'background':'#fff !important',
					});
					$('.fancybox-close').show();

				},5000);
			}
		});

		if($('.iCheck').length>0){
			$('.iCheck').uniform();
		}

		if($('.ab-scroll').length>0){
			// $('.ab-scroll').jScrollPane();
		}

		if($('.js-select').length > 0){
			$('.js-select').selectbox();
		}

		if($('.lg').length>0){
			$('.lg').selectbox();	
		}
		
		if ($('.nav-pills').length > 0){
			$('.nav-pills li').hover(function(){
				$('.nav-pills li').removeClass('open');
			},function(){

			});
			
		}

		$('.ab-l.sbj .col-md-5 ul > a').remove();

		//tab-about
		if ($('.ab-surely').length > 0){
			$('.item-surely.ab .btn-surely a').click(function(){
				$('.item-surely.ab .btn-surely a').parent().parent().removeClass('active');
				$(this).parent().parent().addClass('active');
				var link = $(this).parent().parent().index();
				var top = $('.surely_use .ab-story').eq(link).offset().top;
				var top_1 = $('.surely_use .ab-story').eq(1).offset().top;
				if(top == $('.surely_use .ab-story').eq(1).offset().top){
					$('html,body').stop().animate({scrollTop: top_1},500);
				}else{
					$('html,body').stop().animate({scrollTop: top},500);
				}
				// $('.item-surely-child').stop().slideUp();
				// $(this).parent().siblings('.item-surely-child').stop().slideDown();
			});

			$('.item-surely.hr .btn-surely a').click(function(){
				$('.item-surely.hr .btn-surely a').parent().parent().removeClass('active');
				$(this).parent().parent().addClass('active');
				var link = $(this).parent().parent().index();
				$('.services-all .col-md-12').eq(link).find('.f-bb > a').trigger('click');
			});
		}
		//Hover Skill Endorsement
		if ($('.ab-skill .row .col-md-11').length > 0){
			$('.ab-skill .row .col-md-11 a').hover(function(){
				$(this).addClass('active');
				var $_that = $(this).width() + 20;
				if ($_that < 107){
					$(this).css({'width': '107px'});
				} else {
					$(this).attr('style','');
				}
			},function(){
				$(this).removeClass('active');
				$(this).attr('style','');
			});
		}

		//Tab - Question
		if ($('.faq-question').length > 0){
			$('.faq-question .row .col-md-8 .faq-question-btn').click(function(){
				$('.faq-question .row .col-md-8').find('.faq-answer').stop().slideUp();
				$(this).parent().find('.faq-answer').stop().slideDown();
			});
		}
		if($('.more_faq').length>0){
			$('.more_faq').bind('click',function(){
				$(this).parent('p').hide();
				$(this).parent('p').siblings().show();
			});
		}
		if($('.more_awar').length>0){
			$('.more_awar').bind('click',function(){
				$(this).parents('.ft-div').hide();
				$(this).parents('.ft-div').siblings().show();
			});
		}
		if($('.more_ques').length>0){
			$('.more_ques').bind('click',function(){
				$(this).hide();
				$(this).parent(".faq-question-one").find($('.q-shr')).hide();
				$(this).parent(".faq-question-one").find($('.q-full')).show();
			});
		}
		//Sub-menu
		if ($('.header-top.unmobile').length > 0){
			$('.header-top.unmobile ul li a').hover(function(){
				$(this).parent().find('.submenu-sign').show();
				$(this).parent().find('.tt').css({'background':'#000'});
                // $(this).parent().find('#box_notification').show();
			},function(){
				$(this).parent().find('.submenu-sign').hide();
				$(this).parent().find('.tt').css({'background':'none'});
                // $(this).parent().find('#box_notification').hide();
			});
			$('.header-top.unmobile .submenu-sign').hover(function(){
				$(this).show();
				$(this).parent().find('.tt').css({'background':'#000'});
			},function(){
				$(this).hide();
				$(this).parent().find('.tt').css({'background':'none'});
			});
		}
		if($('#show_list_notify').length>0){
			// $('#show_list_notify').bind('mouseover click',function(){
			// 	var box_notification= $(this).parent().find('#box_notification');
			// 	if($(box_notification).is(':hidden'))
			// 		$(box_notification).show();
			// 	else $(box_notification).hide();
			// });
		}
		if ($('.top-hder.mobile').length > 0){
			$('.top-hder.mobile ul li a').click(function(){
				$(this).parent().find('.submenu-sign').stop().slideToggle();
			});
		}

		// Click HR Servies
		if ($('.services-all-item').length > 0){
			$('.services-all-item a').click(function(){
				$(this).toggleClass('active');
				$(this).parent().find('.services-all-item-text').stop().slideToggle();
			});

			$('.services-all .col-md-12 h2 a').click(function(){
				$(this).toggleClass('active');
				$(this).parent().parent().find('.ab-hide-1').stop().slideToggle();
			});
		}

		// Click About
		if ($('#about-talent').length > 0){
			$('a.bullet').click(function(){
				$(this).toggleClass('active');
				$(this).parent().parent().find('.ab-story-ct').stop().slideToggle();
			});
		}

		// Hover Joblist
		if ($('.carrer-talent-item.signin').length > 0){
			$('.carrer-talent-item.signin .row .text-1 a').hover(function(){
				$(this).parent().parent().find('.hover-job').show();
			},function(){
				$(this).parent().parent().find('.hover-job').hide();
			});
			$('.hover-job').hover(function(){
				$(this).show();
			},function(){
				$(this).hide();
			});
		}

		if ($('.carrer-talent').length > 0){
			$('.btn-share-talent').hover(function(){
				$(this).parent().find('.share-all').show();
			},function(){
				$(this).parent().find('.share-all').hide();
			});
			$('.share-all').hover(function(){
				$(this).show();
			},function(){
				$(this).hide();
			});
		}
        
	    $('#browse-click').bind('click', function () { // use .live() for older versions of jQuery
	        $('#file-type').trigger('click');
	        return false;
	    });

	    // date
	    $('.ip_date').datepicker({
			changeMonth : true,
			changeYear : true,
			showButtonPanel: true,
			dateFormat : "dd/mm/yy",
			yearRange : "2010:2050",
			closeText: "Close",
			onSelect: function(){
				$(this).change();
			}
		});
		$('.date_icon').click(function(){
			$(this).prev().find('.ip_date').datepicker('show');
		});

		$('.ip_date_sala').datepicker({
			changeMonth : true,
			changeYear : true,
			dateFormat : "DD, MM d, yy",
			yearRange : "1930:2050",
			onSelect: function(){
				$(this).change();
			}
		});

		// uniform

		if($('.uni_radio').length>0){
			$('.uni_radio input').uniform();
		}
		if($('.ck').length>0){
			$('.ck input').uniform();
		}

		$('.btn-save-prfile').fancybox({
			padding: 0,
			closeBtn: false
		});
		$('.close_noti').click(function(){
			$.fancybox.close();
		});
		
		$('#captcha-refresh').click(function() {
			var captcha_url = $(this).data('url');
			$("#captcha_img").attr('src',captcha_url+Math.random());
		});
	};

	this.menu_services = function(){
		if($('#about-talent .services').length > 0){
			var	href = window.location.hash;
			var href_l = href.length;
			if (href_l > 0){
				$(window).load(function(){
					$('.services-all .col-md-12 > h2 a[href='+href+']').trigger('click');
					$('html, body').animate({scrollTop: $('.services-all .col-md-12 > h2 a[href='+href+']').offset().top}, 500);
					
					$('.menu .service .dropdown-menu a').live('click', function(){
						var href1 = $(this).attr('href').split("#")[1];
						$('.services-all .col-md-12 > h2 a[href=#'+href1+']').trigger('click');
						$('html, body').animate({scrollTop: $('.services-all .col-md-12 > h2 a[href=#'+href1+']').offset().top}, 500);
						return false;
					});
				});
			}
		}
	}

	this.nav_menu = function(){
		var h_ = $(window).height();
		var menu_mb = $('.menu_mobile');
		var btn_h = $('.h_mn');
		menu_mb.height(h_);
		var t = $(window).scrollTop();
		if(t>=130){
			menu_mb.addClass('fix');
		}else{
			menu_mb.removeClass('fix');
		}
		$(window).scroll(function(){
			t = $(window).scrollTop();
			if(t>=130){
				menu_mb.addClass('fix');
			}else{
				menu_mb.removeClass('fix');
			}
		})
		$(window).resize(function(){
			var h_ = $(window).height();
			menu_mb.height(h_);
		});

		btn_h.click(function(){
			var $this = $(this);
			if(btn_hmn){
				btn_hmn = false;
				$this.addClass('active');
				menu_mb.stop().animate({right: 0});
			}else{
				btn_hmn = true;
				$this.removeClass('active');
				menu_mb.stop().animate({right: -321});
			}
		})
	}

	this.window_open= function(title, url){
		window.open(url, title,'menubar=0,resizable=1,width=600,height=500');
	};
	
	this.user= function(){
		
	};

	
    this.contact= function(){    
    	var confirm_nav_ignore = [];	
    	function save_form_state($form) {
		    var old_state = $form.serialize();
		    $form.data('old_state', old_state);
		}
		// On load, save form current state
	    $('form').each(function() {
	        save_form_state($(this));
	    });
	    $('form').submit(function() {
	        save_form_state($(this));
	    });
    	function strip(form_data) {
	        for (var i=0; i<confirm_nav_ignore.length; i++) {
	            var field = confirm_nav_ignore[i];
	            form_data = form_data.replace(new RegExp("\\b"+field+"=[^&]*"), '');
	        }   
	        return form_data;
	    }
    	$(window).bind('beforeunload', function(e){
    		$('form').each(function() {
	            var $form = $(this);
	            var old_state = strip($form.data('old_state'));
	            var new_state = strip($form.serialize());
	            if (new_state != old_state) {
	                rv = true;
	            }   
	        }); 	    
	        if(rv==true){
	        	return 'Are you sure?';
	        }
		});
        $('#popup_tk').fancybox();
		$('.btnSend').click(function(){
			$('.loading').show();
			$div_error= $('#div_error');
			var $form= $('#frContact');
			var $this= $(this);
			var data = {
				token 	: token,
			};
			var post_data = $form.serialize() + '&' + $.param(data);
            //console.log(post_data);
			$.post(
				base_url+'contact/post',
				post_data,
				function(data){	
					$('.loading').hide();				
					if(data.st == 'SUCCESS'){
						self.formReset($form);
						$div_error.removeClass('frError');
						$div_error.addClass('frSuccess');						
						$div_error.html(data.txt);
						setTimeout(function(){
							$div_error.html('');
						}, 1500);
                        // $('#popup_tk').trigger('click');   
                        setTimeout(function(){
	                    	window.location.href = root_lang + 'thank-you';
	                    }, 200);                     
					}else{
						self.showResponse(data, $form);
					}

				},'json'
			);
			
		});				
	};
	
    this.showResponse = function(data, $form){
		var $div_error= $('#div_error');
		$div_error.removeClass('frSuccess');
		$div_error.addClass('frError');
		$.each(data.error, function(key, value) {
			var $this= $('.field_'+value.field);
            $this.focus();
			$div_error.html(value.txt);
			return false;
		});	
	};
    
    this.formReset= function($form){
		$form.each(function(){
			this.reset();
		});	
	};
	
	this.home = function(){
		var slider_service;
		var det = 0, eq = 0;
		var ww = $(window).width();
		if($('.slider-expertise .bxslider').length > 0 && ww > 768){
			js_slide();
		}
		
		function js_slide(){
			slider_service = $('.slider-expertise .bxslider').bxSlider({
				slideWidth: 278,
				minSlides: 1,
				maxSlides: 3,
				moveSlides: 1,
				infiniteLoop: true,
				pager: false,
				touchEnabled: true,
				auto: true,
				pause: 5000
			});
		}
		
		$(window).resize(function(){
			if($(this).width() < 768){
				eq = 0;
				if(det != eq){
					if(typeof slider_service === "object"){
						slider_service.destroySlider();
					}
					det = eq;
				}
			}else{
				eq = 1;
				if(det != eq){
					if(typeof slider_service === "object"){
						slider_service.reloadSlider();
					}else{
						js_slide();
					}
					det = eq;
				}
			}
		});
		
		
		
		if ($.browser.msie  && parseInt($.browser.version, 10) === 8) {
			setTimeout(function(){
				if($('.user-talentnet .bxslider').length > 0){
					$('.user-talentnet .bxslider').bxSlider({
						pager: false,
						auto: true,
						pause: 6000,
						infiniteLoop: true
					});
				}
				if($('.box-video .bxslider').length > 0){
					$('.box-video .bxslider').bxSlider({
						pager: false
					});
				}
				
			},1000);
		} else {
		  	if($('.user-talentnet .bxslider').length > 0){
				$('.user-talentnet .bxslider').bxSlider({
					pager: false,
					auto: true,
					pause: 6000,
					infiniteLoop: true
				});
			}
			if($('.box-video .bxslider').length > 0){
				$('.box-video .bxslider').bxSlider({
					pager: false
				});
			}
		}
	};
	

	this.submit_form = function(type_class){
		$(".submit_"+type_class).click(function(){
			$('.loading').show();
			var notify = '';
			$('.notice').removeClass('blue');
			$('.notice').addClass('red');
			$form = $(this).data('form');
			$type = $(this).data('type');			
			$update = $(this);
			$('.notice').html('');
			if($update.hasClass('p_submit')){
				$update.removeClass('.p_submit');
				$.post(
					base_url +$type,
					$("#"+$form).serialize(),
					function(data){
						if(data.st == 'SUCCESS'){

							$('.input').attr('value','');
							$('#captcha-refresh').trigger('click');
							$('.notice').html('');
							$('.notice').removeClass('red');
							$('.notice').addClass('blue');
							self.Reset("#"+$form);
							$(".pop_content").html('');
							var title = (lang == 'vi' ? 'Cám ơn bạn' : 'Thank You');
							$(".pu-upload-cv .note").html(title);
							if($type == 'pRegister'){
								notify = (lang == 'vi' ? 'Đăng ký thành công' : 'Successful registration');
								$(".pop_content").html(notify);
								$selectionData = 'register';
								//$(".fancybox").trigger('click');
								//console.log(data);
								//alert(data.referrers);
								
							}else if($type == 'pProfile'){
								notify = (lang == 'vi' ? 'Cập nhật thông tin thành công' : 'Updates success');
								$(".pop_content").html(notify);
								$selectionData = 'profile';
                            }else if($type == 'pForgot'){
								notify = (lang == 'vi' ? 'Gửi quên mật khẩu thành công' : 'Send forgotten passwords success');
								$(".pop_content").html(notify);
								$selectionData = 'forgot';
							}else if($type == 'pLogin'){
								notify = (lang == 'vi' ? 'Đăng nhập thành công' : 'Login successful');
								$(".pop_content").html(notify);
								$selectionData = 'login';
								self.call_action_do(data.link);
							}else if($type == 'save_job_alert'){
								if(data.id){
									notify = (lang == 'vi' ? 'Bạn đã sửa Jobs Alert thành công' : 'You have successfully edited Alert Jobs');
									$(".pop_content").html(notify);
									$selectionData = 'edit_job_alert';
								}else{
									notify = (lang == 'vi' ? 'Bạn đã thêm Jobs Alert thành công' : 'You have successfully added Alert Jobs');
									$(".pop_content").html(notify);
								}
							}else{
								
								$(".pop_content").html(data.txt);
							}
							setTimeout(function(){
								$('.loading').hide();
								$(".fancybox").trigger('click');
								if($type == 'pRegister'){
									self.call_action_do(data.referrers);
								}
							},800);

							
						}else{
							$update.addClass('.p_submit');
							$.each(data.error, function(key, value){
								if(value.field == 'captcha'){
									if(value.txt == 'Verification wrong' || value.txt == 'Mã nhận diện không chính xác'){
										$('#captcha-refresh').trigger('click');
									}
								}
								$('#'+value.field).focus();
								//$('#'+value.field).parent().addClass('border_error');
								$('.error_'+type_class).html(value.txt);
								return false;
							});
						}
					},'json'
				);
			}
			return false;
		});
	};
	
	this.search_job = function(id, url){
	    function search_job_handle(){
/* 	       var pz=$('#change_number_page').val();
            var str_query='';
            if(typeof pz=='undefined') 
                str_query='?pz=5';
            else 
                str_query ='?pz='+pz;
			$keyword = $("#keyword").val() ? encodeURIComponent($("#keyword").val()) : (lang == 'en' ? 'all-jobs' : 'tat-ca-viec-lam');
			$function 	= $("#function").val() ? '+' + encodeURIComponent($("#function").val()) : '+all';
			$industry 	= $("#industry").val() ? '+' + encodeURIComponent($("#industry").val()) : '+all';
			$level 		= $("#level").val() ? '+' + encodeURIComponent($("#level").val()) : '+all';
			$location 	= $("#location").val() ? '+' + encodeURIComponent($("#location").val()) : '+all';
			$salary_min = $("#salary_min").val() ? '+' + $("#salary_min").val() : '';
			$salary_max = $("#salary_max").val() ? '+' + $("#salary_max").val() : '';
            
			if($keyword){
				//console.log( url + '/' + $keyword + $function + $industry + $level + $location + $salary_min + $salary_max);
                
				window.location.href = url + '/' + $keyword + $function + $industry + $level + $location + $salary_min + $salary_max+str_query;
			} */
			
			$('.frJobSearch').submit();
	    };
        if(id=='change_number_page'){

            $("#"+id).change(search_job_handle);
        }
        else
		$("#"+id).bind('click',search_job_handle);
	};
	
	this.Reset = function(element,type){
		$(element).each(function(){
			if(type){
				this.reset();
			}
			$(element).find('.input input').val('');
			$(element).find('textarea').val('');
			
		});
		$('.js-select').selectbox("detach");
		$('.js-select').val('');
		$('.js-select').selectbox("attach");
	};
	
	//this.change_number_page = function(){
//		$("#change_number_page").change(function(){
//			var url = window.location.href;
//			var n = url.indexOf("?p=");
//			var value = $(this).val();
//			console.log(n);
//			if(n !== -1){
//				window.location.href = url+'&pz='+value;
//			}else{
//				window.location.href = url+'?pz='+value;
//			}
//			
//		});
//	};
    this.faq = function(){
    	var confirm_nav_ignore = [];	
    	function save_form_state($form) {
		    var old_state = $form.serialize();
		    $form.data('old_state', old_state);
		}
		// On load, save form current state
	    $('form').each(function() {
	        save_form_state($(this));
	    });
	    $('form').submit(function() {
	        save_form_state($(this));
	    });
    	function strip(form_data) {
	        for (var i=0; i<confirm_nav_ignore.length; i++) {
	            var field = confirm_nav_ignore[i];
	            form_data = form_data.replace(new RegExp("\\b"+field+"=[^&]*"), '');
	        }   
	        return form_data;
	    }
    	$(window).bind('beforeunload', function(e){
    		$('form').each(function() {
	            var $form = $(this);
	            var old_state = strip($form.data('old_state'));
	            var new_state = strip($form.serialize());
	            if (new_state != old_state) {
	                rv = true;
	            }   
	        }); 	    
	        if(rv==true){
	        	return 'Are you sure?';
	        }
		});
        $('.ab-question-form a.submit_faq').bind('click',function(){
           fullname =  $('.ab-question-form input[name="fullname"]').val();
           company= $('.ab-question-form input[name="company"]').val();
           email = $('.ab-question-form input[name="email"]').val();
           quest= $('.ab-question-form textarea[name="quest"]').val();
           captcha= $('.ab-question-form input[name="captcha"]').val();
           url = base_url+'faq/send_quest';
           $('.loading').show();
           $.post(url,{token:token,fullname:fullname,company:company,email:email,quest:quest,captcha:captcha},function(res){
                
                var box_alert = $('.ab-question-form #box_alert'); 
                if(res.st=='FALSE'){
                    if(res.error.length>0)
                    {   
						$('input[name="'+res.error[0].field+'"]').focus();
                        box_alert.show();
                        box_alert.removeClass('green');
                        box_alert.addClass('red');
                        first_error = res.error[0].txt;
                        box_alert.html(first_error);
                        $('#btRefresh').trigger('click');
                    }
                    
                }
                else if(res.st=='SUCCESS'){
                    box_alert.show();
                    box_alert.removeClass('red');
                    box_alert.addClass('green');
                    box_alert.html(res.txt);
					self.Reset("#faq_form",1);
					$('#fad-tk-popup-click').trigger('click');
					setTimeout(function(){
						box_alert.html('');
					},800);
					$('#btRefresh').trigger('click');
                }
                $('.loading').hide();
                
           },'json');
        });
        
    }
    this.list_client = function(){
        
    }
	this.save_jobs = function(){
		$(document).on('click', 'input.i-cv', function(){
			var $this= $(this);
			var data_upload= $this.data('upload');
			
			if($this.is(':checked'))
			{
				data_upload= (data_upload) ? 1 : 0;
				$('.btnSubmitApply').attr({'data-upload' : data_upload});
			}
			console.log(data_upload);
			//var data_type
		});
		$(".apply_jobs").live('click',function(){
			$this=$(this);
			$id = $this.data('id');
			$ycv=$this.data('ycv');
			$upload=$this.data('upload');
			$('.loading').show();
			$.post(
				base_url+'save_jobs',
				{token : token, id : $id, type : 'apply', ycv : $ycv, upload : $upload },
				function(data){	
					if(data.status){
						$('.loading').hide();		
						alert(data.txt);
					}else{
						alert(data.txt);
					}
					$('.loading').hide();
					location.reload();
				},'json'
			);
					

		});
		this.fancybox = function(html){
			$.fancybox([{
				padding: 0,
				margin: 0,
				centerOnScroll: true,
				content: html,
				closeBtn : false,
				scrolling : false,
				helpers : { overlay : { locked : true } }
			}]);	
		}	
        $(".sv_jobs").live('click',function(){
			$_this = $(this);
			$id = $(this).data('id');
			$type = $(this).data('type');
			var data_upload= $(this).data('upload');
			$ycv = 0;
			if($type == 'apply'){
				$ycv = $(".pop-choose-cv").find('input.iCheck:checked').val();
				if(!$ycv)
				{
					alert('Choose your exist CVs');
					return false;
				}
			}

			if($_this.hasClass('p_submit')){
				$_this.removeClass('p_submit');
				$('.loading').show();
				$.post(
					base_url+'save_jobs',
					{token : token, id : $id, type : $type, ycv : $ycv, upload : data_upload},
					function(data){	
						setTimeout(function(){
							//$(".fancybox").trigger('click');
						},2000);
						if(data.status){
							$_this.addClass('p_submit');
							$_this.remove();
							if($type == 'apply'){
								$(".apply_jobs").remove();
							}
							
							alert(data.txt);
							$.fancybox.close();
							// if(data.status == 1){
								// $(".pop_content").html(data.txt);
							
							// }else{
								// $(".pop_content").html(data.txt);
							// }
							
						}else{
							$(".pop_content").html(data.txt);
						}
						$('.loading').hide();
					},'json'
				);
			}
		});
    }
	this.delete_jobs = function(){
        $(".del_jobs").live('click',function(){
        	var $this = $(this);
        	var r = confirm("Are you sure you want to delete CV?");
			if (r == false) {
			    return false;
			}
			$_this = $(this);
			$id = $(this).data('id');
			$type = $(this).data('type');
			if($_this.hasClass('p_submit')){
				$_this.removeClass('p_submit');
				show_loading();
				$.post(
					base_url+'delete_jobs',
					{token : token, id : $id, type : $type},
					function(data){		
						hide_loading();			
						if(data.status){
							if($type =='job_alert'){
								notify = (lang == 'vi' ? 'Bạn đã xóa báo cáo công việc thành công.' : 'You have to delete the job report success.');
								$(".pop_content").html(notify);
							}else{
								notify = (lang == 'vi' ? 'Bạn đã xóa công việc thành công.' : 'You have successfully removed.');
								$(".pop_content").html(notify);
							}
							setTimeout(function(){
								$('#pu-upload-cv .note').hide();
								$(".fancybox").trigger('click');
								$this.parents('.tbl').remove();
							},800);
							$selectionData = 'delete_jobs';
						}
					},'json'
				);
			}
		});
    };
	
	this.download_now = function(){
        $("#download_now").click(function(){
			$_this = $(this);
			$id = $(this).data('id');
			if($_this.hasClass('p_submit')){
				$_this.removeClass('p_submit');
				$.post(
					base_url+'download_now',
					{token : token, id : $id},
					function(data){					
						if(data.status){
							window.location.href = base_url+'download-document';
							$_this.addClass('p_submit');
						}else{
							var title = (lang == 'vi' ? 'Thông báo' : 'Notify');
							$(".pu-upload-cv .note").html(title);
							$(".pop_content").html(data.txt);
							$selectionData = 'download';
							setTimeout(function(){
								$(".fancybox").trigger('click');
							},800);
						}
					},'json'
				);
			}
		});
    };
	
	this.cv_form_submit = function($id,class_type){
		$class_type = '';
		$class_type = class_type;
		$("#"+$id).submit(function(e)
		{
			var formObj = $(this);
			var formID = formObj.attr("id");
			var formURL = formObj.attr("action");
			$('.border_error').removeClass('border_error');
			/*formObj.hide();
			$("#"+$id).parent().find('.title').hide();
			$("#"+$id).parent().find('.g_btncv').hide();*/
			show_loading();
			//$("#"+$id).parent().find('.title').after("<img src='"+root+"assets/img/loading.gif' class='img_loading' width='124' height='124' />");
				//var formData = new FormData(formObj[0]);
				//$("#"+formID).find('input[type=file]').remove();
				// console.log("formData :" +formData+" formURL: "+formURL);
				$.post(
					formURL,
					$("#"+formID).serialize(),
					function(obj){
						setTimeout(function(){
							$("#"+$id).parent().find('.img_loading').remove();
							$("#"+$id).parent().find('.title').show();
							$("#"+$id).parent().find('.g_btncv').show();

							hide_loading();
							if(obj.status == 'SUCCESS'){



								$('.notice').removeClass('red');
								$('.notice').addClass('blue');
								if($id == 'form_work_experience' || $id == 'form_education' || $id == 'form_reference' || $id == 'form_skill_language' || $id == 'form_courses'){
									self.Reset("#"+$id);
									$id_type =  $class_type;
									
									if($class_type == 'language'){
										$(".ci_show_language").show();
									}

									$("#"+formID).find("#"+$id_type+"_id").val(0);
									$(".fr_"+$class_type+"_"+obj.id).remove();
									if(formID!='form_personal'){
										$('#'+formID+' input[type="text"]').val('');
										$('#'+formID+' textarea').val('');
									}
									setTimeout(function(){
										$('.notice').html('');
										$(".list_"+$class_type).prepend(obj.html);
										
										if(obj.your_cv_id){
											$("#"+formID).hide();
										}else{
											$("#"+formID).show();
										}
									},800);
									var txt_btn = lang == 'vi'?'THÊM MỚI':'ADD MORE';
									$("#"+$id).find('.submit_form').val(txt_btn);
								}else{
									//self.Reset("#"+$id,1);
									if($id == 'form_personal'){
										$(".list_personal").html('');
										var notify = (lang == 'vi' ? 'Thêm thông tin cá nhân thành công' : 'More info personal success');
										$('.'+obj.msg).html(notify);
										$('#personal-post').val('UPDATE');									
										$("#"+formID).find("#"+$class_type+"_id").val(obj.id);
										if(obj.id > 0){
											$("#"+formID).hide();
											//self.Reset("#"+$id);
											$(".list_personal").show();
										}else{
											$("#"+formID +' .js-select').each(function(index, val) {
												 $(this).selectbox('detach');
												 console.log($(this));
											});
											$("#"+formID).show();
											$("#"+formID +' .js-select').each(function(index, val) {
												 $(this).selectbox('attach');
											});
										}
										setTimeout(function(){
											$('.'+obj.msg).html('');
											$(".list_personal").append(obj.html);
											
										},2000);
									}
								}
								switch($id){
									case 'form_personal':
										$result.push("personal-"+obj.id);
										break;
									case 'form_work_experience':
										$result.push("work_experience-"+obj.id);
										break;
									case 'form_education':
										$result.push("education-"+obj.id);
										break;
									case 'form_skill_language':
										$result.push("skill_language-"+obj.id);
										break;
									case 'form_reference':
										$result.push("reference-"+obj.id);
										break;
									case 'form_courses':
										$result.push("courses-"+obj.id);
										break;
								}
								//console.log($result);
							}else{

								$("#"+formID).show();
								$('.notice').removeClass('blue');
								$('.notice').addClass('red');
								$.each(obj.error, function(key, value){
									$('#'+value.field).focus();
									$('#'+value.field).parent().addClass('border_error');
									$('.'+obj.msg).html(value.txt);
									return false;
								});
							}
						},1000);
					},'json'
				);
			e.preventDefault();
			$("#"+$id).unbind();
		});
		return false;
	};
	this.getDoc = function(frame) {
		var doc = null;
		// IE8 cascading access check
		try {
			if (frame.contentWindow) {
				 doc = frame.contentWindow.document;
			}
		} catch(err) {
		}

		if (doc) { // successful getting content
			 return doc;
		}

		try { // simply checking may throw in ie8 under ssl or mismatched protocol
			doc = frame.contentDocument ? frame.contentDocument : frame.document;
		} catch(err) {
			// last attempt
			doc = frame.document;
		}
		return doc;
	};
	this.all_cv = function($result){
		$('#file-type').change( function() {
		      $('#file-name').val($(this).val());
			var url= base_url+'upload_avatar';
			// var uid = $(this).attr("data-uid");
			var upload_data= {};
			upload_data['token'] = token;
			show_loading();
			$(this).upload(url,upload_data, function(data) {
				hide_loading();
				if(data.st=='SUCCESS'){
					$('#avatar_img').val(data.file);
					$('#load_avatar').attr('src',root+'uploads/tmp/'+data.file);
				} else {
					$('.notice').removeClass('blue');
					$('.notice').addClass('red');
					$('.personal_msg').html(data.txt);
					return false;
				}
			}, 'json');
			return false;
		});
		$("#save_cv").click(function(){

			$title = $("#title").val();
			$action = $(this).data('action');
			var flasg = self.check_val($result);
			if(flasg && $(this).hasClass('save_cv')){
				// $('.loading').show();
				$(this).removeClass('save_cv');
				show_loading();
				$.post(
					base_url+'save_cv',
					{token : token, result : $result, title : $title, action : $action},
					function(data){
						if(data.status){
							$result = [];
							$selectionData = 'all_cv_true';
							$(".pop_content").html(data.txt);
						}else{
							$selectionData = 'all_cv_false';
							$(".pop_content").html(data.txt);
						}
						hide_loading();
						// $('.loading').hide();
						setTimeout(function(){
							$(".fancybox").trigger('click');
						},200);
					},'json'
				);
			}else{
				$('#personal').find('.error').removeClass('error');
				$('#personal input[data-validate=required] , #personal select[data-validate=required]').each(function(index){
					var value = $(this).val();
					if(value == ''){
						if($(this).is('input')){
							$(this).parents('.input').addClass('error');
						}else{
							$(this).parents('.select').addClass('error');
						}
						$(this).focus();
						$('html, body').animate({
					        scrollTop: $(this).parents('.form-group').offset().top
					    }, 1000);
					    flag = false;
					    
						return false;
					}else{
						flag = true;
					}
				});

				if(flag){
					var text = lang == 'vi' ? 'Vui lòng nhập đầy đủ thông tin' : 'Please complete all information';
					$(".pop_content").html(text);
					setTimeout(function(){
						$(".fancybox").trigger('click');
					},200);
					$('html, body').animate({
				        scrollTop: $('#personal-post').offset().top-160
				    }, 1000);
				}
				
			}
		});
		
		$(".manipulation_sv").click(function(){
			var flasg = self.check_val($result);
			if(flasg){
				if($(this).data('type') == 'available'){
					$(".form_cv").show();
					$(".form_cv").parent().show();
					$(".hs_cv").show();
					$("#back_cv").hide();
					$(".list_personal").hide();
				}else{
					$array_check = ['education','skill_language','reference'];
					$.each( $array_check, function( key, value ) {
						if(value == 'skill_language'){
							if($(".list_skill_language").find('.pdbt18').contents().length == 0){
								$("#skill_language").hide();
							}
						}else{
							if($(".list_"+value).html() ==''){
								$("#"+value).hide();
							}
						}
					});
					$(".form_cv").hide();
					$(".hs_cv").hide();
					$("#back_cv").show();
					$(".list_personal").show();
				}
			}else{
				var text = lang =='vi' ? 'Vui lòng nhập đầy đủ thông tin' : 'Please complete all information';
				$(".pop_content").html(text);
				$('.pu-upload-cv .note').hide();
				setTimeout(function(){
					$(".fancybox").trigger('click');
				},800);
			}
		});
		
		$("#category").change(function(){
			if($(this).val()){
				$("#skill_language_post").data('type','');
				//self.load_category_skill_language($(this).val());
				if($(this).val() == 'Skills'){
					$("#skill_language_post").data('type','skill');
					$("#skill_language_reset").data('type','skill');
				}else if($(this).val() == 'Languages'){
					$("#skill_language_post").data('type','language');
					$("#skill_language_reset").data('type','language');
				}else {
					$("#skill_language_post").data('type','computer');
					$("#skill_language_reset").data('type','computer');
				}
			}
		});
		
		//submit form
		$(".submit_form").click(function(){
			$form = $(this).data('form');
			$class_type = $(this).data('type');
			self.cv_form_submit($form,$class_type);
			$("#"+$form).submit();
		});
		
		//reset form
		$(".reset_form").click(function(){
			$form = $(this).data('form');
			if($form !='form_personal'){
				self.Reset("#"+$form);
			}else{
				$("#"+$form).hide();
			}
			
			$class_type = $(this).data('type');
			console.log($class_type);
			$("#"+$class_type).find('.delete_item').show();
			$("#"+$class_type).find('.edit_item').show();
			if($(this).hasClass('p_edit')){
				$("#"+$form).find('#'+$class_type+'_id').val(0);
				$("#"+$form).hide();
				$("#"+$form).children('.g_btncv').show();
				if($class_type == 'skill' || $class_type == 'language' || $class_type == 'computer'){
					$("#skill_language").children('.g_btncv').show();
				}else{
					$("#"+$class_type).children('.g_btncv').show();
				}
				
			}
		});
		
		//add_new_cv
		$(".add_new_cv").live('click',function(){
			$id_form = $(this).data('form');
			if($id_form == 'form_personal'){
				$(".list_personal").hide();
			}
			$("#"+$id_form).show();
		});
		
		//edit_item
		$(".edit_item").live('click',function(){
			var $this = $(this);
			$id = $(this).data('id');
			$id_form = $(this).data('form');
			$("#"+$id_form).show();
			if($id_form != 'form_personal'){
				self.Reset("#"+$id_form);
				var txt_btn = lang == 'vi'?'CẬP NHẬT':'SAVE';
				$("#"+$id_form).find('.submit_form').val(txt_btn);
			}

			$class_type = $(this).data('type');
			$("#"+$class_type).find('.delete_item').show();
			$("#"+$class_type).find('.edit_item').show();
			$id_type =  $class_type;
			$("#"+$id_type+"_id").val($id);
			$(this).parent("#"+$id_type).find('.delete_item').show();
			$(this).parent("#"+$id_type).find('.g_btncv').hide();
			$(this).hide();
			$(this).next('.delete_item').hide();
			$("#"+$id_type).children('.g_btncv').hide();

			
			
			$("#"+$id_form+" .field_data").each(function(index ,value){

				
				if($id_form != 'form_personal'){
					$val = '';
					if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).length > 0){
						if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id')){
							$val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id');
						}else{
							$val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).html();
						}
						
						if($(this).is("select")){	
							$(this).selectbox("detach");
							$(this).val($val);
							$(this).selectbox("attach");
						}else{
							$(this).val($val.replace(/(<br>)/g, ""));
						}
						console.log($val);

					}
				}
			});

			$('html, body').animate({
		        scrollTop: $("#"+$id_form).offset().top-60
		    }, 1000);
		});
		
		//delete_item
		$(".delete_item").live('click',function(){
			var r = confirm("Are you sure you want to delete?");
			if (r == false) {
			    return false;
			}
			$_this = $(this);
			$id = $(this).data('id');
			$type = $(this).data('type');
			$cv = $(this).data('cv');
			if($_this.hasClass('p_submit')){
				$_this.removeClass('p_submit');
				show_loading();
				$.post(
					base_url+'delete_type_cv',
					{token : token, id : $id, type : $type, cv : $cv},
					function(data){	
						hide_loading();				
						if(data.status){
							$(".fr_"+$type+'_'+$id).remove();
						}else{
							$_this.addClass('p_submit');
						}
					},'json'
				);
			}
		});
	};
	this.check_val = function($result){
		console.log($result.length);
		if($result.length == 0){
			return false;
		}
		var flasg = false;
		var arr = new Array();
		$array_arr = ['personal','work_experience','education','skill_language','reference'];
		//$array_arr = ['personal','work_experience'];
		$.each( $result, function( key, value ) {
			$res_f  = value.split('-');
			if($res_f[0]){
				if($res_f[0] == 'personal' || $res_f[0] == 'work_experience'){
					arr.push($res_f[0]);
				}
			}
		});
		//console.log(arr);
		$.each( $array_arr, function( key_arr, value_arr ) {
			if($.inArray( value_arr, arr )){
				flasg = true;
			}else{
				flasg = false;
			}
		});
		return flasg;
	};
	this.check_max_create_cv = function(){
		var url = window.location.href;
		var get_url = url.indexOf('tim-kiem-viec-lam#fail_cv');
		if(url.indexOf('tim-kiem-viec-lam#fail_cv') != -1 || url.indexOf('search-job#fail_cv') != -1){
			$(".pu-upload-cv .f-bb").html('');
			$(".pop_content").html('');
			var text_title = lang == 'vi' ? 'Xin lỗi' : 'Sorry';
			$(".pu-upload-cv .f-bb").html(text_title);
			var text = lang == 'vi' ? 'Bạn chỉ được tạo tối đa 3 CV. Bạn không thể tạo CV được nữa.' : 'You only make maximum 3 CV. You cannot make CV.';
			$(".pop_content").html(text);
			setTimeout(function(){
				$(".fancybox").trigger('click');
			},800);
		}
	};
	this.load_type_language = function(is_language,elm){
		var $elm =elm;
		var $is_language = is_language;
		$.post(base_url+'load_type_language',{is_language:is_language,token : token}, function(data, textStatus, xhr) {
			$('#load_type_language').html(data);
			if($elm !=''){
				if($is_language == 1){
					$('#specify_name option[value='+$elm.html()+']').attr('selected','selected');
					$('#specify_name').selectbox();
				}else{
					$('#specify_name').val($elm.html());
				}
			}else if($is_language == 1){
				$('#specify_name').selectbox();
			}
		});
	}
	this.call_action_do = function(link_reidrect){
		switch($selectionData){
			case 'login':
				window.location.href = link_reidrect;
				break;
			case 'register':
				window.location.href = link_reidrect;
				break;
			case 'profile':
			case 'forgot':
			case 'delete_jobs':
				location.reload();
				break;
			case 'all_cv_true':
				window.location.href = base_url+(lang=='vi'?'cong-viec-cua-ban':'your-cv');
				break;
			case 'all_cv_false':
				window.location.href = window.location.href;
				break;
			case 'edit_job_alert':
				window.location.href = base_url+(lang=='vi'?'bao-cao-viec-lam':'job-alert');
				break;
			case 'none':
				break;
		}
	};
	this.load_city = function(){
		$(".country").change(function(){
			$val = $(this).val();
			$id = $(this).data('id');
			var $country_id = $(this).val();
			if($country_id == 'Vietnamese'){
				$.post(
					base_url+'load_city',
					{token : token, val : $country_id, id : $id},
					function(data){					
						if(data){
							if($id == 'province'){
								$(".select_personal").html(data);
							}else{
								$(".select_experience").html(data);
							}
							if($('.js-select').length > 0){
								$('.js-select').selectbox();
							}
						}
					}
				);
			}else{
				 $('#'+$id).selectbox("disable");
			}
		});
	};
	this.notification = function(){
		if($('#box_notification').length >0){
			// $('#box_notification ._body').jScrollPane({
			// 		autoReinitialise: true
			// 	});
			$.post(
				base_url+'view_notification',
				{token : token},
				function(data){					
					if(data.status==1){
						// res.counter = parseInt(res.counter);
						if( data.counter >0){
							$('.counter_ntf').show();
							$('.counter_ntf').html(data.counter);
						}
						$.post(
							base_url+'view_notification?view_more=true&from=0',
							{token:token},
							function(res){
								if(res.status==1){
									$('#box_notification ._body').html(res.html);
									$('#box_notification ._more').show();
								}
							},'JSON'
						);
					}
				},'JSON'
			);
		}
		$("#box_notification ._more a").bind('click',function(){
			var count_item = $('#box_notification ._body p').length;
			$.post(
						base_url+'view_notification?view_more=true&from='+count_item,
						{token:token},
						function(res){
							if(res.status==1){
								$('#box_notification ._body').append(res.html);
								// $('#box_notification ._more').show();
							}
							
						},'JSON'
					);
		});
	}
	this.redirect = function(url){
		window.location.href = url ? url : base_url;
	};
	this.load_category_skill_language = function($type,$level_id){
		$.post(
			base_url+'load_level',
			{token : token, type : $type},
			function(data){					
				if(data){
					$(".select_level").html(data);
					if($('.js-select').length > 0){
						$('.js-select').selectbox();
					}
					if($level_id){
						$("#form_skill_language .level").each(function(){
							$(this).selectbox("detach");
							$(this).val($level_id);
							$(this).selectbox("attach");
						});
					}
				}
			}
		);
		return false;
	};
	this.check_cv = function(){
		$(document).on('click','.btn_create_cv',function(){
			$this=$(this);
			$.post(
				base_url+'home/check_cv',
				{token : token , type:'create_cv'},
				function(data){					
					if(data.st=='success'){
						$selectionData = 'none';
						$(".pop_content").html(data.html);
						$(".fancybox").trigger('click');
					}else{
						window.location.href = $this.attr('href');
					}
				},'JSON'
			);
			return false;
		});
		$(document).on('click','.btn_upload_cv',function(){
			$this=$(this);
			
			$.post(
				base_url+'home/check_cv',
				{token : token , type:'upload_cv'},
				function(data){			
					if(data.st=='success'){
						$selectionData = 'none';
						$(".pop_content").html(data.html);
						$(".fancybox").trigger('click');
					}else{
						window.location.href = $this.attr('href');
					}
				},'JSON'
			);
			return false;
		});
	};
}
Page= new Page();
$(function(){
	Page.init();
});

function numberToCurrency(number, decimalSeparator, thousandsSeparator, nDecimalDigits){
    //default values
    decimalSeparator = decimalSeparator || '.';
    thousandsSeparator = thousandsSeparator || ',';
    nDecimalDigits = nDecimalDigits == null? 2 : nDecimalDigits;

    var fixed = number.toFixed(nDecimalDigits), //limit/add decimal digits
        parts = new RegExp('^(-?\\d{1,3})((?:\\d{3})+)(\\.(\\d{'+ nDecimalDigits +'}))?$').exec( fixed ); //separate begin [$1], middle [$2] and decimal digits [$4]
    if(parts){ //number >= 1000 || number <= -1000
        return parts[1] + parts[2].replace(/\d{3}/g, thousandsSeparator + '$&') + (parts[4] ? decimalSeparator + parts[4] : '');
    }else{
        return fixed.replace('.', decimalSeparator);
    }
}
function validate_number(evt) {
      var theEvent = evt || window.event;
      var keyCode = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode( keyCode );
      var regex = /[0-9]/;
      if( !regex.test(key) && keyCode!=8) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
}
function validate_email(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
function format_money(u){
    var v = u.value;
    if(u.value==''){

    }else{
    	v= v.replace(/,/g,'');
	    v= Number(v);
	    v = numberToCurrency(v,'.',',',0);
	    u.value = v;	
    }
    
}

function show_loading(){
	var img = "<img style='position:absolute;top:50%;left:50%;margin-left:-61px;margin-top:-61px;z-index:101' src='"+root+"assets/img/loading.gif' class='img_loading' width='124' height='124' />";
	var mask = '<div style="position:absolute;width:100%;height:100%;background-color:#000;opacity:0.2;top:0;left:0;z-index:100"></div>'
	var wrap = '<div id="mask" style="position:fixed;width:100%;height:100%;z-index:9999;top:0;left:0">'+mask+img+'</div>';
	$('body').append(wrap);
}
function hide_loading(){
	$('#mask').remove();
}
function scroll_to(name){
	$('html, body').animate({
        scrollTop: $(name).offset().top
    }, 1000);
}
