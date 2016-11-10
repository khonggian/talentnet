<script type="text/javascript">
    $(document).ready(function(){
        $('#btSubmit').bind('click',function(){
           if($('input[name="max_salary"]').val()=='' ||  $('input[name="max_salary"]').val()==0){
           		var title = (lang == 'vi' ? 'Chưa nhập lương tối đa' : 'Please insert max salary');
                alert(title);
                return false;
           }
           if($('input[name="salary"]').val()=='' ||  $('input[name="salary"]').val()==0){
           		var title = (lang == 'vi' ? 'Chưa nhập lương' : 'Please insert salary');
                alert(title);
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
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-a">
			<div class="col-md-12">
				<div class="upload_cv">
					<h1 class="f-bb"><?=lang('hr_salary_calculator');?></h1>
					<div class="form-profile">
			            <form class="form-horizontal" role="form" method="get" id="salary_calc_form" name="salary_calc_form">
			            	<div class="form-group">
			                    <div class="lable salary">Net to Gross /<br />Gross to Net</div>
								<div class="select select_483 left">
									<select class="js-select" name="method" id="method_calc" >
										<option value="1" <?=(isset($method) && $method==1)?'selected="selected"':''?> data-input='Gross' >Gross to Net</option>
										<option value="2" <?=(isset($method) && $method==2)?'selected="selected"':''?> data-input='Net' >Net to Gross</option>
									</select>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable"><?=lang('max_salary')?></div>
								<div class="input">
									<input class="special" type="text" placeholder="Max Salary" name="max_salary" value="<?=isset($max_salary)?number_format($max_salary,0,'.',','):''?>" onkeypress="validate_number(event)" onkeyup="format_money(this)" />
									<?=lang('vnd')?>
								</div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group">
			                    <div class="lable">Trade union</div>
								<div class="input">
									<input class="special" type="text" name="trade_union" value="2" placeholder="Trade union" onkeypress="validate_number(event)" />
									%
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable"><?=lang('salary')?></div>
								<div class="input">
									<input class="text-salary special" type="text" placeholder="Salary" name="salary" value="<?=isset($salary)?number_format($salary,0,'.',','):''?>" onkeypress="validate_number(event)" onkeyup="format_money(this)" />
									<?=lang('vnd')?>
								</div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group">
			                    <div class="lable"><?=lang('num_of_dependents')?></div>
								<div class="input">
									<input type="text" placeholder="<?=lang('num_of_dependents')?>" name="dependent" value="<?=isset($dependent)?$dependent:''?>" onkeypress="validate_number(event)" />
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable btn">&nbsp;</div>
								<div class="mt8 mbt20 btn-form"><input type="button" value="<?=lang('submit_calc')?>" id="btSubmit" name="btSubmit" class="btn-update" />
								<div class="clearfix"></div>
			                </div>
			            </form>
				    </div>
				    <div class="row">
				    	<div class="col-md-1">
				    		
				    	</div>
				    	<div class="col-md-11">
                        <?php if(isset($board)){ ?>
                        	<p style="text-align:right;"><?=lang('unit')?>: VND</p>
						    <table>
						    	<tbody>
						    		<tr class="tt">
						    			<td class="salary_l"><span><?=lang('gross_salary')?></span></td><td class="salary_r"><span><?=number_format($board['gross'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('social_ins')?> (8%)</span></td><td class="salary_r"><span><?=number_format($board['social_ins_ee'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('health_ins')?> (1.5%)</span></td><td class="salary_r"><span><?=number_format($board['health_ins_ee'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('unemployment_ins')?> (1%)</span></td><td class="salary_r"><span><?=number_format($board['unemployment_ins_ee'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('income_tax')?></span></td><td class="salary_r"><span><?=number_format($board['personal_tax'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr class="tt">
						    			<td class="salary_l"><span><?=lang('total_deduction')?></span></td><td class="salary_r"><span><?=number_format($board['total_deduction'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr class="tt">
						    			<td class="salary_l"><span><?=lang('net_take_home')?></span></td><td class="salary_r"><span><?=number_format($board['net'],0,'.',',')?></span></td>
						    		</tr>
                                    <tr>
						    			<td class="salary_l"><span><?=lang('social_ins')?> (18%)</span></td><td class="salary_r"><span><?=number_format($board['social_ins_er'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('health_ins')?> (3%)</span></td><td class="salary_r"><span><?=number_format($board['health_ins_er'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span><?=lang('unemployment_ins')?> (1%)</span></td><td class="salary_r"><span><?=number_format($board['unemployment_ins_er'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr>
						    			<td class="salary_l"><span>Trade union</span></td><td class="salary_r"><span><?=number_format($board['trade_union'],0,'.',',')?></span></td>
						    		</tr>
						    		<tr class="tt">
						    			<td class="salary_l"><span><?=lang('employer_cost')?></span></td><td class="salary_r"><span><?=number_format($board['total_employer_cost'],0,'.',',')?></span></td>
						    		</tr>
						    	</tbody>
						    </table>
                    <?php } ?>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div style="display:none;">
	<div id="pu-upload-cv">
		<div class="pu-upload-cv">
			<a class="pu-upload-cv-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
			<h1 class="f-bb">thank you</h1>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<div class="txt-c"><a class="btn-ok f-bb" href="javascript:void(0);" title="">OK</a></div>
		</div>
	</div>
</div>