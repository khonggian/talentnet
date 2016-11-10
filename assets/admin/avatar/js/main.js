function Avatar(){
	var self= this;
	var $pan_zoom= $('#pan img');
	var $slider= $("#slider");
	var $avatar_large= $('#avatar-large');
	var avatar_large_width= 200;
	var $avatar_medium= $('#avatar-medium');
	var avatar_medium_width= 118;
	var $avatar_small= $('#avatar-small');
	var avatar_small_width= 28;
	var $upload= $('#upload');
	var $wrap_avatar= $('#popup-avatar');
	var url_avatar_done= base_url+'adminwz';
	
	this.init = function(avatar){
		self.avatar_load(avatar);	
	};
	
	this.avatar_init= function(){
		PointerEventsPolyfill.initialize({});
		var ul = $('#upload ul');
		$('#drop a').click(function(){
			// Simulate a click on the file input button
			// to show the file browser dialog
			$(this).parent().find('input').click();
		});
		var dropZone= (navigator.userAgent.match(/msie/i) ) ? $('#drop') : $('#pan');

		// Initialize the jQuery File Upload plugin
		$upload.fileupload({
			// This element will accept file drag/drop uploading
			dropZone: dropZone,
			// This function is called when a file is added to the queue;
			// either via the browse button, or via drag/drop:
			add: function (e, data) {
	
				var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
					' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');
				// Append the file name and file size
				// tpl.find('p').text(data.files[0].name)
							 // .append('<i>' + formatFileSize(data.files[0].size) + '</i>');
				// Add the HTML to the UL element
				data.context = tpl.appendTo(ul);

				// Initialize the knob plugin
				tpl.find('input').knob();

				// Listen for clicks on the cancel icon
				tpl.find('span').click(function(){
					if(tpl.hasClass('working')){
						jqXHR.abort();
					}
					tpl.fadeOut(function(){
						tpl.remove();
					});
				});
				// Automatically upload the file once it is added to the queue
				var jqXHR = data.submit();
			},

			progress: function(e, data){
				$('#drop').removeAttr('class');
				$('#wrap-text').hide();
				$('#drop').addClass('drop-loading');						
				// Calculate the completion percentage of the upload
				var progress = parseInt(data.loaded / data.total * 100, 10);
				if(progress == 100){
					data.context.removeClass('working');
				}
			},

			fail:function(e, data){
				// Something has gone wrong!
				data.context.addClass('error');
			},
			dataType: 'json',
			done: function (e, data) {
				$('#drop').removeClass('drop-loading');
				$('.ui-draggable').attr({'src':data.result.file});
				$slider.slider( "value", 0 );
			}
		});		
		
		// Prevent the default action when a file is dropped on the window
		$(document)
		.on('drop dragover', function (e) {
			e.preventDefault();
			$('#wrap-text').show();
			$('#drop').addClass('document-over');
		})
		.on('dragleave', function (e) {
			$('#wrap-text').hide();
		   $('#drop').removeClass('document-over');
		});	
		
		$wrap_avatar
		.on('drop dragover', function (e) {
			$('#wrap-text').show();
			$('#drop').addClass('drop-over');
		})
		.on('dragleave', function (e) {
			$('#wrap-text').hide();
			$('#drop').removeClass('drop-over');
		});				
		
		$pan_zoom.panZoom({
			'zoomIn'   		: 		$('#zoomin'),
			'zoomOut' 		: 		$('#zoomout'),
			'panUp'			:		$('#panup'),
			'panDown'		:		$('#pandown'),
			'panLeft'		:		$('#panleft'),
			'panRight'		:		$('#panright'),
			'fit'       	:   	$('#fit'),
			'destroy'   	:   	$('#destroy'),
			'out_x1'    	:   	$('#x1'),
			'out_y1'    	:   	$('#y1'),
			'out_x2'    	:   	$('#x2'),
			'out_y2'    	:   	$('#y2'),
			'directedit'	:   	false,
			'debug'     	:   	false,
			'mousewheel'	: 		false,
			'double_click'	: 		false
		});		
		
		$('#btn-resize').click(function(){
			Avatar.avatar_scale();
			$.post(
				url_avatar_done,
				{
					action	: 'post',
					type	: 'postSaveUserAvatar',
					token	: token,
					x1 		: $('#x1').val(),
					x2 		: $('#x2').val(),
					y1 		: $('#y1').val(),
					y2 		: $('#y2').val(),
					zoom 	: $slider.attr('data-zoom'),
					url		: $avatar_large.attr('src')
				},
				function(data){
					
				},'json'
			);
		});
		
		$slider.slider({
			min: 0,
			max: 50,
			range: 'min',
			animate: false,
			slide: function( event, ui ){
				var data = $pan_zoom.data('panZoom');
				var value= ui.value;
				$(this).attr({'data-zoom':value});
				Avatar.avatar_zoom(value);
			}
		});
		
		$avatar_large
		.mouseup(function() {
			$(this).removeClass('grabbing');
			$(this).addClass('grab');
		})
		.mousedown(function() {
			$(this).removeClass('grab');
			$(this).addClass('grabbing');
		});				
	};
	
	this.avatar_load= function(avatar){
		if(avatar){
			var avatar = window.eval('(' + avatar + ')');
			$('#drop').addClass('drop-loading');
			$('#x1').val(avatar.x1);
			$('#x2').val(avatar.x2);
			$('#y1').val(avatar.y1);
			$('#y2').val(avatar.y2);

			$pan_zoom.attr('src', avatar.url);
			$slider.slider("value", avatar.zoom);
			setTimeout(function(){
				var data = $pan_zoom.data('panZoom');
					data.position.x1 = avatar.x1;
					data.position.x2 = avatar.x2;
					data.position.y1 = avatar.y1;
					data.position.y2 = avatar.y2;
				$pan_zoom.panZoom('updatePosition');	
				setTimeout(function(){
					Avatar.avatar_scale();
					$('#drop').removeClass('drop-loading');
					$('#wpan').fadeIn();
				}, 500);			
			}, 500);
		}
	}
	
	this.avatar_zoom= function(value){
		var data = $pan_zoom.data('panZoom');
		if(zoom[value])
		{
			data.position.x1 = zoom[value].x1;
			data.position.x2 = zoom[value].x2;
			data.position.y1 = zoom[value].y1;
			data.position.y2 = zoom[value].y2;
			$pan_zoom.panZoom('updatePosition');		
		}
	}
	
	this.avatar_scale_load= function(avatar){
		var avatar = window.eval('(' + avatar + ')');
		if(avatar.url){
			var margin_y= 43;
			var margin_x= 10;
			var rate_medium= avatar_large_width / avatar_medium_width;
			var width_medium= (avatar.x2 - avatar.x1) / rate_medium;
			var height_medium= (avatar.y2 - avatar.y1) / rate_medium;
			var x_medium= (avatar.x1 - margin_x) / rate_medium;
			var y_medium= (avatar.y1 - margin_y) / rate_medium;
					
			var rate_small= avatar_large_width / avatar_small_width;
			var width_small= (avatar.x2 - avatar.x1) / rate_small;
			var height_small= (avatar.y2 - avatar.y1) / rate_small;
			var x_small= (avatar.x1 - margin_x) / rate_small;
			var y_small= (avatar.y1 - margin_y) / rate_small;		
	
			setTimeout(function(){
				$avatar_medium.attr({
					'xlink:href' 	: 	base_url+avatar.url,
					width			:	width_medium,
					height			:	height_medium,
					x				:	x_medium,
					y				:	y_medium
				});			
			
				$avatar_small.attr({
					'xlink:href' 	: 	base_url+avatar.url,
					width			:	width_small,
					height			:	height_small,
					x				:	x_small,
					y				:	y_small
				});			
			}, 500);
		}
	};
	
	this.avatar_scale= function(){
		var image= $avatar_large.attr('src');
		var margin_y= 43;
		var margin_x= 10;
		var rate_medium= avatar_large_width / avatar_medium_width;
		var width_medium= $avatar_large.width() / rate_medium;
		var height_medium= $avatar_large.height() / rate_medium;
		var x_medium= ($avatar_large.position().left - margin_x) / rate_medium;
		var y_medium= ($avatar_large.position().top - margin_y) / rate_medium;
		
		var rate_small= avatar_large_width / avatar_small_width;
		var width_small= $avatar_large.width() / rate_small;
		var height_small= $avatar_large.height() / rate_small;
		var x_small= ($avatar_large.position().left - margin_x) / rate_small;
		var y_small= ($avatar_large.position().top - margin_y) / rate_small;		
		
		setTimeout(function(){
			$avatar_medium.attr({
				'xlink:href' 	: 	image,
				width			:	width_medium,
				height			:	height_medium,
				x				:	x_medium,
				y				:	y_medium
			});
			
			$avatar_small.attr({
				'xlink:href' 	: 	image,
				width			:	width_small,
				height			:	height_small,
				x				:	x_small,
				y				:	y_small
			});				
		}, 500);			
	};
	
}
Avatar= new Avatar();
