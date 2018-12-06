<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated'] == 1){ 

    
	$validationFlag = true; 
	//Check all the required fields are filled 
	if(!($_POST['DetailedAccount']))
	{ 
	echo 'All the fields marked as * are compulsory.<br>'; 
	$validationFlag = false; 
	} 

	else{ 
	$brief_account = $_POST['BriefAccount']; 
	$detailed_account = $_POST['DetailedAccount']; 
	$feedback=$brief_account."\r\n".$detailed_account;
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
	$query = "INSERT INTO feedback (id, feedback, date_of_feedback) VALUES ('".$_SESSION['userId']."','".$feedback."',CURRENT_DATE)";
	//Execute query 
	$results = mysql_query($query); 
 
	//Check if query executes successfully 
	if($results == FALSE) 
	echo mysql_error() . '<br>'; 
	else {
	echo 'Thank You For Your FeedBack! ';
	sleep(1.5);
	header('location:UIHome.php');}
	} 
} 
else
{ 
header('location:login.htm'); 
exit(); 
} 
?>
