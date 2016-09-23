<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_deptEdit.deptname.focus();
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
											កែប្រែ ដេប៉ាតេម៉ង់
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
                                    <!--box login-->
                                    <div class="box-login">
										<form action="" role="form" id="form_deptEdit" name="form_deptEdit" method="post">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
															Department Name
														</label>
														<input type="text" placeholder="Department Name" class="form-control" id="deptname" name="deptname" tabindex="1" value="<?php echo @$this->depttoedit[0]['deptname'];?>">
                                                        <input type="hidden" placeholder="deptid" class="form-control" id="deptid" name="deptid" tabindex="3" value="<?php echo @$this->depttoedit[0]['deptid'];?>">
													</div>
												</div>
												<div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            Description
                                                        </label>
                                                        <input type="text" placeholder="Decription" class="form-control" id="dept_description" name="dept_description" tabindex="2" value="<?php echo @$this->depttoedit[0]['dept_description'];?>">
                                                    </div>
												</div>
											</div>
										
											<div class="row">
												<div class="col-md-10">
													<p>
														
													</p>
												</div>
												<div class="col-md-2">
													<button class="btn btn-teal btn-block" type="submit" style="font-family:KhmerOSSiemreap;" id="btn-dept" name="btn-dept">
														កែប្រែ &nbsp;<i class="fa fa-arrow-circle-right"></i>
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
									តារាង ដេប៉ាតឺម៉ង់
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
												<th>ដេប៉ាតឺម៉ង់</th>
												<th class="hidden-xs">ពិពណ៌នា</th>
											</tr>
										</thead>
										<tbody>
                                       	<?php //var_dump($this->ListDepartment);
											@$a = 0;
									  		foreach($this->ListDepartment as $key => $value) { 
											@$a++;	
											$id = $value['deptid'];
										?>
                                        	<tr>
												<td><a href="<?php echo URL.'information/deptEdition/'.@$id;?>"<button class="btn btn-info"><i class="clip-pencil-3"></i> Edit </button></a></td>
												<td class="hidden-xs"><?php echo @$a;?></td>
												<td><?php echo @$value['deptname'];?></td>
												<td class="hidden-xs"><?php echo @$value['deptdescription'];?></td>
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