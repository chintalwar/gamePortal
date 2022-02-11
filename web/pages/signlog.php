
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/web/assets/css/Singlogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
         include "../controller/signup.php";
		 include "../controller/signin.php";
?> 
<div class="container" id="container">
<div class="form-container sign-up-container">

<form method="POST" action="">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>

	<select  name="user_type" style="background-color: #eee;
										border: none;
										padding: 12px 15px;
										margin: 8px 0;
										width: 100%;" `	required>
		<option selected>Choose User type</option>
		<option value="admin">Admin</option>
		<option value="user">User</option>
	</select>
	<input type="text" name="name" placeholder="Name" required>
	<input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password" required>
	<input type="password" name="cpassword" placeholder="Confirm Password" required>
	<button type ="submit" name="submit">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form method ="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email" required>
	<input type="password" name="password" placeholder="Password" required>
	<a href="#">Forgot Your Password</a>
	<button type ="submit" name="singIn">Sign In</button>
	
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn" type ="submit" name="singIn">Sign In</button>
			<a href="../home.php"><button class="ghost">Back</button></a>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp" type ="submit" name="submit">Sign Up</button>
			<a href="../home.php"><button class="ghost">Back</button></a>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>








