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
<label>PATIENT_DETAILS</label>
</div>
<form method="post" action="receiptionist.php">
<label>FIRST_NAME</label>
<div class="input-group">
<input type="text" name="fname" />
</div>
<label>SECOND_NAME</label>
<div class="input-group">
<input type="text" name="sname" />
</div>
<div class="input-group">
<label>LAST_NAME</label>
<input type="text" name="lname" />
</div>
<div class="input-group">
<label>ID_NUMBER</label>
<input type="text" name="idno" />
</div>
<div class="input-group">
<label>PHONE_NUMBER</label>
<input type="text" name="phoneno" />
</div>
<div class="input-group">
<label>NHIF_NUMBER</label>
<input type="text" name="nhifno" />
</div>
<div class="input-group">
<label>NSSF_NUMBER</label>
<input type="text" name="nssfno" />
</div>
<div class="input-group">
<label>AGE</label>
<input type="text" name="age" />
</div>
<div class="input-group">
<label>GENDER</label>
<input type="text" name="gender" />
</div>
<div class="input-group">
<label>RESIDENTIAL_PLACE</label>
<input type="text" name="residence" />
</div>
<div class="input-group">

<button type="submit" name="submit" class="btn" />SUBMIT</button>
</div>
</form>
<?php include('../includes/footer.php');?>
</body>
</html>