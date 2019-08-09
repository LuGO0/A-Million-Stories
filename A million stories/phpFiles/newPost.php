<html>
<style>
body{
	background-image: url("Images/b1.jpg");
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
.tarea{
	margin-right:20px;
	margin-left:20px;
}
.c{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
    max-width: 1200px;
    margin: auto;
    text-align: center;
	border-radius: 25px;
	background-color: lightblue;
}

</style>
<body>
<?php include 'header.php'?><br>
<?php include 'menubar.php'?>
<div class="c">
<form name="createPost" action="newPostBack.php" method="POST">
<!-- <label for="postId">Post-Id</label>
          <input name="postId" value="" size="80" required="required" type="text">
          <label for="postId">Post-Id</label> -->
          <h1 style="margin-left:20px" style="margin-bottom:0px" >Express Yourself...</h1>
		  <h4 style="margin-left:30px" style="font-style:italic"> Tell your admirers a Story : </h4>
		  <textarea class="tarea" name="newPost" value="post by user" rows="16" cols="150" required="required"></textarea>
		  <br>
          <input class="butt1" name="submit" value="Share Post" type="submit">
	</form>
	</div>
	<?php include"footer.php";?>
</body>
</html>