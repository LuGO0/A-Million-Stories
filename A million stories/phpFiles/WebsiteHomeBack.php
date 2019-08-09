<?php

if($_POST['submit']=="#1"){
	//redirect to about
	header('location:about.php');
}
else if($_POST['submit']=="#3"){
	//redirect to signup
	header('location:signUp.php');
}

else if($_POST['submit']=="#2"){
	//redirect to login
	header('location:login.php');
}


?>
