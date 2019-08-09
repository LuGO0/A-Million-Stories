<html>
<head>
</head>
<style>
.butt1{
	background-color: #4CAF50;
    color: white;
    padding-top: 16px;
	padding-bottom : 16px;
	padding-left: 17px;
	padding-right:26px;
    font-size: 16px;
    border: none;
	margin-left:550px;
	margin_top:5px;
}
botton{
	margin-left:2p;
}
body{
	background-image: url("Images/b1.jpg");
}

</style>
<body>
<?php include 'header.php'?><br>
<?php include 'menubar.php'?>
<a href="profileViewByFriends.php"><button class="butt1" > FRIENDS </button></a>
<br/><br/>

<?php
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
	//Select database o
	$db = mysql_select_db('_DB'); 
	if(!$db){ 
	die("Unable to select database"); 
	} 
	//Create Insert query 
	$query = "Select first,last,id from users,admirers where users.id=user_id_admired AND user_id_admirer='".$_SESSION['userId']."' LIMIT 5";
	//Execute query 
	
	$results = mysql_query($query); 
	
	
 	}

	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
		$i=0;
	while($userInfo=mysql_fetch_assoc($results))
	{
		
	   $friendfname[$i]=$userInfo['first'];
	   $friendlname[$i]=$userInfo['last'];
	   echo $friendfname[$i]."<br/>";
	   echo "<form method='POST' action='profileViewByFriends.php'>
	     <input type='hidden' value='".$userInfo['id']."' name='id'>
		 <button type='submit' value='submit'>Visit</button></form>";
	   $i++;
	
			

	//echo 'Thank You For Your FeedBack! ';
}
	}
}

else
{ 
header('location:login.htm'); 
exit(); 
} 
?>

<br><br>
<hr>
<a href="profileViewByNonFriends.php"><button class="butt1" > NON FRIENDS </button></a>
<br/>
<br/>
 

<?php
 
//Check if the user is authenticated first. Or else redirect to login page 
    
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
	//Select database o
	$db = mysql_select_db('_DB'); 
	if(!$db){ 
	die("Unable to select database"); 
	} 
	//Create Insert query 
	$query = "Select first,last,id from users,admirers where users.id=user_id_admirer AND users.id NOT IN (Select id from users,admirers where users.id=user_id_admirer AND user_id_admired='".$_SESSION['userId']."') LIMIT 5";
	//Execute query 
	
	$results = mysql_query($query); 
	
	
 	}

	//Check if query executes successfully 
	if($results == FALSE) {
	echo mysql_error(); 
}
	else 
	{
		$i=0;
	while($userInfo=mysql_fetch_assoc($results))
	{
		
	   $friendfname[$i]=$userInfo['first'];
	   $friendlname[$i]=$userInfo['last'];
	   echo $friendfname[$i]."<br/>";
	   echo "<form method='POST' action='profileViewByNonFriends.php'>
	     <input type='hidden' value='".$userInfo['id']."' name='id'>
		 <button type='submit' value='submit'>Visit</button></form>";
	   $i++;
	
			

	//echo 'Thank You For Your FeedBack! ';
}
	}



?>

	
<?php include 'footer.php' ?>
</body>
</html>