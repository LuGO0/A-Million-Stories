<html>

<head>
<title> AMS|Login </title>

  <style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
		 margin-left:550px;
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
         max-width: 600px;
    
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
	
}
body{
	background-image: url("b1.jpg");
}
</style>
</head>


<body> <?php include"header.php";?><br>
<br>
<br>
<h1 align="center" style="color:blue" >START WRITING</h1>
<form id="Auth" action="loginBack.php" method="POST">
<br>
<div class="fieldset-auto-width">
<br>
<legend align="center">LOG IN</legend>
<br>
<label for="id">Username </label><input type="text" name="id" value="" required="required"/></br></br>
<label for="id">Password </label><input type="password" name="pass" value="" required="required"/></br></br>
<input type="submit" name="reset" value="Submit" class="butt1"/>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="reset" name="reset" value="Reset" class="butt1" />
<br>
<br>
</div>
</form><br><br><br><br><br><br><br><br><br><br><br>
<?php include"footer.php";?>

</body>