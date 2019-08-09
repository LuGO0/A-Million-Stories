<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 


    $validationFlag = true; 
	//Check all the required fields are filled 
	if(!($_POST['Email']))
	{ 
	echo 'All the fields marked as * are compulsory.<br>'; 
	$validationFlag = false; 
	} 

	else{ 
	$Email = $_POST['Email']; 
	$Lname = $_POST['LName']; 
	$Fname = $_POST['FName']; 
	$Pass = $_POST['pass']; 
	$UserId = $_POST['UserId']; 
	$Pno = $_POST['PhoneNo']; 
	$gender=$_POST['gender'];
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
	
	$query="INSERT INTO users VALUES ('".$UserId."','".$Pno."','".$Email."','".$Fname."','".$Lname."',CURRENT_DATE,'".$gender."')";
	$trigger_query="INSERT INTO authentication VALUES('".$UserId."','".$Pass."')";

	$results = mysql_query($query); 
	$results2 = mysql_query($trigger_query); 
 
	//Check if query executes successfully 
	if($results == FALSE||$results2==FALSE) 
	echo mysql_error() . '<br>'; 
	else 
	echo 'Thank You For SignUp! '; 
	} 

	
	


?>
