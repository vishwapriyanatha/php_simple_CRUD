<?php
include('../index.php');

$user = $_POST["username"];
$pwd = $_POST["pwd"];
$pass = md5($pwd);



$sql = "SELECT * FROM user where username = '".$user."' and password = '".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	session_start();
	$row = $result->fetch_assoc();
	$_SESSION["username"] = $row["username"];
	header("Location:".$baseurl."/register/index.php");

} else {
	echo "please try again";
}
$conn->close();
?>