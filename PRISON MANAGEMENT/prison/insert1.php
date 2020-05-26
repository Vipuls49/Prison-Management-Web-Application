<!DOCTYPE html>
<html>
<head>
	<title>PRISONER'S DETAILS</title>
</head>
<body>
	<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','pro') or die('Unable To connect');
    $sql = "insert into pimage (pid,image) values('$_POST[reg]',?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
?>


	<p align="right"><a href="page.html">Log out.</a></p>
<form action="insert.php" method="post">
	<fieldset>
		<legend align="center" style="font-size: 30px;"><b>Insertion of Prisoner's Details</b></legend>

	<table cellspacing="10" cellpadding="10">
	
	<tr>
	<td><label for="name">Name of the Prisoner</label></td>
	<td><input type="text" name="name" style="width: 300px;height: 20px;" required></td>
	<td><label for="reg">Reg No.</label></td>
	<td><input type="text" name="reg" id="demo" readonly></td>
	<td><input type="button" value="Genrate" onclick="random()"></td>
	</tr>
	
	
	<tr>
	<td><label for="age">Age</label></td>
	<td><input type="number" name="age" required></td>
	<ensp>
	<td><label for="ent">Date of enterance</label></td>
	<td><input type="date" name="ent" required></td>
	</tr>

	
	<tr>
		<td><label for="dob">Date of birth</label></td>
		<td><input type="date" name="dob" required></td>
		
	
		<td>
			
			<label for="gender">Select gender</label></td>
			
			<td><input type="radio" name="gender" value="m" checked>
			<label for="male">male</label>
			<input type="radio" name="gender" value="f">
			<label for="female">female</label></td>
			
		</td>
			
	</tr>


	
	<tr>
	<td><label for="crime">Crimes</label></td>
		<td><textarea name="crime" id="crime" cols="30" rows="10" style="width: 300px;height: 70px;" required></textarea></td>
	<ensp>
	<td><label for="dur">Duration(in months)</label></td>
	<td><input type="number" name="dur" required></td>
	</tr>
	
	<tr>
	
	<td><label for="weight">Weight(in kgs)</label></td>
	<td><input type="number" name="weight" required></td>
	<ensp>
	<td><label for="height">Height(in cms)</label></td>
	<td><input type="number" name="height" required></td>
	</tr>
	

	<tr>
		<td><label for="wad">Address</label></td>
		<td><textarea name="wad" id="wad" cols="30" rows="10" style="width: 500px;height: 200px;" required></textarea></td>
		<ensp>

		<!-- <td><label for="pic">Criminal's Photo</label></td>
		<td><input type="file" name="pic" accept=".jpg,.jpeg" required></td> -->
		<td><form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
	</form></td>
	
	</tr>
	
	
	<tr>
	
	<tr>
		
		<td><label for="country">select country</label></td>
		<td><select name="country">
		<option value="in">India</option>
		<option value="usa">United States of America</option>
		<option value="chn">China</option>
		<option value="aus">Australia</option>
			</select>
		</td>

		<td><label for="state">select state</label></td>
		<td><select name="state">
		<option value="mh">maharashtra</option>
		<option value="goa">goa</option>
		<option value="up">uttar pradesh</option>
		<option value="ch">chandigadh</option>
			</select>
		</td>
			
			<!-- <td><label for="country">Country</label></td>
			<td><input type="text" name="country"></td>
			<ensp>
			<td><label for="state">State</label></td>
			<td><input type="text" name="state"></td>
		 -->
			
	</tr>

	<tr>
		<td><label for="law">Client's Lawyer</label></td>
		<td><input type="text" name="law" style="width: 250px;height: 20px;" ></td>
	</tr>

	<tr>
		<td><label for="fam">Family members</label></td>
		<td><textarea name="fam" id="fam" cols="30" rows="5" style="width: 250px;height: 70px;" ></textarea></td>
	

	
		<td><label for="mob">Relatives Mob No.</label></td>
		<td><textarea name="mob" id="mob" cols="30" rows="5"  style="width: 250px;height: 70px;" ></textarea></td>
	</tr>
<tr>
</tr>
<tr>
	<td>
		<emsp>
		<emsp>	
		</td>

		<td><emsp><ensp>
			
		</td>
	<td><input type="submit" value="SUBMIT" align="center" style="width: 150px;height: 50px;" align="center">
	</td>
</tr>

</table><!-- 
<input type="submit" value="SUBMIT" align="center" style="width: 120px;height: 30px;"> -->
<!-- <button name="submit" type="submit" value="submit" align="right" style="width: 120px;height: 30px;"></button> -->
</form>
</fieldset>

<script>
function random() {
  var x = Math.floor(1000 + Math.random() * 9000);;
  document.getElementById("demo").value = x;
}
</script>
</body>
</html>