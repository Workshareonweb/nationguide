<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_jobpos.posname.focus();
	}
</script>
					<!-- end: PAGE HEADER -->
                                        
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_edit_account" style="font-family:KhmerOSFreehand;">
											តួនាទី ឬមុខតំណែង បុគ្គលិក
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
                                    <!--box login-->
                                    <div class="box-login">
										<form action="" role="form" id="form_jobpos" name="form_jobpos" method="post">
                                        <!--<form action="<?php echo URL.'information/addEditPosition';?>" method="post">-->
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
												            Position/Function
														</label>
														<input type="text" placeholder="មុខតំណែង" class="form-control" id="posname" name="posname" tabindex="1">
                                                        <input type="hidden" placeholder="posid" class="form-control" id="posid" name="posid" tabindex="3">
													</div>
												</div>
												<div class="col-md-8">
													
                                                    <div class="form-group">
														<label class="control-label">
															Description
														</label>
														<input type="text" placeholder="Decription" class="form-control" id="pos_description" name="pos_description" tabindex="2">
													</div>
												</div>
											</div>
										
											<div class="row">
												<div class="col-md-10">
													<p>
														
													</p>
												</div>
												<div class="col-md-2">
													<button class="btn btn-teal btn-block" type="submit" style="font-family:KhmerOSSiemreap;" id="btn-pos" name="btn-pos">
														រក្សាទុក &nbsp;<i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
                                        <div class="error errorHandler no-display" style="font-family:KhmerOSSiemreap;">
                                            
                                        </div>
                                        </div><!--box login-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
                    <!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: DYNAMIC TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading" style="font-family:KhmerOSFreehand;">
									<i class="fa fa-external-link-square"></i>
									តារាង តួនាទី ឬមុខតំណែង
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr style="font-family:KhmerOSSiemreap;">
												<th>Action</th>
												<th class="hidden-xs">ល.រ</th>
												<th>តួនាទី ឬមុខតំណែង</th>
												<th class="hidden-xs">ពិពណ៌នា</th>
											</tr>
										</thead>
										<tbody>
                                       	<?php //var_dump($this->ListDepartment);
											@$a = 0;
									  		foreach($this->ListPosition as $key => $value) { 
											@$a++;	
											$id = $value['pos_id'];
										?>
                                        	<tr>
												<td><a href="<?php echo URL.'information/jobposEdition/'.@$id;?>"<button class="btn btn-info"><i class="clip-pencil-3"></i> Edit </button></a></td>
												<td class="hidden-xs"><?php echo @$a;?></td>
												<td><?php echo @$value['pos_name'];?></td>
												<td class="hidden-xs"><?php echo @$value['pos_des'];?></td>
											</tr>
                                            <?php }?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- end: DYNAMIC TABLE PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->