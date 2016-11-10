<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-dashboard.jpg" class="img-responsive" />
</div>

<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<nav>
            <ul class="nav navbar-nav">
                <li><a href="#" title="DASHBOARD" class="">DASHBOARD</a></li>
                <li class="option-2"><a href="#" title="CV-BUILDER">CV-BUILDER</a></li>
                <li class="option-3"><a href="#" title="ACCOUNT">ACCOUNT</a></li>
                <li class="option-4"><a href="#" title="SAVED JOBS">SAVED JOBS</a></li>
                <li class="option-5"><a href="#" title="APPLY JOBS">APPLY JOBS</a></li>
                <li><a href="#" title="LOGOUT">LOGOUT</a></li>
            </ul>
        </nav>
		<div class="menu-ab">
			<a href="javscript:void(0);" title="">Homepage</a><a href="javscript:void(0);" title="">Candidates</a><span class="active">Create CV</span>
		</div>
		
		<div class="form-profile">
			<div class="title">PERsonal information</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Full name</div>
					<div class="input">
						<input type="text" placeholder="Full name"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Gender</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Choose your gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Birthday</div>
                    <div class="input-group">
						<div class="select select_158 left">
							<select class="js-select">
								<option>Day</option>
								<?php
								for ($i=1; $i <= 31 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select">
								<option>Month</option>
								<?php
								for ($i=1; $i <= 12 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select">
								<option>Year</option>
								<?php
								for ($i=1980; $i <= 2030 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
                </div>

                <!-- <div class="form-group">
                    <div class="lable">Birthday</div>
                    <div class="date1 left">
						<div class="input date">
							<input type="text" placeholder="Your birthday" class="ip_date" />
						</div>
						<div class="date_icon"></div>
					</div>
					<div class="clearfix"></div>
                </div> -->
                <div class="form-group">
                    <div class="lable">Marital status</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Marital status</option>
							<option>Marital status</option>
							<option>Marital status</option>
							<option>Marital status</option>
							<option>Marital status</option>
							<option>Marital status</option>
							<option>Marital status</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Address</div>
					<div class="input">
						<input type="text" placeholder="Your address"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Phone</div>
                    <div class="gr_sl left">
						<div class="input input_50">
							<input type="text" placeholder="Full name"/>
						</div>
						<div class="input input_50">
							<input type="text" placeholder="Full name"/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Location</div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select class="js-select">
								<option>Choose your country</option>
								<option>Choose your country</option>
								<option>Choose your country</option>
								<option>Choose your country</option>
							</select>
						</div>
						<div class="select select_235 right">
							<select class="js-select">
								<option>Choose your city</option>
								<option>Choose your city</option>
								<option>Choose your city</option>
								<option>Choose your city</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Salary</div>
					<div class="input">
						<input type="text" placeholder="Salary"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Your avatar</div>
                    <div class="ip_file left">
						<input type="file" id="file-type" class="hide" />
						<div class="input file">
							<input type="text" id="file-name" />
						</div>
                    	<input type="button" id="browse-click" class="button-browse left" value="BROWSE"/>
                    </div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="UPDATE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="form-profile mt30">
			<div class="title">work experience</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Job title</div>
					<div class="input">
						<input type="text" placeholder="Job title"/>
					</div>
					<div class="clearfix"></div>
                </div>

                 <div class="form-group">
                    <div class="lable">Company<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Company name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Gender</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Industry of company</option>
							<option>Industry of company</option>
							<option>Industry of company</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Time<span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" placeholder="From" class="ip_date" />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" placeholder="To" class="ip_date" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Location<span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select class="js-select">
								<option>Choose your country</option>
								<option>Choose your country</option>
								<option>Choose your country</option>
								<option>Choose your country</option>
							</select>
						</div>
						<div class="select select_235 right">
							<select class="js-select">
								<option>Choose your city</option>
								<option>Choose your city</option>
								<option>Choose your city</option>
								<option>Choose your city</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Salary</div>
					<div class="input">
						<input type="text" placeholder="Salary"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Description</div>
					<div class="area left">
						<textarea placeholder="Description"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="ADD MORE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="form-profile mt30">
			<div class="title">EDUCATION</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">School/Program<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="School/Program"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Degree</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Choose degree level</option>
							<option>Choose degree level</option>
							<option>Choose degree level</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Major<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Major"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Location</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Location</option>
							<option>Location</option>
							<option>Location</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Time<span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" placeholder="From" class="ip_date" />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" placeholder="To" class="ip_date" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Achievement</div>
					<div class="area left">
						<textarea placeholder="Achievement"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="ADD MORE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="form-profile mt30">
			<div class="title">Skill &amp; Languages</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Category<span> *</span></div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Choose your skill &amp; languages</option>
							<option>Choose your skill &amp; languages</option>
							<option>Choose your skill &amp; languages</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Specify name</div>
					<div class="input">
						<input type="text" placeholder="Specify name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Level</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Level</option>
							<option>Level</option>
							<option>Level</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="ADD MORE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="form-profile mt30">
			<div class="title">Reference</div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="lable">Name<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Reference name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Company</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Company</option>
							<option>Company</option>
							<option>Company</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Title</div>
					<div class="select select_483 left">
						<select class="js-select">
							<option>Title</option>
							<option>Title</option>
							<option>Title</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Relationship<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Relationship"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Email<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Your email"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Phone<span> *</span></div>
					<div class="input">
						<input type="text" placeholder="Your phone"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form"><input type="button" value="ADD MORE" class="btn-update" />&nbsp;&nbsp;<input type="button" value="CANCEL" class="btn-update" /></div>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="group_btncv">
        	<a href="" class="btn_ left ">PREVIEW</a>
        	<a href="" class="btn_  spec left ">SAVE</a>
        	<a href="" class="btn_ left ">CANCEL</a>
        </div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>