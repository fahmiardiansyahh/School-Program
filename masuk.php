<!DOCTYPE html>
<?php
 require 'koneksi.php';
  if(!isset($_SESSION))
  session_start();
 
  if(isset($_POST['username']) && isset($_POST['password']))
  {
      if(trim($_POST['username']==""))
      $errorusername="Isikan username";
      if(trim($_POST['password']=="" ))
      $errorpassword="Isikan password";
      if(trim($_POST['username']!="") && trim($_POST['password']!="" ))
      {
        $userpost=addslashes($_POST['username']);
        $passpost= addslashes($_POST['password']);

        $exec=mysql_query("select * from pendaftar where id='$userpost'");
        $r=mysql_fetch_array($exec);
        $userfield=$r[2];
        $passfield=$r[3];
      
        if(mysql_num_rows($exec)<>0)
        {
          if($passfield==($passpost))
          {
            $_SESSION['username']=$userpost;
            $_SESSION['nama']=$r['nama'];
            $_SESSION['udahlogin']="Y";
            header("location:indexp.php");
          }
          else
          {
            $errorall="Login gagal!";
          }
        }
        else
          $errorall="Login gagal!";
      }
  }
  
  
?>
<html lang="en">
	<head>
		<title>Login</title>

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assetsp/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assetsp/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assetsp/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assetsp/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assetsp/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assetsp/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assetsp/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assetsp/js/html5shiv.min.js"></script>
		<script src="assetsp/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white" id="id-text2">Login Pendaftar</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy;2017. SD NEGERI 1 BOGOR</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Login Untuk Masuk
											</h4>

											<div class="space-6"></div>

											<form action="" method="post">
												<fieldset>
												  <span class="error" style="color:red"><?php  if(isset($_GET['code'])) echo "Anda berhasil logout!" ?><?php  if(isset($errorall)) echo $errorall ?><?php  if(isset($errorusername)) echo "* ".$errorusername ?></span>
            
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
														<span class="error" style="color:red"><?php if(isset($errorpassword)) echo "* ".$errorpassword ?></span>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
													

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

									
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="/baru/"  class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													Kembali Ke Beranda
												</a>
											</div>

										
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							<!-- /.forgot-box -->

							<!-- /.signup-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assetsp/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assetsp/js/jquery.1.11.1.min.js"></script>
<![endif]-->

	

		<!-- inline scripts related to this page -->
	
	</body>
</html>
