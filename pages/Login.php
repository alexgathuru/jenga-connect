<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
    
    <title>Document</title>
    
</head>
<body>
<?php include('../includes/navabar.php');?>
    <br>
    <div class="header">
<h2>Login</h2>
</div>
<form method="post" action="down.php">
<div class="input-group">
<label>Username</label>
<input type="text" name="username" />
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password1" />
</div>
<div class="input-group">
<button type="submit" name="Register" class="btn">Login</button>
</div>
<p>Not yet a member?<a href="register.php">   Sign up</a></p>
<?php include('../includes/footer.php');?>
</body>
</html>