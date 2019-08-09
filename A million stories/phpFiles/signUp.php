<html>
  <head>
    <style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
         margin-left: 300px;
		
		 
    }
	.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
    max-width: 500px;
    margin: auto;
    text-align: center;
	border-radius: 25px;
	background-color: lightblue;
}
h1 { font-family: cursive; 
     font-size: 24px; 
	 font-style: italic; 
	 font-variant: normal; 
	 font-weight: 700; 
	 line-height: 30px; }
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
.inp{
	border-radius: 2px;
}
body{
	background-image: url("Images/b1.jpg");
}

  </style>
  
  </head>
  <body> <?php include"header.php";?>
   <h1 align="center" > A Connection with Life </h1>
    <form id="SignUp" action="signUpBack.php" method="POST">
      <div class="card">
	     <br>
         <legend align="center">SIGN
            UP</legend> <br>
          <label for="FName">First Name &nbsp; </label> <input name="FName" value="" size="40" 
		         required="required" placeholder="First Name" type="text" class="inp">
          <br>
          <br>
          <label for="LName">Last Name &nbsp;&nbsp; </label> <input name="LName" value="" size="40" 
		         placeholder="Last Name" type="text"> 
          <br>
          <br>
          <label for="UserId">User-Id</label>
          &nbsp; &nbsp; &nbsp; &nbsp; 
		  <input name="UserId" value="" size="40" required="required" pattern="[A-Za-z]{1}[0-9]{4}" 
		  title="Exactly 5 Characters with first character as letter and all others as integers"
		  type="text">
          <br>
          <br>
          <label for="pass">Password &nbsp; &nbsp;&nbsp;</label> <input name="pass"

            value="" size="40" required="required" pattern="[A-Za-z0-9][^' ']{8,}"

            title="must contain more than 8 Characters with spaces not allowed"

            type="Password"><br>
          <br>
          <br>
          <label for="PhoneNo">Phone NO.</label> &nbsp;&nbsp; <input name="PhoneNo" value="" size="40" 
		         placeholder="Phone No. with country code" type="text">
		  &nbsp;&nbsp;<br><br>
		  <input type="radio" name="gender" value="M" checked> Male
          <input type="radio" name="gender" value="F"> Female<br>
          <br>
         
          <label for="Email">Email</label> &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp;&nbsp; <input name="Email" value="" size="40" required="required"

            type="Email">
          <br>
          <br>
		  <br>
		  
          <input class="butt1" name="submit" value=" Create An Account" type="submit"> 
		  <br>
		  <br>
      </div><br>
    </form>
	<?php include"footer.php";?>
  </body>
</html>
