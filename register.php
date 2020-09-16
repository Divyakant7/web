<html>
<head>
<title> user login and registration</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="login-box">
<div class="center">
<div class=col-mid-6" login-right>
<h2> Register Here</h2>
<form action="registation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Register </button>
<p>if you have already register then <a href="login.php">LOGIN here</a>
</form>
</div>
</div>
</div>
</body>
</html>
