<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated'] == 1){ 

    
	$validationFlag = true; 
	//Check all the required fields are filled 
	if(!($_POST['newPost']))
	{ 
	echo 'All the fields marked as * are compulsory.<br>'; 
	$validationFlag = false; 
	} 

	else{ 
	$newPost = $_POST['newPost']; 
	$userId=$_SESSION['userId'];
	}
    
    
	//If all validations are correct, connect to MySQL and execute the query 
	if($validationFlag){ 
	//Connect to mysql server 
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
	$query="INSERT INTO post VALUES('".$userId."',0,CURRENT_DATE,'".$newPost."')";
//Execute query 
	$results = mysql_query($query); 
 
	//Check if query executes successfully 
	if($results == FALSE) 
	echo mysql_error() . '<br>'; 
	else 
	echo 'Thank You For Your post! '; 
  header('location:UIHome.php');
	} 
} 
else
{ 
header('location:login.php'); 
exit(); 
} 
?>
