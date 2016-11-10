<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<div class="form-profile">
			<div class="title">PERSONAL INFORMATION</div>
			<div class="clearfix"></div>
			<div class="list_personal mbt20">
			<!--append-->
			<?php if(!empty($result['personal'])){
				?>
			<div class="form-profile pdbt18 mt20">
				<div class="clearfix"></div>
				<div class="info_text">
					<div class="text_pf left">
						<div class="per_info parent_personal_<?=$result['personal']->id?>">
							<ul>
								<li><strong><?=lang('fullname');?>:</strong>  <?=$result['personal']->fullname?></li>
								<li><strong><?=lang('Birthday');?>:</strong> <?=date('d/m/Y',strtotime($result['personal']->birthday))?></li>
								<li><strong><?=lang('POB');?>:</strong>  <?=$result['personal']->place_of_brith?></li>
								<li><strong><?=lang('Nationlity');?>:</strong> <?=$result['personal']->nationlity?></li>
								<li><strong><?=lang('gender');?>:</strong> <?=$result['personal']->gender?></li>
								<li><strong><?=lang('Marital_status');?>:</strong> <?=$result['personal']->marital?></li>
								<li><strong><?=lang('email');?>:</strong>  <?=$result['personal']->email?></li>
								<li><strong><?=lang('home_phone');?>:</strong> <?=$result['personal']->home_phone?></li>
								<li><strong><?=lang('mobile');?>:</strong> <?=$result['personal']->mobile?></li>
								<li><strong><?=lang('address');?>:</strong> <?=$result['personal']->address?></li>
								<li><strong><?=lang('Country');?>:</strong> <?=$result['personal']->country?></li>
								<li><strong><?=lang('Location');?>:</strong> <?=$result['personal']->province?></li>
								<li><strong><?=lang('city');?>:</strong> <?=$result['personal']->city?></li>
								<li><strong><?=lang('Computer_Skill');?>:</strong> <?=$result['personal']->computer_skill?></li>
								<li><strong><?=lang('Skills');?>:</strong> <?=$result['personal']->other_skill?></li>
								
							</ul>
							<div class="clearAll"></div>
						</div>
					</div>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }?>
			</div>
        </div>

        <div class="form-profile mt30" id="work_experience">
			<div class="title left">WORK EXPERIENCE</div>
			<div class="clearfix"></div>
			<div class="list_work_experience mbt20">
			<!-- append -->
			<?php if(!empty($result['work_experience'])){
					foreach($result['work_experience'] as $work_experience){
			?>
			<div class="form-profile pdbt18 mt29 fr_work_experience_<?=$work_experience->id?>">
				<div class="clearfix"></div>
				<div class="info_text profile">
					<ul class="parent_work_experience_<?=$work_experience->id?>">
						<li><strong>Job title : </strong> <span class="work_experience_0"><?=$work_experience->title?></span> </li>
						<li><strong>Company name : </strong> <span class="work_experience_1"><?=$work_experience->company?></span></li>
						<li><strong>Industry : </strong><span class="work_experience_2"><?=$work_experience->industry?></span></li>
						<li><strong>Start date : </strong><span class="work_experience_3"><?=date('Y-m-d',strtotime($work_experience->from))?></span></li>
						<li><strong>End date : </strong><span class="work_experience_4"><?=date('Y-m-d',strtotime($work_experience->to))?></span></li>
						<li><strong>Description : </strong><span class="work_experience_8"><?=$work_experience->description?></span></li>
					</ul>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="form-profile mt30" id="education">
			<div class="title left">EDUCATION</div>
			<div class="clearfix"></div>

			<div class="list_education mbt20">
			<!-- append -->
			<?php if(!empty($result['education'])){
					foreach($result['education'] as $education){
			?>
			<div class="form-profile pdbt18 mt29 fr_education_<?=$education->id?>">
				<div class="clearfix"></div>
				<div class="info_text profile">
					<ul class="parent_education_<?=$education->id?>">
						<li><strong>Education type : </strong><span class="education_0"><?=$education->education_type?></span></li>
						<li><strong>Degree : </strong><span class="education_1" data-id="<?=!empty($education->degree_id)?$education->degree_id:0?>"><?=!empty($education->degree_id)?$education->degree_id:''?></span></li>
						<li><strong>Name of education : </strong><span class="education_2"><?=$education->education_name?></span></li>
						<li><strong>Major : </strong><span class="education_2"><?=$education->major?></span></li>
						<li><strong>Start date : </strong><span class="education_4"><?=date('Y-m-d',strtotime($education->from))?></span></li>
						<li><strong>End date : </strong><span class="education_5"><?=date('Y-m-d',strtotime($education->to))?></span></li>
						<li><strong>Achievement : </strong><span class="education_6"><?=$education->achievement?></span></li>
					</ul>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>
		
        
		<div class="form-profile mt30" id="education">
			<div class="title left"> COURSES</div>
			<div class="clearfix"></div>

			<div class="list_education mbt20">
			<!-- append -->
			<?php if(!empty($result['courses'])){
					foreach($result['courses'] as $courses){
			?>
			<div class="form-profile pdbt18 mt29 fr_courses_<?=$courses->id?>">
				<div class="clearfix"></div>
				<div class="info_text profile">
					<ul class="sub_info">
					<li><strong><?=lang('courses');?> : </strong><span class="courses_0"><?=$courses->name?></span></li>
					<li><strong><?=lang('training_company');?> : </strong><span class="courses_1"><?=$courses->training_company?></span></li>
					<li><strong><?=lang('time_duration');?> : </strong><span class="courses_2" data-id="<?=$courses->time_duration?>"><?=$courses->time_duration?></span></li>
				</ul>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="form-profile mt30" id="education">
			<div class="title left"> SKILLS &amp; LANGUAGES</div>
			<div class="clearfix"></div>

			<div class="list_education mbt20">
			<!-- append -->
			<?php if(!empty($result['skill_language'])){
					foreach($result['skill_language'] as $skill_language){
			?>
			<div class="form-profile pdbt18 mt29 fr_skill_language_<?=$skill_language->id?>">
				<div class="clearfix"></div>
				<div class="info_text profile">
					<ul class="sub_info">
					<li><strong><?=lang('name');?> : </strong><span class="skill_language_0"><?=$skill_language->name?></span></li>
					<li><strong><?=lang('Specify_name');?> : </strong><span class="skill_language_1"><?=$skill_language->specify_name?></span></li>
					<li><strong><?=lang('Level');?> : </strong><span class="skill_language_2" data-id="<?=$skill_language->level?>"><?=$skill_language->level?></span></li>
				</ul>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="form-profile mt30" id="reference">
			<div class="title left">REFERENCE</div>
			<div class="clearfix"></div>
			<div class="list_reference mbt20">
			<!-- append -->
			<?php if(!empty($result['reference'])){
					foreach($result['reference'] as $reference){
			?>
				<div class="form-profile pdbt18 mt29 fr_reference_<?=$reference->id?>">
					<div class="clearfix"></div>
					<div class="info_text profile">
						<ul class="parent_reference_<?=$reference->id?>">
							<li><strong>Name : </strong><span class="reference_0"><?=$reference->name?></span></li>
							<li><strong>Company : </strong><span class="reference_1"><?=$reference->company?></span></li>
							<li><strong>Title : </strong><span class="reference_2"><?=$reference->title?></span></li>
							<li><strong>Relationship : </strong><span class="reference_3"><?=$reference->relationship?></span></li>
							<li><strong>Email : </strong><span class="reference_4"><?=$reference->email?></span></li>
							<li><strong>Phone : </strong><span class="reference_5"><?=$reference->phone?></span></li>
						</ul>
						<div class="clearAll"></div>
					</div>
				</div>
			<?php }
			}
			?>
			</div>
        </div>
	</div>
</div>