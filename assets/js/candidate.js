function Candidate(){
	var self= this;
	
	this.init= function(){
		
	}
	
	this.job_search= function(){
		var $eventSelect = $('.job-select2');
		$eventSelect.select2({dropdownAutoWidth: 'true'});
		$('.select.overflow').removeClass('overflow');
		
		$eventSelect.on("select2:select", function (e) { 
			var $this= $(this);
			var value= $this.val();
			var $parent= $this.closest('.item');
			var tmp_value= $parent.find('option:contains('+e.params.data.text+')').val();
			
			if(tmp_value == -1)
			{
				$this.val(-1).trigger("change"); 
			}
			//console.log("select2:select", e.params.data.text); 

/* 			if(value)
			{
				$parent.attr({'data-select' : value.length});
				//console.log(value.length);
			}		 */		
		});
		
		$eventSelect.on("select2:change", function (e) { 
			// var $this= $(this);
			// var value= $this.val();
			// console.log('change');
			// if(value)
			// {
				// $parent.attr({'data-select' : value.length});
			// }				
		});		
		
		$eventSelect.on("select2:open", function (e) { 
			var $this= $(this);
			var value= $this.val();	
			if(value)
			{
				console.log('length', value.length);
			}
			
			if(value && value.length == 3)
			{			
				$('.select2-dropdown ul li').not(':first').attr({'aria-disabled' : true});
				$('.select2-dropdown ul li').not(':first').removeAttr('aria-selected');
			}
			
			// var $this= $(this);
			// var value= $this.val();
			// var $parent= $this.closest('.item');

			if(value && value[0] == -1)
			{
				$this.val('').trigger("change"); 
			}
		});
		
		$(document).on('change', '.frJobSearch select.job-select2', function(){
			var $this= $(this);
			var value= $this.val();
			var $parent= $this.closest('.item');
	/* 		console.log('Chosen 2'); */

			if(value && in_array(-1, value))
			{
		
				$this.find('option').prop('selected', false);
				$this.find('option:first-child').prop('selected', true);
				//$('.job-select2').trigger("change");
	
			}
			

			if(value)
			{
				$parent.attr({'data-select' : value.length});
			}				
			
		});		
	}
	
	this.select2_update= function(){	
		var $eventSelect = $('.job-select2');
		$eventSelect.select2("destroy");
		$eventSelect.select2({dropdownAutoWidth: 'true'});		
	}
}

Candidate= new Candidate();
$(function(){
	Candidate.init();
});