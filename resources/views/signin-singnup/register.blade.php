<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
	<link href = "css/style.css" rel = "stylesheet" type = "text/css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
<body class = "body">
<header class = "headerlogin">
</header>
    <div class="loginbox">
    <img src="registration/img/userIcon.png" class="avatar">
        <h1>Create Account</h1>
        <form action = "register.php" method = "post">
			<p class = "psi">Enter your full name</p>
			<input type="text" name="fullname" placeholder="Enter Full name">
            <p class = "psi">Username</p>
            <input type="text" name="username" placeholder="Enter Username">
			<p class = "psi">Email</p>
			<input type="email" name="email" placeholder="Enter Email">			
            <p class = "psi">Password</p>
            <input type="password" name="password" placeholder="Enter Password">
			<p class = "psi">Confirm Password</p>
			<input type="password" name="confirm_password" placeholder="Confirm Password">
            <input type="submit" name="submit" value="Sign Up">
            <a href="/signin">Already have an account?</a>
        </form>
        
    </div>

</body>

</html>