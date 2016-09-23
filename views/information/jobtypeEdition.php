<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_jb.jobname.focus();
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
											កែប្រែ ប្រភេទការងារ
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
                                    <!--box login-->
                                    <div class="box-login">
										<form action="" role="form" id="form_jbEdit" name="form_jbEdit" method="post">
                                        
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
															ការងារជា
														</label>
														<input type="text" placeholder="Full/Part time" class="form-control" id="jobname" name="jobname" tabindex="1" value="<?php echo $this->jbtoEdit[0]['job_name'];?>">
                                                        <input type="hidden" placeholder="" class="form-control" id="jobid" name="jobid" tabindex="3" value="<?php echo $this->jbtoEdit[0]['job_id'];?>">
													</div>
												</div>
												<div class="col-md-8">
													
                                                    <div class="form-group">
														<label class="control-label">
															Description
														</label>
														<input type="text" placeholder="Decription" class="form-control" id="job_description" name="job_description" tabindex="2" value="<?php echo $this->jbtoEdit[0]['job_des'];?>">
													</div>
												</div>
											</div>
										
											<div class="row">
												<div class="col-md-10">
													<p>
														
													</p>
												</div>
												<div class="col-md-2">
													<button class="btn btn-teal btn-block" type="submit" style="font-family:KhmerOSSiemreap;" id="btn-jb" name="btn-jb">
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
									តារាង ប្រភេទការងារ
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
												<th>ប្រភេទការងារ</th>
												<th class="hidden-xs">ពិពណ៌នា</th>
											</tr>
										</thead>
										<tbody>
                                       	<?php //var_dump($this->ListDepartment);
											@$a = 0;
									  		foreach($this->Listjobtype as $key => $value) { 
											@$a++;	
											$id = $value['job_id'];
										?>
                                        	<tr>
												<td><a href="<?php echo URL.'information/jobtypeEdition/'.@$id;?>"<button class="btn btn-info"><i class="clip-pencil-3"></i> Edit </button></a></td>
												<td class="hidden-xs"><?php echo @$a;?></td>
												<td><?php echo @$value['job_name'];?></td>
												<td class="hidden-xs"><?php echo @$value['job_des'];?></td>
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