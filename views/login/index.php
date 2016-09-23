<script language="javascript" type="text/javascript">
	window.onload = function() {
		document.login.username.focus();
	}
</script>
<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo">NATIONAL GUIDE
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your name and password to log in.
				</p>
				<form class="form-login" action="../" name="login" method="post">
					<div class="errorHandler no-display">
						<!--<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.-->
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i>
								</span>
						</div>
						<div class="form-actions">
							
							<button type="submit" class="btn btn-bricky pull-right" id="btn-login">
								Login &nbsp;<i class="fa fa-sign-in"></i>&nbsp;
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: LOGIN BOX -->