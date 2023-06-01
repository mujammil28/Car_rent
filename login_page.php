<html>
<header>
<marquee style="background-color:lightblue">&#128663 WELCOME TO OUR APNI CAR APPLICATION &#128663
</marquee>
</header>
<header style="background-color:white;margin-left:550px;"><b>ACCOUNT&emsp;LOGIN</b></header>
<header style="background-color:black;height:50px">
<button style="background-color:black;color:white;margin-top:15px"
onclick="window.location.href = 'Car_(main_page).php'">HOME</button> 
<button style="background-color:black;color:white;margin-top:15px;margin-left:20px"
onclick="window.location.href = 'login_page.php'">RENT A CAR</button>
<button style="background-color:black;color:white;margin-top:15px;margin-left:20px"
onclick="window.location.href = 'types_page.php'">TYPES</button>
<button style="background-color:black;color:white;margin-top:15px;margin-left:20px"
onclick="window.location.href = 'help_page.php'">HELP</button>
<button style="background-color:black;color:white;margin-top:15px;margin-left:20px"
onclick="window.location.href = 'terms_page.php'">TERMS</button>
<input type="text" style=";margin-top:15px;margin-left:480px" placeholder="search car...">
<button style="background-color:black;color:white;margin-top:15px;margin-left:1px"
onclick="window.location.href = 'types_page.php'">&#128269 </button>
 	
<br>
	<form method="post" name="details" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<br>
		<h3 style="text-align:center;">LOGIN</h3>
		<h1 style="border-style:double"> </h1>
		<h6 style="text-align:center;">
		 <label style="">USER-NAME:</br></br>
		 &emsp; &emsp;</label>*<input type="text" name="fname" placeholder="Username...">
		</br></br> </br></br>
		<label style="">PASSWORD:</br></br>
		&emsp; </label>*<input type="password" id="pas" maxlength="4" name="pas" placeholder="password...">
		</br></br><label style="color:blue" 
		onclick="window.location.href = 'help_page.php'"><u>forgot password....</u></label> </br></br> 
		
		<input type="submit" style="width:100px;background-color:lightblue;" id="submit" name="submit">
		</input>&emsp;OR&emsp;
		
	   <input type="button"  style="width:101px;background-color:lightgreen;" 
	   onclick="window.location.href = 'signup_page.php'" value="signup">
	   </form>
		</h6>
		<h1 style="border-style:double"> </h1>
		<h5>*NOTE:</h5>
		<h6>1.If you dont have account dont worry click on SIGNUP button for creating new account.</h6>
		<h6>2.The user-name field indicates your name,you should have to fill your name in it.</h6>
		<h6>3.The password filed indicates your password,which is provided by server.</h6>
		<h6>4.the symbole of(*) is donated that you must have to fill the details.</h6>
		
	<?php
	
				
			require_once("login1.php");

		if(isset($_POST['submit']))
	{
		
	
	//if($conn->connect_error)die($conn->connect_error);
	
	
	
	$fname1 = $_POST['fname'];
	$pas = $_POST['pas'];
	
	$fname1 = stripcslashes($fname1);
	$pas = stripcslashes($pas);
	
	$fname=mysqli_real_escape_string($con, $fname1);
	$pas=mysqli_real_escape_string($con, $pas);
	
	$querry="SELECT *FROM user where name='$fname' and pas='$pas'";
	
	
	$result=mysqli_query($con, $querry);
	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count=mysqli_num_rows($result);
	
	if($count==1)
	{		
			
			
			header("Location:document_page.php");
			exit;
		
		
	}
	
	else
	{
	echo('<script>alert("WRONG USERNAME OR PASSWORD!!")</script>');
		
	}
	}
	
	
	?>




</html>