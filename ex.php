
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
First Name: <input type="text" name="name" /></br>
Last Name: <input type="text" name="lname" /></br>
Username: <input type="text" name="uname" /></br>
Email: <input type="text" name="email1" /></br>
Confirm Email: <input type="text" name="email2" /></br>
Password: <input type="password" name="pass1" /></br>
Confirm Password: <input type="password" name="pass2" /></br>
<input type="submit" value="Register" name="submit" />
</form>


<?php

if(isset($_POST['submit_button']))
	{
		require_once 'login1.php';
	$conn = new mysqli($host,$user,$password,$db_name);
	
	if($conn->connect_error)die($conn->connect_error);
	
	
	
	
	{
	$query="insert into user(name,dlno,mob,pas) values('$fname','$dln','$mob','$pan')";
	
	
	$result=$conn->query($query);
	if(!$result)
	{
		die("database access failed....".$conn->error);
		
	}else{
echo"Sorry, your password is not corrext.";
exit();
}

}

} // brace for submit conditional
?>






