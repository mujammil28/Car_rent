<html >
<header>
<marquee style="background-color:lightblue">&#128663 WELCOME TO OUR APNI CAR APPLICATION &#128663
</marquee>
</header>
<header style="text-align:center;"><b>MAIN &ensp; PAGE</b></header>
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


<form method="post" name="details" action="<?php echo $_SERVER['PHP_SELF'] ?>"><br>

<table>
<tr>
	<th></br>Maruti-Ertiga(8 seats)
	</th>
	<th></br>Toyota-Innova(8 seats)
	</th>
	<th></br>Kia-Carnival(8 seats)
	</th>
	<th></br>Chevrolet-Marazzo(8 seats)
	</th>
	<th></br>Renault-Triber(8 seats)
	</th>
	<th></br>Maruti-Eeco(8 seats)
	</th>
</tr>
<tr >
	<td style="border-style:double"><img src="ertiga.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="innova.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="kia.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="marazzo.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="triber.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="eeco.webp" height="150px" width="180px">
	</img></br>
	</td>
	
	
	
	
</tr>
</table>PRICE:
	<input type="radio" name="ertiga" value="1"><label>1200RS./DAY&emsp;&emsp;&emsp;
	<input type="radio" name="ertiga" value="1"><label>1200RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>1100RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>1100RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>1000RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>1000RS./DAY

<table>
<tr>
	<th></br>Maruti-Swift(5 seats)
	</th>
	<th></br>Maruti-Ciaz(5 seats)
	</th>
	<th></br>Kia-Seltos(5 seats)
	</th>
	<th></br>Renault-Kwid(5 seats)
	</th>
	<th></br>Maruti-Baleno(5 seats)
	</th>
	<th></br>Tata-tiago(5 seats)
	</th>
	
</tr>

<tr >
	<td style="border-style:double"><img src="swift.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="ciaz.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="seltos.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="kwid.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="baleno.webp" height="150px" width="200px">
	</img></br>
	</td>
	<td style="border-style:double"><img src="tiago.webp" height="150px" width="180px">
	</img></br>
	</td>
</tr>
</table>PRICE:
	<input type="radio" name="ertiga" value="1"><label>700RS./DAY&emsp;&emsp;&emsp;&emsp;
	<input type="radio" name="ertiga" value="1"><label>700RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
<input type="radio" name="ertiga" value="1"><label>600RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>600RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>600RS./DAY&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="ertiga" value="1"><label>500RS./DAY

<h1 style="border-style:double"> </h1>

<form method="post" name="details" action="<?php echo $_SERVER['PHP_SELF'] ?>"><br>
		 <h5>
		 <label style="margin-left:200px">*DAYS:
		 &emsp; &emsp;</label><input type="number" max="15" min="1" name="day" >
		&emsp; &emsp;&emsp; &emsp;&emsp;&emsp; <label style="margin-left:200px">*DATE:
		 </label><input type="date" name="date"  >
		</br></br> </br> 
		<label style="margin-left:200px">*FROM:
		&emsp;          </label><input type="text"  name="lname" placeholder="From..." >
		<label style="margin-left:200px">*TO:
		 </label><input type="text" name="dln" maxlength="16" placeholder="To...">
		</br></br> 		</br> 
		<label style="margin-left:200px">*EMAIL:
		&emsp; </label><input type="text" name="Eid" placeholder="Enter your email..">
		<label style="margin-left:200px">*MOB 
	</label><input type="text" name="pan"  maxlength="10" placeholder="Enter mob-no.."></br>
		 <button id="submit_button" name="submit_button" style="margin-left:470px;width:150px;background-color:lightgreen;" 
>submit</button></br></br></br>
 <button id="print" name="print" style="margin-left:470px;width:150px;background-color:lightblue;" 
>print</button>

</form>




<?php


?>



</html>