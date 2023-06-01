 <html >
<header>
<marquee style="background-color:lightblue">&#128663 WELCOME TO OUR APNI CAR APPLICATION &#128663
</marquee>
</header>
<header style="text-align:center;"><b>ACCOUNT&emsp;SIGNUP</b></header>
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
<input type="text" style=";margin-top:15px;margin-left:500px" placeholder="search car...">
<button style="background-color:black;color:white;margin-top:15px;margin-left:1px"
onclick="window.location.href = 'types_page.php'">&#128269 </button>


</html>

</header>

<h3 style="text-align:center;">SIGNUP</h3>
		<h1 style="border-style:double"> </h1>
<form method="post" name="details" action="<?php echo $_SERVER['PHP_SELF'] ?>"><br>
		 <h5>
		 <label style="margin-left:200px">*NAME:
		 &emsp; &emsp;</label><input type="text" name="fname" placeholder="Enter your name..">
		 <label style="margin-left:200px">*D-O-B:
		 &emsp; &emsp;</label><input type="date" name="dob">
		</br></br> </br> 
		<label style="margin-left:200px">*ADRESS:
		&emsp;          </label><input type="text"  name="lname" placeholder="Enter your adress..">
		<label style="margin-left:200px">*DL-NO:
		 &emsp; &emsp;</label><input type="text" name="dln" maxlength="16" placeholder="Enter your DL number..">
		</br></br> 		</br> 
		<label style="margin-left:200px">*EMAIL:
		&emsp; &emsp;</label><input type="text" name="Eid" placeholder="Enter your email..">
		<label style="margin-left:200px">*PASS.  &emsp;
		 &emsp; </label><input type="text" name="pan"  maxlength="4" placeholder="create 4 digit password..">
		</br></br>   </br> 
		  <label  style="margin-left:200px">*MOB-NO:
		  &emsp; </label><input type="text"  name="mob" maxlength="10" placeholder="Enter your mob-no...">
		
		 <label style="margin-left:200px">*DIST:</label>
		 &emsp; &emsp;&emsp;<select name="list"><option selected disabled >-city-</option>
		  <option>A.NAGAR</option> <option>AKOLA</option>
		  <option>AURANGABAD</option><option>BEED</option> 
		  <option>CHANDRAPUR</option><option>DHULE</option> 
		  <option>JALNA</option><option>KOLHAPUR</option>
		  <option>LATUR</option> 
		  <option>MUMBAI CITY</option><option>NAGPUR</option> 
		  <option>NASHIK</option><option>OSMANABAD</option> 
		  <option>PUNE</option><option>SATARA</option> 
		  <option>SOLAPUR</option><option>WARDHA</option>
		  <option>YAVATMAL</option> </select>
		 </h5>
		 <button id="submit_button" name="submit_button" style="margin-left:500px;width:150px;background-color:lightgreen;" onclick="f1()" disabled>Activate</button>

</form>

</br></br>
<input type="checkbox" style="margin-left:200px;"  value="1" onclick="terms_changed(this)" ><b>
I have driving license and I have agreed all terms and conditions.</b>
<label style="color:blue" onclick="window.location.href = 'terms_page.php'">Read(TERMS)</label></BR>
<label style="center"><h4></h4></label>
</input>


<?php
	
	if(isset($_POST['submit_button']))
	{
		require_once 'login1.php';
	$conn = new mysqli($host,$user,$password,$db_name);
	
	if($conn->connect_error)die($conn->connect_error);
	
	
	
	$fname = $_POST['fname'];
	$dln = $_POST['dln'];
	$mob = $_POST['mob'];
	$pan = $_POST['pan'];
	
	if(!$fname=='' && !$dln=='' && !$mob=='' && !$pan=='')
	{
	$query="insert into user(name,dlno,mob,pas) values('$fname','$dln','$mob','$pan')";
	
	
	$result=$conn->query($query);
	if(!$result)
	{
		die("database access failed....".$conn->error);
		
	}
	else
	{
			echo("</br></br>DATA SUBMITED SUCCESSFULLY!!!!");
			
			header("Location:login_page.php");
			exit;
			
	}
	}
	else
	{
		echo'<span style="color:red">Enter all data!!!</span>';
		
	}
		
	}
	

?>






<script>
			var t1="";
		function terms_changed(tcb)
		{
			
			if(tcb.checked)
			{
				document.getElementById("submit_button").disabled=false;
			
				
			}
		else
		{
				document.getElementById("submit_button").disabled=true;
			
			
		}
			
			
		}		
		
		
		function f1()
			{		
					var x=document.details.fname.value;
					var x1=document.details.lname.value;
					var x2=document.details.dln.value;
					var x3=document.details.Eid.value;
					var x4=document.details.pan.value;
					var x5=document.details.mob.value;
					var x6=document.details.list.value;
					var x7=document.details.dob.value;
							
					if(!x==""&&!x1==""&&!x2==""&&!x3==""&&!x4==""&&!x5==""&&!x6==""&&!x7=="")
					{
					alert("HELLO "+x+" YOUR DATA SUBMITED SUCCESSFULLY,CLICK OK TO GO IN LOGIN PAGE!");
					
					}
					else{
						alert("Hello "+x+" Enter all details!!!");
					}
				
			}
</script>
</br></br>



</html>