<script type="text/javascript">
$(document).ready(function(){
	$('#btCalcSalary').bind('click',function(){
		$(".notice").html('');
		$(".notice").addClass('blue');
		$(".notice").removeClass('red');
	   if($('input[name="trade"]').val()=='' ||  $('input[name="trade"]').val()==0){
			$(".notice").removeClass('blue');
			$(".notice").addClass('red');
            var title = (lang == 'vi' ? 'Chưa nhập lương' : 'Please inset trade union');
			$(".notice").html(title);
			return false;
	   }
	   document.salary_calc_form.submit();
	});
	/*$('#method_calc').change(function(){
		var txt = '<?=lang('Salary')?>';
		var method= $(this).find('option:selected').data('input');
		var lang ='<?=$this->uri->segment(1)?>';
		if(lang=='vi')
			txt = txt+ ' '+method;
		else txt = method +' '+txt;
		$('.text-salary').attr('placeholder',txt);
	});
	$('#method_calc').change();*/
});
</script>
<div class="ab-salary calculator">
    <form action="<?=PATH_URL_LANG.lang('link_cs_for_hr')?>" method="get" id="salary_calc_form" name="salary_calc_form">
		<div class="ab-salary-tt f-bb"><?=lang('salary_calculator');?></div>
		<div class="ab-salary-calcu"><?=lang('salary_calculator_intro');?></div>
		<div class="ab-select">
			<div class="select">
				<select class="js-select" id="method_calc" name="method">
					<option value="2" data-input='Gross'>Gross Salary</option>
					<option value="1" data-input='Net'>Net Salary</option>
					
				</select>
			</div>
			<div class="ab-select-text"><input type="text" class="text-trade special" style="" name="trade" value="2" placeholder="Trade Union" onkeypress="validate_number(event)" onkeyup="format_money(this)" /> %</div>
			<div class="ab-select-text"><input type="text" name="dependent" value="" placeholder="<?=lang('Number_dependents')?>" onkeypress="validate_number(event)" /></div>
			<div class="ab-salary-item">
				<div class="row">
					<div class="col-md-5"><a class="f-bb" href="javascript:void(0);" name="btCalcSalary" id="btCalcSalary" title=""><?=lang('calculate');?></a></div>
					<div class="clearAll"></div>
					<div class="mt10"></div>
					<div class="notice"></div>
					<!--<div class="col-md-7"><a href="javascript:void(0);" title=""><?=lang('Advanced_calculator');?></a></div>-->
				</div>
			</div>
		</div>
    </form>
</div>