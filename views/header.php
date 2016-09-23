<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>NATIONAL GUIDE</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="Web application, HR System" name="description" />
		<meta content="pingitgroup.com, Ping Information Technology Group" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="/public/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/public/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/fonts/style.css">
		<link rel="stylesheet" href="/public/css/main.css">
		<link rel="stylesheet" href="/public/css/main-responsive.css">
		<link rel="stylesheet" href="/public/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="/public/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="/public/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="/public/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="/public/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="/public/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="/public/plugins/bootstrap-social-buttons/social-buttons-3.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="/public/plugins/select2/select2.css" />
		<link rel="stylesheet" href="/public/plugins/DataTables/media/css/DT_bootstrap.css" />
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- font style-->
        <link href="/assets/font.css" rel="stylesheet" type="text/css">
        <!--end font style-->
		<!--<link rel="shortcut icon" href="/public/img/logo_ico.png"/>-->
	</head>
	<!-- end: HEAD -->
    <?php Session::init(); ?>
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="<?php echo URL;?>" style=" font-size: 30px;
                                            line-height: 36px;
                                            text-shadow: 1px 1px 0 #F2F2F2,1px 2px 0 #b1b1b2;
                                                                            
                                            color: #282828;
                                            text-shadow: 1px 1px 0 #f2f2f2,1px 2px 0 #b1b1b2;
                                            text-decoration: none;">
						<!--<img src="/public/img/logo_ico.png" height="40">--> &nbsp; NATIONAL GUIDE
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
                	<ul class="nav navbar-left">
                    	<li></li>
                    </ul>
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="/public/photosguide/<?php echo Session::get('s_photo'); ?>" class="circle-img" alt="" width="30">
								<span class="username"><?php echo Session::get('s_nameEn'); ?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo URL.'information/myprofiles';?>">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li>
                                <!--
								<li>
									<a href="pages_calendar.html">
										<i class="clip-calendar"></i>
										&nbsp;My Calendar
									</a>
								<li>
									<a href="pages_messages.html">
										<i class="clip-bubble-4"></i>
										&nbsp;My Messages (3)
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="utility_lock_screen.html"><i class="clip-locked"></i>
										&nbsp;Lock Screen </a>
								</li>-->
								<li>
									<a href="<?php echo URL.'homelogout/logout';?>">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
        <?php ?>
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li>
							<a href="<?php echo URL;?>"><i class="clip-home-3"></i>
								<span class="title"> Dashboard </span><span class="selected"></span>
							</a>
						</li>
                        
                        <li>
							<a href="<?php echo URL.'profiles';?>"><i class="clip-users"></i>
								<span class="title" style="font-family:DaunTeav;"> បញ្ចូលមគ្គុទេសក៏ថ្មី </span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-cog-2"></i>
								<span class="title" style="font-family:DaunTeav;"> ព័ត៌មានផ្សេងៗ </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="<?php echo URL.'information/province';?>">
										<span class="title" style="font-family:KhmerOSSiemreap;"> ខេត្ត/ក្រុង </span>
									</a>
								</li>
								<li>
									<a href="<?php echo URL.'information/languages';?>">
										<span class="title" style="font-family:KhmerOSSiemreap;"> ភាសា </span>
									</a>
								</li>
								<li>
									<a href="<?php echo URL.'information/nationality';?>">
										<span class="title" style="font-family:KhmerOSSiemreap;"> សញ្ជាតិ </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: STYLE SELECTOR BOX -->
							<!-- end: STYLE SELECTOR BOX -->
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="">
										Pages
									</a>
								</li>
								<li class="active">
                                <?php
									$url = isset($_GET['url']) ? $_GET['url'] : null;
			
										if(empty($url)){
											$url = '';
											
										$url = rtrim($url, '/');
										$url = filter_var($url, FILTER_SANITIZE_URL);
										$url = explode('/', $url);
								
											foreach($url as $folder => $file){
													echo $file;}
										}else{
											$url = rtrim($url, '/');
											$url = filter_var($url, FILTER_SANITIZE_URL);
											$url = explode('/', $url);
									
												foreach($url as $folder => $file){
													echo $file." / ";}
											}
								?>
								</li>
							</ol>
							<div class="page-header">
								<h1></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
                                        
					<!-- start: PAGE CONTENT -->