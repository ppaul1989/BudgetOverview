<?php
$uname = "";
$pword = "";
$errorMessage = "";
$num_rows = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$uname = htmlspecialchars($uname);
	$pword = htmlspecialchars($pword);
	if($uname == "pawel" && $pword == "pawel"){
		echo "Login ok";
		session_start();
		$_SESSION['login'] = "1";
		header ("Location: index.php");
	} else {
		header ("Location: login.php");
	}
}
