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
	background-image : url("b1.jpg");
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
<h1 class="h" style="text-align:center">Profile</h1>

<form method="POST" action="profile_edit_back.php">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
<br><br>
<img class="pro" src="pr.jpg" alt="check">
  <br>
  <label>First Name -</label> <input type="text" name="fname" value="" size="45px"><br><br>
  <label>Last Name -</label> <input type="text" name="lname" value="" size="45px">
  <p>Gender -<input type="text" name="gender" value="" size="45px" style="margin-left:25px"></p>
  <p>Email - <input type="text" name="emailAdress" value="" size="45px" style="margin-left:27px">
  </p>
  <p> Phone No-  <input type="text" name="mobileNo" value="" size="45px" style="margin-left:8px"></p>
  <br>
  <button class="butt1" type="submit" value="submit" size="45px">Save Info.</button>
  <br><br>
</div>

</form>
</body>
<?php include 'footer.php' ?>
</html>

