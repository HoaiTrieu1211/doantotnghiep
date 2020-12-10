<?php 
$link = new mysqli('localhost','root','','kungfuphp') or die('Kết nối thất bại');
if(isset($_GET['id']))
{
	$fullname = $_GET['id'];
	$query = "DELETE FROM users WHERE fullname='$fullname'";
	mysqli_query($link,$query) or die("Không thể xóa");
	header('location:account_management1.php');
}

?>