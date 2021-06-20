<?php
$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("sql6.freesqldatabase.com","sql6420135","iMMg3et3KE","sql6420135");
$sql = "select * from users where username='$u' and password='$p'";
// echo $sql; exit;
$rs = mysqli_query($db, $sql);

if (mysqli_num_rows($rs) > 0) {
	// code...
	// echo "dang nhap thanh cong";
	header("Location: poedwpoeiwporiwpoir0394rwrjwjrlwedswjerwijeroiwueroiuw8349848340598395834095rifrojcflsdkkjldsjfsd/index.php");
} else{
	echo "dang nhap that bai";
	require_once'login.html';
}
?>




	