<?php 
session_start();
require_once 'userserver.php';

function authenticate($user,$pass){

	global $userlist;

	if(($userlist[$user]['username'] == $user) && ($userlist[$user]['password'] == $pass)){
		return true;
	}
	else{
		return false;
	}

}


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if(authenticate($username,$password)){
	echo 'User is valid';
	$_SESSION['user'] = $username;
		header('Location: session_page1.php');
}
else {
	$_SESSION['message'] = 'Please enter valid user/password';
	header('Location: login.php');
}