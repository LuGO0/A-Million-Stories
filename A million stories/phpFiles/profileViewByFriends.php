 <html>
<head>
<style type="text/css">
.i{
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

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}

.h{
    font-style: italic;
	color: purple;
	
}
body{
	background-image : url("Images/b1.jpg");
}
.f{
	color: green;
}
</style>
</head>

<body>

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
	//Select database o
	$db = mysql_select_db('_DB'); 
	if(!$db){ 
	die("Unable to select database"); 
	} 
	//Create Insert query 
	$query = "Select * from users where id='".$_POST['id']."'";
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


<h1 class="h" style="text-align:center">Your Admiration motivates them..</h1>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
<br><br>
  <img class="i" src="pr2.jpg" alt="check">
  <h2 class="f">Name -<h2/><?php echo $userInfo['first']." ".$userInfo['last'] ?>
  <p class="f">Gender -<?php echo $userInfo['gender']?> </p>
  <p class="f">Gmail address -<?php echo $userInfo['mail']?>
  <br/></p>
  <h2 class="f"> Phone No :-<?php echo $userInfo['phone'] ?></h2>
  <br>
  
</div>
<br>
<?php include 'footer.php' ?>
</body>
</html>