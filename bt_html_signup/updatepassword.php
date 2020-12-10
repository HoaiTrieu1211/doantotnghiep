<form method="post">
Password mới: <input type="text" name="password" value="<?php $_GET['id'] ?>">
<input type="submit" name="update" value="Chấp nhận">

</form>
<?php
$link = new mysqli('localhost','root','','kungfuphp') or die('Kết nối thất bại');
if(isset($_POST['update']))
{
	$password = $_POST['password'];
	$fullname = $_GET['id'];
	$query = "UPDATE users SET password='$password' WHERE fullname='$fullname'";
	mysqli_query($link,$query) or die("Không thể cập nhật dữ liệu");
	header('location:account_management1.php');
}
?>