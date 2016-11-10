<script type="text/javascript">
    $(document).ready(function(){
        $('#btSubmit').bind('click',function(){
           if($('input[name="salary"]').val()=='' ||  $('input[name="salary"]').val()==0){
                alert('Chưa nhập lương');
                return false;
           }
           document.salary_calc_form.submit();
        });
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
					<h1 class="f-bb"><?=lang('cs_for_employee')?></h1>
					<div class="form-profile sac">
			            <form class="form-horizontal" role="form" method="get" id="salary_calc_form" name="salary_calc_form">
			            	<div class="form-group">
			                    <div class="lable salary"><span>Net to Gross /<br />Gross to Net</span></div>
								<div class="select select_483 left">
									<select class="js-select" name="method">
										<option value="1" <?=(isset($method) && $method==1)?'selected="selected"':''?>>Gross to Net</option>
										<option value="2" <?=(isset($method) && $method==2)?'selected="selected"':''?>>Net to Gross</option>
									</select>
								</div>
								<div class="clearfix"></div>
			                </div>
			                <div class="form-group">
			                    <div class="lable"><span><?=lang('salary')?></span></div>
								<div class="input">
									<input type="text" placeholder="<?=lang('salary')?>" name="salary" value="<?=isset($salary)?number_format($salary,0,'.',','):''?>" onkeypress="validate_number(event)" onkeyup="format_money(this)" />
								</div>
								<div class="clearfix"></div>
			                </div>
                            <div class="form-group">
			                    <div class="lable"><span><?=lang('num_of_dependents')?></span></div>
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