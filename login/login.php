<?php
$user = '';
$pass = '';

if (isset($_POST['username'])&& isset($_POST['password'])){
	if (($_POST['username']== $user) && ($_POST['password']==$pass)){
	if(isset($_POST['rememberme'])){
	setcookie('username', $_POST['username'], time()+60*60^24*365);
    setcookie('password', md5($_POST['password']), time()+60*60^24*365);

	}
	else{
		setcookie('username', $_POST['username'], false);
		setcookie('password', md5($_POST['password']), false);
	}
	header ( 'Location: index1.php');

	}

	else{
    echo 'Username/Password Invalid';

	}

	else{
	echo 'You must supply a username and password.';
	
	}
}