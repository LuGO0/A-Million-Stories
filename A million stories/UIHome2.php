<html>
<head>
</head>
<style>
.white-box{
     position: absolute;
     background-color: lightpink;
     color: black;
	 width:200px;
	 height:200px;
	 margin-top : 109px;
	 margin-left : 80px;
	 border-radius: 50px;
	 padding: 20px;
}
.white-box2{
background-color: lightgreen;
    color: black;
	 width:800px;
	 height:500px;
	 margin-left: 210px;
	 border-radius: 50px;
	 padding: 20px;   
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
	background:url("b1.jpg");
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
		echo "<img src='pr.jpg'/>";
	if($userInfo['gender']=='F')
		echo "<img src='pr2.jpg'/>";
	
	echo "<br/> ";
	echo $userInfo['first']." ".$userInfo['last']."<br/>"."@".$userInfo['id'];
		
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
    $count=0;
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
	
	if($count++==0)
	{
		$_SESSION['prevPostId']=0;
	}
	//Create Insert query 
	$query = "Select * from post where id='".$_SESSION['userId']."' OR id IN (Select user_id_admired from admirers where user_id_admirer='".$_SESSION['userId']."' AND post_id > '".++$_SESSION['prevPostId']."'
	)Limit 1" ;
	//Execute query 
	
	$results = mysql_query($query); 

	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
	$userInfo=mysql_fetch_array($results);
	$_SESSION['prevPostId']=$userInfo['post_id'];
	echo $userInfo['id'];
	echo $userInfo['date_of_post'];
	echo $userInfo['user_post'];
	
			

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
 <button class="butt1" type="submit">NEXT </button></form>
</div>

<div class="dropdown">
  <button class="dropbtn">REACT</button>
  <div class="dropdown-content">
    <a href="#">HAPPY</a>
    <a href="#">I WISH IT</a>
    <a href="#">SAD</a>
  </div>
</div>


</body>
</html>