<html>
<head>
<style type="text/css">
.pro{
    border-radius: 50%;
	display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;
	vertical-align : -200px;
	
}
.card {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
    max-width: 500px;
    margin: auto;
    text-align: center;
	border-radius: 25px;
	background-color: lightblue;
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
	margin-left:0px;
}
a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}
button:hover, a:hover {
    opacity: 0.7;
}
body{
	background-image : url("Images/b1.jpg");
}
.h{
    font-style: italic;
	color: purple;
	
}
</style>
</head>
<body>
<?php include 'header.php' ?>
<br/>
<?php include 'menubar.php'?>
<?php
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


<h1 class="h" style="text-align:center" >Your Profile</h1>


<div class="card">
<br><br>
 <img class="pro" src="Images/pr.jpg" alt="check">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <h2><h2/> <?php echo $userInfo['first']." ".$userInfo['last'] ?>
  <p>Gender - <?php echo $userInfo['gender']?> </p>
  <p>Email - <?php echo $userInfo['mail']?>
  <br/> </p>
  <p> Phone No -<?php echo $userInfo['phone'] ?><p/>
  
  <a href="profile_edit.php"> Edit Your Profile </a>
  <br>

</div>

<?php include 'footer.php' ?>
</body>
</html>