					<!-- end: PAGE HEADER -->
                                        
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_edit_account" style="font-family:KhmerOSFreehand;">
											បុគ្គលិកថ្មី
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_edit_account" class="tab-pane in active">
										<form action="#" role="form" id="form">
											<div class="row">
												<div class="col-md-12">
													<h3>Account Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
                                                    <div class="form-group">
														<label>
															Image Upload
														</label>
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="/public/staffphotos/no_user_profile-pic.jpg" alt="">
															</div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file">
																</span>
																<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                អក្សរខាងមុខ
                                                            </label>
                                                            <input type="text" placeholder="WU" id="idprefix" name="idprefix" class="form-control">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label class="control-label" style="font-family:KhmerOSSiemreap;">
                                                                អត្តលេខបុគ្គលិក
                                                            </label>
                                                         <input type="text" placeholder="123" id="idnum" name="idnum" class="form-control">
                                                        </div><br/>
                                                    </div><br/>
													<div class="form-group">
														<label class="control-label" style="font-family:KhmerOSSiemreap;"><br/>
															ឈ្មោះ (ខ្មែរ)
														</label>
														<input type="text" placeholder="វឌ្ឍនា" class="form-control" id="txtnamekh" name="txtnamekh" style="font-family:KhmerOSSiemreap;">
													</div>
													<div class="form-group">
														<label class="control-label" style="font-family:KhmerOSSiemreap;">
															ឈ្មោះ (ឡាតាំង)
														</label>
														<input type="text" placeholder="Clark" class="form-control" id="txtnameen" name="txtnameen">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address
														</label>
														<input type="email" placeholder="peter@example.com" class="form-control" id="email" name="email">
													</div>
													<div class="form-group">
														<label class="control-label">
															Phone
														</label>
														<input type="email" placeholder="(070)-123-456" class="form-control" id="phone" name="phone">
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
																<input type="radio" class="grey" value="" name="gender" id="gender_female">
																Female
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="" name="gender"  id="gender_male" checked="checked">
																Male
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">
																	Zip Code
																</label>
																<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<label class="control-label">
																	City
																</label>
																<input class="form-control tooltips" placeholder="Phnom Penh" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<h3>Additional Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Twitter
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-twitter"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Facebook
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-facebook"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Google Plus
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-google-plus"></i> </span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Github
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-github-2"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Linkedin
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-linkedin"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Skype
														</label>
														<span class="input-icon">
															<input class="form-control" type="text" placeholder="Text Field">
															<i class="clip-skype"></i> </span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div>
														Required Fields
														<hr>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<p>
														By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
													</p>
												</div>
												<div class="col-md-4">
													<button class="btn btn-teal btn-block" type="submit">
														Update <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
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