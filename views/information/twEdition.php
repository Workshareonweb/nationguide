<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.form_tw.txttw.focus();
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
											កែប្រែ ម៉ោងការងារ ទូទៅ
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
                                    <!--box login-->
                                    <div class="box-login">
										<form action="" role="form" id="form_twEdit" name="form_twEdit" method="post">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
												            ម៉ោងធ្វើការ
														</label>
														<input type="text" placeholder="ម៉ោង ធ្វើការ" class="form-control" id="txttw" name="txttw" tabindex="1" value="<?php echo $this->twtoEdit[0]['tw_time'];?>">
                                                        <input type="hidden" placeholder="twid" class="form-control" id="twid" name="twid" tabindex="3" value="<?php echo $this->twtoEdit[0]['tw_id'];?>">
													</div>
												</div>
												<div class="col-md-8">
													
                                                    <div class="form-group">
														<label class="control-label">
															Description
														</label>
														<input type="text" placeholder="Decription" class="form-control" id="tw_description" name="tw_description" tabindex="2" value="<?php echo $this->twtoEdit[0]['tw_des'];?>">
													</div>
												</div>
											</div>
										
											<div class="row">
												<div class="col-md-10">
													<p>
														
													</p>
												</div>
												<div class="col-md-2">
													<button class="btn btn-teal btn-block" type="submit" style="font-family:KhmerOSSiemreap;" id="btn-tw" name="btn-tw">
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
									តារាង ម៉ោងការងារ
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
												<th>ម៉ោងការងារ</th>
												<th class="hidden-xs">ពិពណ៌នា</th>
											</tr>
										</thead>
										<tbody>
                                       	<?php //var_dump($this->ListDepartment);
											@$a = 0;
									  		foreach($this->Listtimework as $key => $value) { 
											@$a++;	
											$id = $value['tw_id'];
										?>
                                        	<tr>
												<td><a href="<?php echo URL.'information/twEdition/'.@$id;?>"<button class="btn btn-info"><i class="clip-pencil-3"></i> Edit </button></a></td>
												<td class="hidden-xs"><?php echo @$a;?></td>
												<td><?php echo @$value['tw_time'];?></td>
												<td class="hidden-xs"><?php echo @$value['tw_des'];?></td>
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