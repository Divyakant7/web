<html>
<head>
<title> user login and registration</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="login-box">
<div class="align-center">
<div class=col-mid-6" login-left>
<h2> Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> login </button>
</form>
<a href="register.php">Register here</a>
</div>
</div>
</div>
</body>
</html>
