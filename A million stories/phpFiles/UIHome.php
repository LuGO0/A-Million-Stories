<html>
<head>
</head>
<style>
.white-box{
     position: absolute;
     background-color: lightpink;
     color: black;
	 width:970px;
	 height:200px;
	 margin-top : 1px;
	 margin-left : 80px;
	 border-radius: 50px;
	 padding: 20px;
}
.white-box2{
	position :absolute;
background-color: lightgreen;
    color: black;
	 width:700px;
	 height:500px;
	 margin-left: 250px;
	 border-radius: 50px;
	 padding: 20px;
     margin-top:0px;	 
}
.butt{
position: relative;
    display: inline-block;
	
}
.butt1{
	background-color: #4CAF50;
    color: white;
    padding-top: 16px;
	padding-bottom : 16px;
	padding-left: 17px;
	padding-right:26px;
    font-size: 16px;
    border: none;
	margin-left : 810px;
}

body{
	background:url("Images/b1.jpg");
}


.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	margin-left : 810px;
}

.dropdown {
    position: relative;
    display: inline-block;
	
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	margin-left : 810px;
	
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	
}

.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
.butt:hover .butt1 {background-color: #3e8e41;};
</style>

<body>
<?php include 'header.php'?><br>
<?php include 'menubar.php'?>
<div class = "white-box" >
<?php
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated'] == 1){ 
    
	$validationFlag = true; 
	//Check all the required fields are filled 
	
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
	$query = "Select * from users where id='".$_SESSION['userId']."'";
	//Execute query 
	
	$results = mysql_query($query); 

	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
	$userInfo=mysql_fetch_array($results);
			
    if($userInfo['gender']=='M')
		echo "<img height='150px' width='150px' src='pr.jpg'/>";
	if($userInfo['gender']=='F')
		echo "<img height='150px' width='150px' src='pr2.jpg'/>";
	

	echo $userInfo['first']." ".$userInfo['last']."                         userID  "."@".$userInfo['id'];
		
	//echo 'Thank You For Your FeedBack! ';
	}
	} 

else
{ 
header('location:login.htm'); 
exit(); 
} ?>
<div>
<div class = "white-box2" >
<?php

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
	
	
	//Create Insert query 
	$query = "Select * from post limit 5";
	//Execute query 
	
	$results = mysql_query($query); 

	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
	while($userInfo=mysql_fetch_assoc($results)){
	//$_SESSION['prevPostId']=$userInfo['post_id'];
	echo $userInfo['id'];
	echo "<br><br>"."#DATE ";
	echo $userInfo['date_of_post'];
	echo "<br>";
	echo $userInfo['user_post'];
	echo "<br><br>";
	echo "<br/>";}
	
			

	}
	}
	}
	


else
{ 
header('location:login.htm'); 
exit(); 
} ?>
<div>


<div class = "butt">
<form method="POST" action="UIHome.php">
<input type="hidden" value="" name="postId">
 <button class="butt1" type="submit">NEXT </button></form>
</div>



</body>
</html>