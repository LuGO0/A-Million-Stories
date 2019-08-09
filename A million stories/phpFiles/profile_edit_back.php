 

<?php
include"header.php";
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated'] == 1){ 
   
	$validationFlag = true; 
	//Check all the required fields are filled 
	 
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
	$fname=$_POST['fname'];
		$lname=$_POST['lname'];
			$gender=$_POST['gender'];
			$emailAdress=$_POST['emailAdress'];
			$phone=$_POST['mobileNo'];
			


	
	//Create Insert query 
	$query = "update users set first='".$fname."',last='".$lname."',gender='".$gender."',mail='".$emailAdress."',phone='".$phone."' where id='".$_SESSION['userId']."'"; 
	//Execute query 
	
	$results = mysql_query($query); 
	
	
	
 
	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
	
}
	else 
	{
	
			

	echo 'Your info is updated! ';
	header('location:profile_view.php');
	}
	} 
}
else
{ 
header('location:login.htm'); 
exit(); 
} 

?>
