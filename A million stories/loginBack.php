<?php
session_start();

//check whether login successful or not if yes then start session 

$Id=$_POST['id'];
$Pass=$_POST['pass'];
$link = mysql_connect('localhost', 'root', ''); 
	//Check link to the mysql server 
	if(!$link){ 
	die('Failed to connect to server: ' . mysql_error()); 
	} 
	//Select database 
	$db = mysql_select_db('_DB'); 
	if(!$db){ 
	die("Unable to select database"); 
	} 
	//Create Insert query 
	$query = "Select id,pass from authentication where id='".$Id."' AND pass='".$Pass."'";
	//Execute query 
	
	$results = mysql_query($query); 
	
	
 
	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
	$userInfo=mysql_fetch_array($results);
	if(($Id==$userInfo['id'])&&($Pass==$userInfo['pass'])){

$_SESSION['userId']=$_POST['id'];
$_SESSION['isAuthenticated']=1;

header("location:UIHome.php");
}
else{
//else redirect to the login page
header("location:login.php");
die();
}
			

	//echo 'Thank You For Your FeedBack! ';
	}
	 


//--
?>