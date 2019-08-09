<html>
<head>
<style type="text/css">
    fieldset-auto-width {
         display: inline-block;
    }
	body{
	background-image : url("Images/b1.jpg");
}

.card {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
    max-width: 900px;
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
.h{
	color: black;
	font-size:40px;
	
}
</style>
</head>
<body>
<?php include 'header.php'?><br>
<?php include 'menubar.php'?> 
<br>
<br>

   
 <form id="feedback" action="contactUsBack.php" method="POST">
 <div class="card">
    <!--<fieldset class="fieldset-auto-width" style="margin-left: 220px;"> -->
	<br>
          <legend class="h" align=center >FeedBack</legend>
		  <br>
   <label for="type">Regarding</label>
   <select name="Type">
      <option value=" complaint">UI Complaints</option>
      <option value=" complaint">Reporting Bugs</option>

            <option value=" complaint">Suggesting Improvements</option>

            <option value=" complaint">Suggesting Features</option>

            <option value=" complaint">Any Other</option>
 
         </select>
  
        <br>

          <br>

          <label for="BriefAccount">Brief Account</label><br>

          <textarea name="BriefAccount" value="" rows="2" cols="100"></textarea><br>

         

          <br>
          <br>
    
      <label for="DetailedAccount">Detailed Account</label><br>

          <textarea name="DetailedAccount" value="Detailed Account" rows="16" cols="120"

required="required"></textarea>
          <br>
          <br>
         
 <input class="butt1" name="submit" value=" Submit FeedBack" type="submit">
 <br>
 <br>
      
  <!--</fieldset>-->
   
   </div>
   
 </form>
<?php include 'footer.php'?>
  </body>

</html>
