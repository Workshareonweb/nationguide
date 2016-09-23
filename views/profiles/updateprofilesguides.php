					<!-- end: PAGE HEADER -->
<script language="javascript" type="text/javascript">
    window.onload = function() {
        document.form_addng.fnamekh.focus();
    }
</script>
                                        
					<!-- start: PAGE CONTENT -->

					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_edit_account" style="font-family:KhmerOSFreehand;">
											មគ្គុទេសក៏ថ្នាក់ជាតិ ថ្មី
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
										<!--<form action="" role="form" id="form_addng" name="form_addng" method="post" enctype="multipart/form-data">-->
                                        <form action="<?php echo URL.'profiles/addEditguide';?>" role="form" name="form_addng" method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12">
													<h3>Profile Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
                                                    <div class="form-group">
														<label>
															Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="/public/photosguide/no_user_profile-pic.jpg" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file" name="ng_photos" id="ng_photos">
																</span>
																<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
                                                    <div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    អក្សរខាងមុខ
                                                                </label>
																<input type="hidden" placeholder="" id="idprefix" name="idprefix" class="form-control" value="TG">
                                                                <input type="text" placeholder="" id="idprefix" name="idprefix" class="form-control" value="TG" disabled>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    អត្តលេខមគ្គុទេសក៏/Licenced Number
                                                                </label>
                                                                <?php 
                                                                    @$mlcode = $this->maxlicencedcode[0]['Licencedid'];
                                                                    if($mlcode > 0){?>
                                                                    <input type="hidden" id="idnum" name="idnum" class="form-control" value="<?php echo @$mlcode + 1;?>">
                                                                    <input type="text" id="idnum" name="idnum" class="form-control" disabled value="<?php echo @$mlcode + 1;?>">     
                                                                 <?php   }else{?>
                                                                    <input type="hidden" id="idnum" name="idnum" class="form-control" value="<?php echo @$this->licencedcode[0]['nf_number'];?>">
                                                                    <input type="text" id="idnum" name="idnum" class="form-control" disabled value="<?php echo @$this->licencedcode[0]['nf_number'];?>"> 
                                                                <?php   }
                                                                ?>
																
															</div>
														</div>
													</div>
                                                    <div class="row">
														<div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    នាម (ខ្មែរ)
                                                                </label>
                                                                <input type="text" placeholder="" class="form-control" id="fnamekh" name="fnamekh" style="font-family:KhmerOSSiemreap;" tabindex="1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    គោត្តនាម (ខ្មែរ)
                                                                </label>
                                                                <input type="text" placeholder="" id="lnamekh" name="lnamekh" class="form-control" style="font-family:KhmerOSSiemreap;" tabindex="2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
														<div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    First Name (ឡាតាំង)
                                                                </label>
                                                                <input type="text" class="form-control" id="fnameen" name="fnameen" tabindex="3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Last Name (ឡាតាំង)
                                                                </label>
                                                                <input type="text" class="form-control" id="lnameen" name="lnameen" tabindex="4">
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="form-group">
														<label class="control-label">
															Email Address
														</label>
														<input type="email" placeholder="peter@example.com" class="form-control" id="email" name="email" tabindex="5">
													</div>
													<div class="form-group">
														<label class="control-label">
															Phone
														</label>
														<input type="text" placeholder="070-123-456" class="form-control" id="phone" name="phone" tabindex="6">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Date of Birth
														</label>
														<div class="row">
															<div class="col-md-3">
																<select name="dd" id="dd" class="form-control" >
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21" selected="selected">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-md-3">
																<select name="mm" id="mm" class="form-control" >
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10" selected="selected">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" placeholder="1982" id="yyyy" name="yyyy" class="form-control">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Gender
														</label>
														<div>
															<label class="radio-inline">
																<input type="radio" class="grey" value="F" name="gender" id="gender">
																Female
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="M" name="gender"  id="gender" checked="checked">
																Male
															</label>
														</div>
													</div>
                                                    <div class="row">
                                                    	<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Place of Birth
                                                                </label>
                                                                <select name="poblist" id="poblist" class="form-control">
                                                                	<option value="">.::Select::.</option>
                                                                    <?php 
																		foreach($this->provinceslist as $key => $value){?>
																		<option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
																		<?php }
																	?>
                                                                </select>
                                                            </div>
                                                        </div>
														<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Nationality
                                                                </label>
                                                                <select name="nationlist" id="nationlist" class="form-control">
                                                                	<option value="">.::Select::.</option>
                                                                    <?php 
																		foreach($this->nationalitylist as $key => $value){?>
																		<option value="<?php echo $value['nationid'];?>"><?php echo $value['nation_name'];?></option>
																		<?php }
																	?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Language
                                                                </label>
                                                                <select name="langlist" id="langlist" class="form-control">
                                                                	<option value="">.::Select::.</option>
                                                                    <?php 
																		foreach($this->Selectedlg as $key => $value){?>
																		<option value="<?php echo $value['id'];?>"><?php echo $value['name']." - ".$value['latin_name'];?></option>
																		<?php }
																	?>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                    	<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Location
                                                                </label>
                                                                <select name="loclist" id="loclist" class="form-control">                                                                	
                                                                    <?php 
																		foreach($this->locationlist as $key => $value){?>
																		<option value="<?php echo $value['locid'];?>"><?php echo $value['loc_name'];?></option>
																		<?php }
																	?>
                                                                </select>
                                                            </div>
                                                        </div>
														<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Guide Certified
                                                                </label>
                                                                <select name="guidecert" id="guidecert" class="form-control">
                                                                	<option value="1">Yes</option>
                                                                    <option value="0">No</option>                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    CV Provided
                                                                </label>
                                                                <select name="cvprovided" id="cvprovided" class="form-control">
                                                                	<option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                    	<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Guide Type
                                                                </label>
                                                                <select name="gtlist" id="locgtlistlist" class="form-control">                                                                	
                                                                    <?php 
																		foreach($this->guidetypelist as $key => $value){?>
																		<option value="<?php echo $value['gt_id'];?>"><?php echo $value['gt_name'];?></option>
																		<?php }
																	?>
                                                                </select>
                                                            </div>
                                                        </div>
														<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Behaviour Certified
                                                                </label>
                                                                <select name="behcert" id="behcert" class="form-control">
                                                                	<option value="1">Yes</option>
                                                                    <option value="0">No</option>                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                    Renewal Type
                                                                </label>
                                                                <select name="renewaltype" id="renewaltype" class="form-control">
                                                                	<option value="1">New</option>
                                                                    <option value="2">Renewal</option>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="form-group connected-group">
														<label class="control-label">
															Issued Date
														</label>
														<div class="row">
															<div class="col-md-3">
																<select name="ddisd" id="ddisd" class="form-control" >
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21" selected="selected">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-md-3">
																<select name="mmisd" id="mmisd" class="form-control" >
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10" selected="selected">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" placeholder="1982" id="yyyyisd" name="yyyyisd" class="form-control">
															</div>
														</div>
													</div>
                                                    <div class="form-group connected-group">
														<label class="control-label">
															Expiry Date
														</label>
														<div class="row">
															<div class="col-md-3">
																<select name="dded" id="dded" class="form-control" >
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21" selected="selected">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-md-3">
																<select name="mmed" id="mmed" class="form-control" >
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10" selected="selected">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" placeholder="1982" id="yyyyed" name="yyyyed" class="form-control">
															</div>
														</div>
													</div>	                                                    												
													<div class="form-group">
                                                        <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                            Current Address
                                                        </label>
                                                        <input type="text" placeholder="" class="form-control" id="txtaddress" name="txtaddress" style="font-family:KhmerOSSiemreap;">
                                                    </div>                                                    
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<hr>
												</div>
											</div>
											<div class="row">
												<div class="col-md-10">
													<p>
													</p>
												</div>
												<div class="col-md-2">
													<button class="btn btn-teal btn-block" type="submit" style="font-family:KhmerOSSiemreap;" id="btn-addguide" name="btn-addguide">
														រក្សាទុក <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form><br/>
                                        <div class="error errorHandler no-display" style="font-family:KhmerOSSiemreap;">
                                            
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->