<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGN UP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="C:\xampp\htdocs\bt_html_signup\images\icons\favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_bootstrap_css_bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_fonts_font-awesome-4.7.0_css_font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_fonts_Linearicons-Free-v1.0.0_icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_fonts_iconic_css_material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_animate_animate.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_css-hamburgers_hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_animsition_css_animsition.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_select2_select2.min.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_vendor_daterangepicker_daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_css_util.css">
	<link rel="stylesheet" type="text/css" href="file _E _Do_an_tot_nghiep_Login_v13_css_main.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" type="text/css" href="main_custom.css">

</head>
	
	<?php 
	include('ketnoi.php');
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$fullname =$_POST["name"];
			$email = $_POST["email"];
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			$repeatpassword = $_POST["repeat-pass"];
 
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($fullname == "" and $email == "" and $username == "" and $password == "" and $repeatpassword == "") {
				   echo "";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where email='$email' or username='$username'";
					$kt=mysqli_query($conn, $sql);
				  	
					if(mysqli_num_rows($kt)  > 0){
						header('location: taikhoannaydatontai.php');
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
							fullname,
							email,
	    					username,
	    					password,
	    					repeatpassword
	    					) VALUES ('$fullname',
							'$email',
	    					'$username',
	    					'$password',
						    '$repeatpassword'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		header('location: chucmungbandangkythanhcong.php');
					}
									    
					
			  }
	}
	?>
<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image:url('images/hinh-nen-nha-dep-42.jpg')"> </div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="signup.php" method="post">
					<span class="login100-form-title p-b-59">
						Sign Up Your Account
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span> 
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btn_submit">
								Sign Up
							</button>
						</div>
						<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
							<button	on class="login100-form-btn">
						<a href="signin.php">
							Sign In
							
						</a>
						   </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_jquery_jquery-3.2.1.min.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_animsition_js_animsition.min.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_bootstrap_js_popper.js"></script>
	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_bootstrap_js_bootstrap.min.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_select2_select2.min.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_daterangepicker_moment.min.js"></script>
	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_daterangepicker_daterangepicker.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_vendor_countdowntime_countdowntime.js"></script>

	<script src="file _E _Do_an_tot_nghiep_Login_v13_js_main.js"></script>

</body>
</html>