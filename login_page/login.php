<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="../images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<!-- <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script> -->
<body style="background-image: url('../images/extra/backwallpaper.jpg');">
		<div class="form-box" style="background-color:rgb(198, 183, 174);">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="login_user_data.php" method="post">
				<div class="inp">
					<img src="../images/icon/user.png"><input type="text" name="email" id="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="../images/icon/password.png"><input type="password" name="password" id="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn">Log In</button>
			</form>


			<div class="other" id="other">
				<div class="instead">
				</div>
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group" method="post" action="register_user_data.php">
				<input type="text" class="input-field" name="f_name" placeholder="Full Name" required="required">
				<input type="email" class="input-field" name="email" placeholder="Email Address" required="required">
				<input type="password" class="input-field" name="password" placeholder="Create Password" name="psame" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="psame" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn">Register</button>
			</form>
		</div>
		<script type="text/javascript" src="../script.js"></script>
</body>
</html>