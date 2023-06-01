 <?php
	
	$host = "localhost";
	$user = "root";
	$password = '';
	$db_name="apnicar";
	
	$con = mysqli_connect($host, $user, $password, $db_name);
	
	if(mysqli_connect_errno())
	{
		die("failed to connect mysql:".mysqli_connect_errno());
		
	
	}
	//	echo"connected succesfully";
		
		

?>

