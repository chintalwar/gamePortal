<?php

//database config file
 require_once "config.php";


if(isset($_POST['submit'])){

	$userType   = mysqli_real_escape_string($con,$_POST['user_type']);
	$username   = mysqli_real_escape_string($con,$_POST['name']);
	$email      = mysqli_real_escape_string($con,$_POST['email']);
	$password   = mysqli_real_escape_string($con,$_POST['password']);
	$cpassword  = mysqli_real_escape_string($con,$_POST['cpassword']);

	//Password Encription
	$Epass  = password_hash($password,PASSWORD_BCRYPT);
	$cpass  = password_hash($cpassword,PASSWORD_BCRYPT);

	//Check email exit or not qurey
	$emailquery = "SELECT * FROM `users` WHERE email = '$email' ";
	
	//to run the above query
	$query = mysqli_query($con,$emailquery);

	//cheack how many rows it will retrun
	$emailcount = mysqli_num_rows($query);

	if($emailcount >0 ){

		echo "EMAIL ALREADY EXITS";
	}else{
		if($password === $cpassword){
              
			//insert query for the table
			 $insertquery = "INSERT INTO `users`(user_type,name,email,password) 
			                 values('$userType','$username','$email','$Epass')";

			//to reflect data into database 
			$iquery = mysqli_query($con,$insertquery);
			
					if($iquery){
						?>
						<!-- <script>
							alert("REGISTERED SUCCESSFULLY :)");
							
						</script> -->
						<?php
					}else{
						?>
						<script>
							alert("REGISTRATION ERROR");
						</script>
						<?php
					}

		}else{
			?>
			    <script>
				    alert("PASSWORD NOT MATCHED");
				</script>
			<?php
			
		}
	}
}

?>

