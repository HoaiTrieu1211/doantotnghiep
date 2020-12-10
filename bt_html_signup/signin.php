<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGN IN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="http_colorlib.com_etc_lf_Login_v16_vendor_bootstrap_css_bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_fonts_Linearicons-Free-v1.0.0_icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_fonts_font-awesome-4.7.0_css_font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_vendor_animate_animate.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_vendor_css-hamburgers_hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_vendor_animsition_css_animsition.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_vendor_select2_select2.min.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_vendor_daterangepicker_daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_css_util.css">
	<link rel="stylesheet" type="text/css" href="https _colorlib.com_etc_lf_Login_v16_css_main.css">
	<link rel="stylesheet" type="text/css" href="custom1.css">

</head>
<body>
	
	<?php
	//Gọi file ketnoi.php ở bài trước
	include('ketnoi.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["dangnhap"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["pass"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" and $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				header('location: dangnhapkhongthanhcong.php');
			}else{
				while($row = mysqli_fetch_assoc($query))
				{
					if($row["username"] == "Adminitrator")
					{
						$_SESSION['User'] = $row["username"];
						$_SESSION['email'] = $row["email"];
						header('location: homeuiadmin.php');
					}
					else
					{
						$_SESSION['User'] = $row["username"];
						$_SESSION['email'] = $row["email"];
						header('location: homeui.php');
					}
				}
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				//$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là homeui.php
                //header('location:homeui.php');
			}
		}
	}
?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/2b7856deeff130baf1eb4414d5852b38.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="signin.php" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="dangnhap">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_jquery_jquery-3.2.1.min.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_animsition_js_animsition.min.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_bootstrap_js_popper.js"></script>
	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_bootstrap_js_bootstrap.min.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_select2_select2.min.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_daterangepicker_moment.min.js"></script>
	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_daterangepicker_daterangepicker.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_vendor_countdowntime_countdowntime.js"></script>

	<script src="https _colorlib.com_etc_lf_Login_v16_js_main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https _www.googletagmanager.com_gtag_js id=UA-23581568-13.com_gtag_js%20id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
