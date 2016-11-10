<select data-placeholder="Select foreign field" class="chosen span6 m-wrap" tabindex="-1" style="width:430px;" name="table_foreign_field" id="_table_foreign_field" require="true">
	<option value=""></option>
	<optgroup label="<?=$table?>">
		<?php
			if(!empty($table_fields))
			{
				foreach($table_fields as $row){
		?>
		<option value="<?=$row->name?>"><?=$row->name?></option>
		<?php
				}
			}
		?>
	</optgroup>
</select>	