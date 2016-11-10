<script type="text/javascript">
$(document).ready(function(){
	$('#btCalcSalary').bind('click',function(){
		$(".notice").html('');
		$(".notice").addClass('blue');
		$(".notice").removeClass('red');
		if($('input[name="max_salary"]').val()=='' ||  $('input[name="max_salary"]').val()==0){
			$(".notice").removeClass('blue');
			$(".notice").addClass('red');
			var title = (lang == 'vi' ? 'Chưa nhập lương tối đa' : 'Please insert max salary');
			$(".notice").html(title);
			return false;
		}
		if($('input[name="salary"]').val()=='' ||  $('input[name="salary"]').val()==0){
			$(".notice").removeClass('blue');
			$(".notice").addClass('red');
			var title = (lang == 'vi' ? 'Chưa nhập lương' : 'Please insert salary');
			$(".notice").html(title);
			return false;
		}
		
		document.salary_calc_form.submit();
	});
	$('#method_calc').change(function(){
		var txt = '<?=lang('Salary')?>';
		var method= $(this).find('option:selected').data('input');
		var lang ='<?=$this->uri->segment(1)?>';
		if(lang=='vi')
			txt = txt+ ' '+method;
		else txt = method +' '+txt;
		$('.text-salary').attr('placeholder',txt);
	});
	$('#method_calc').change();
});
</script>
<div class="ab-salary calculator signin">
    <form action="<?=PATH_URL_LANG.lang('link_cs_for_employer')?>" method="get" id="salary_calc_form" name="salary_calc_form">
				<div class="ab-salary-tt f-bb"><?=lang('hr_salary_calculator');?></div>
				<div class="ab-salary-calcu"><?=lang('salary_calculator_intro');?></div>
				<div class="ab-select">
					<div class="select">
						<select class="js-select" name="method" id="method_calc">
                            <option value="1" data-input='Gross' >Gross to Net</option>
							<option value="2" data-input='Net' >Net to gross</option>
						</select>
					</div>
					<div class="ab-select-text"><input class="special" type="text" name="max_salary" value="" placeholder="<?=lang('max_salary');?>" onkeypress="validate_number(event)" onkeyup="format_money(this)"/> <?=lang('vnd')?></div>
                    <div class="ab-select-text"><input class="special" type="text" name="trade_union" value="2" placeholder="Trade union" onkeypress="validate(event)" onkeyup="format_money(this)"/> %</div>
					<div class="ab-select-text"><input class="text-salary special" type="text" name="salary" value="" placeholder="<?=lang('Salary');?>" onkeypress="validate_number(event)" onkeyup="format_money(this)"/> <?=lang('vnd')?></div>
					<div class="ab-select-text"><input type="text" name="dependent" value="" placeholder="<?=lang('Number_dependents')?>" onkeypress="validate(event)"/></div>
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