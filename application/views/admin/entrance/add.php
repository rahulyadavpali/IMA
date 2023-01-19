
	<aside class="right-side">
		<section class="content">
			<div class="breadcrumbs" id="breadcrumbs">
				<script type="text/javascript">try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}</script>
				<ul class="breadcrumb">
					<li><i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo base_url('admin/dashboard/'); ?>">Dashboard</a></li>
					<li class="active"><a href="<?php echo base_url('admin/entrance/'); ?>">Entrance Test - Detail</a></li>
					<li class="active">Add New Entrance Test</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header">
							<h1 class="box-title">Add New Entrance Test</h1>
						</div>
						<div class="box-body">
							<form role="form" name="PageFrom" action="<?php echo base_url('admin/entrance/saveResult'); ?>" method="POST" class="form-horizontal" id="validation-form" autocomplete="off" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-12">
										<div class="widget-box">
											<div class="widget-body">
												<div class="widget-main">
													<div class="space-2"></div>
													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="stream">Stream</label>
														<div class="col-xs-12 col-sm-6">
															<select class="form-control" id="stream" name="stream" required>
																<option value="">Stream</option>
																<option value="1">Medical</option>
																<option value="2">Engineering</option>
																<option value="0">Pre-Foundation</option>
															</select>
														</div>
													</div>
													<div class="space-2"></div>
													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="title">Title</label>
														<div class="col-xs-12 col-sm-6">
															<input type="text" id="title" name="title" required class="form-control" placeholder="Title for link" />
														</div>
													</div>
													<div class="space-2"></div>
													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="video_lnk">Video Link</label>
														<div class="col-xs-12 col-sm-6">
															<input type="text" id="video_lnk" name="video_lnk" class="form-control" placeholder="Paste video link here" />
														</div>
													</div>
													<div class="space-2"></div>
													<div class="form-group">
														<label for="pdf" class="control-label col-xs-12 col-sm-3 no-padding-left">PDF upload here</label>
														<div class="col-xs-12 col-sm-6">
															<input type="file" id="pdf" name="pdf" class="" />
														</div>
													</div>
													<div class="space-2"></div>
													<div class="form-group" style="text-align: right;margin-top: 30px;">
														<button class="btn btn-success btn-next" id="SubmitRes" name="SubmitRes" value="1" data-last="Finish">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="box-footer"></div>
					</div>
				</div>
			</div>
		</section>
	</aside>

	<script src="<?php echo base_url('library/admin/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('library/admin/js/jquery.dataTables.js'); ?>"></script>
	<script src="<?php echo base_url('library/admin/js/jquery.dataTables.bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('library/admin/js/bootbox.js'); ?>"></script>

	<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo base_url("library/admin/js/jquery.js");?>'>"+"<"+"/script>");
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url("library/admin/js/jquery.mobile.custom.js");?>'>"+"<"+"/script>");
	</script>
