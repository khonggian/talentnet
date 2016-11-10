<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				FAQ
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url().LINK_ADMIN?>">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<span>FAQ</span>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
		<div class="span12">
			<div class="span3">
				<ul class="ver-inline-menu tabbable margin-bottom-10">
					<li class="active"><a href="#tab_1" data-toggle="tab"><i class="icon-th-list"></i> Module</a></li>
				</ul>
			</div>
			<div class="span9">
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<div class="accordion in collapse" id="accordion2" style="height: auto;">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_1">
										<span class="btn icn-only"><i class="m-icon-swapright"></i> Manage</span>
									</a>
								</div>
								<div id="collapse_2_1" class="accordion-body collapse in">
									<div class="accordion-inner">
										<ul>
											<li>
												<p>Thêm mới hoặc chỉnh sửa một module</p>
												<ul>
													<li><p>&nbsp;&nbsp;&nbsp;Module name: Tên của module</p></li>
													<li><p>&nbsp;&nbsp;&nbsp;Folder & Table: Folder của module và bạn phải đặt tên trùng với table của bạn.</p></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_2">
										<span class="btn icn-only purple"><i class="m-icon-swapright m-icon-white"></i> Manage Page list</span>
									</a>
								</div>
								<div id="collapse_2_2" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>Bạn sẽ cấu hình để ra được một trang danh sách - click  <a class="btn green">Add New</a></p>
										<p>- Sẽ có 2 option chính là <strong>Table primary</strong> và <strong>Table foreign </strong></p>
										<p>- <strong>Table primary:</strong> bạn sẽ chọn field từ table mà đã chọn trong phần Folder & Table
											<a href="<?=base_url().LINK_ADMIN_MODULE_EDIT?>" target="_blank" class="btn icn-only">
												<i class="m-icon-swapright"></i>
												 Manage
											</a>
										</p>
										<p>- <strong>Table foreign:</strong> bạn sẽ chọn Foreign field và Table foreign field</p>
										<p>&nbsp; > Foreign field: bạn phải nhập tên table Foreign field trong mysql thì field đó mới xuất hiện được trong danh sách select <img src="<?=base_url()?>assets/admin/img/faq/module/field-comment.jpg" alt="" /> <i class="icon-arrow-right"></i> <img src="<?=base_url()?>assets/admin/img/faq/module/foreign-field.jpg" alt="" /></p>
										<p>&nbsp; > Table foreign field: bạn sẽ chọn field từ bản foreign cần hiển thị <img src="<?=base_url()?>assets/admin/img/faq/module/tabel-foreign-field.jpg" alt="" /></p>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_3">
										<span class="btn icn-only blue"><i class="m-icon-swapright m-icon-white"></i> Manage Page edit</span>
									</a>
								</div>
								<div id="collapse_2_3" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>Click <a class="btn green mr5" title="Add New Field"><i class="icon-plus"></i> Add New Field</a></p>
										<p>Hiện tại hổ trợ 16 content type</p>
										<ul>
											<li>
												<h4>Content</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong> ]</code></li>
													<li><p>Chọn <strong>Required field</strong> nếu bắt buộc không được bỏ trống > chọn <strong>Field</strong> để lưu trong database.</p></li>
												</ul>
											</li>
											<li>
												<h4>Checkbox</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong> hoặc là VARCHAR tùy vào độ dài của value ]</code></li>
													<li><p>Dữ liệu sẽ được lưu với dạng <code>json_encode()</code> bạn sẽ cần nhập list value trong Data checkbox dưới dạng: key|value <i class="icon-arrow-right"></i> <img src="<?=base_url()?>assets/admin/img/faq/module/data-checkbox.jpg" class="mt5" alt="" /></p></li>
												</ul>
											</li>
											<li>
												<h4>Description</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong> ]</code></li>
												</ul>
											</li>
											<li>
												<h4>Datetimepicker</h4>
												<ul>
													<li><code>[ Type mysql <strong>DATETIME</strong> ]</code></li>
												</ul>
											</li>
											<li>
												<h4>File</h4>
												<ul>
													<li><code>[ Type mysql <strong>VARCHAR(64)</strong> ]</code></li>
												</ul>
											</li>
											<li>
												<h4>File Multiupload</h4>
												<ul>
													<li>Dữ liệu sẽ được lưu trong table file, tên hằng của table là <code>FILE_TB</code> gồm có 3 field key để lấy dữ liệu <strong><code>mid[Module ID]</code> <code>nid[Content ID]</code> <code>field[Field ID]</code></strong>.</li>
													<li>Bạn cũng có thể paste url youtube vào <code>input Youtube</code></li>
												</ul>
											</li>
											<li>
												<h4>Group</h4>
												<ul>
													<li>Dùng để group về mặt hiển thị giữa các field lại với nhau, có thể dùng với mục đích đa ngôn ngữ để group tiếng anh và tiếng việt <i class="icon-arrow-right"></i> <img src="<?=base_url()?>assets/admin/img/faq/module/group.jpg" alt="" /></li>
												</ul>
											</li>
											<li>
												<h4>Maps</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong>]</code></li>
													<li>Dữ liệu sẽ được lưu với dạng <code>json_encode()</code> bao gồm: (<strong>lat</strong>, <strong>lng</strong>, <strong>address</strong>)</li>
												</ul>
											</li>
											<li>
												<h4>Select</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong> hoặc <strong>VARCHAR</strong>]</code></li>
													<li>Nếu chọn <strong>Multiple field</strong> thì dữ liệu sẽ lưu <code>json_encode()</code>, mặc định sẽ lưu dưới dạng key value.</li>
												</ul>
											</li>
											<li>
												<h4>Select foreign table</h4>
												<ul>
													<li><code>[ Type mysql <strong>INT</strong> hoặc <strong>TEXT</strong> hoặc <strong>VARCHAR</strong>]</code></li>
													<li>Sẽ lưu id của table foreign table, nếu chọn <strong>Multiple field</strong> thì sẽ lưu <code>json_encode()</code> nhiều id của table foreign table.</li>
												</ul>
											</li>	
											<li>
												<h4>Select foreign table children</h4>
												<ul>
													<li>Tương tự như Select foreign table</li>
												</ul>
											</li>	
											<li>
												<h4>Slug</h4>
												<ul>
													<li><code>[ Type mysql <strong>VARCHAR(255)</strong>]</code></li>
													<li>Chọn <strong>Field to slug</strong> (Là nhưng field có content type là <strong>title</strong>) và chọn <strong>Field</strong> để lưu database.</li>
												</ul>
											</li>		
											<li>
												<h4>Radio</h4>
												<ul>
													<li><code>[ Type mysql <strong>TEXT</strong> hoặc là VARCHAR tùy vào độ dài của value ]</code></li>
													<li>
														<p>Dữ liệu sẽ được lưu với dạng <code>json_encode()</code> bạn sẽ cần nhập list value trong Data radio dưới dạng: key|value <i class="icon-arrow-right"></i> <img src="<?=base_url()?>assets/admin/img/faq/module/data-radio.jpg" class="mt5" alt="" /></p>
													</li>
												</ul>
											</li>	
											<li>
												<h4>Tags</h4>
												<ul>
													<li>Dữ liệu sẽ được lưu trong table tags_join, tên hằng của table là <code>TAGS_JOIN_TB</code> gồm có 3 field key để lấy dữ liệu <code>mid[Module ID]</code> <code>nid[Content ID]</code> <code>tid[Tags ID]</code>.</li>
												</ul>
											</li>	
											<li>
												<h4>Title</h4>
												<ul>
													<li><code>[ Type mysql <strong>VARCHAR(255)</strong>]</code></li>
												</ul>
											</li>	
											<li>
												<h4>Youtube</h4>
												<ul>
													<li><code>[ Type mysql <strong>VARCHAR(32)</strong>]</code></li>
													<li>Sẽ lưu ID của youtube khi paste đường link youtube vào <code>https://www.youtube.com/watch?v=BVc_YAJCemw</code> <i class="icon-arrow-right"></i> <code>BVc_YAJCemw</code></li>
												</ul>
											</li>											
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_4">
										<span class="btn icn-only green"><i class="m-icon-swapright m-icon-white"></i> Page list</span>
									</a>
								</div>
								<div id="collapse_2_4" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>List tất cả content từ table module.</li>
											<li>Bạn có thể review video youtube.</li>
											<li>Bạn có thể review maps.</li>
											<li>Bạn có thể review hình ảnh.</li>
											<li>Bạn có thể xuất export excel.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2_5">
										<span class="btn icn-only black"><i class="m-icon-swapright m-icon-white"></i> Page edit</span>
									</a>
								</div>
								<div id="collapse_2_5" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>Collapse file list <i class="icon-arrow-right"></i> <img src="<?=base_url()?>assets/admin/img/faq/module/collapse_filelist.jpg" alt="" /></li>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end span9-->                                   
		</div>
	</div>
	<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->	
<script>
$(function() {
	App.init();
	Admin.module();
});
</script>