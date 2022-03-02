<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
</head>

<body>
	

<?php

require('connection.php');
	
	$c_name=$_POST['c_name'];
	$c_person=$_POST['c_person'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	
	if (empty($_POST['c_name'])) {
		
		echo ' <div class="alert alert-danger">
  Company Name is required
</div>';
	
  }
	
	elseif(strlen($c_name) < 3) {
    
		
		echo ' <div class="alert alert-danger">
  Company Name must be between 3 & 10
</div>';
	 
  }
	elseif(strlen($c_name) > 10) {
    
		
		echo ' <div class="alert alert-danger">
  Company Name must be between 3 & 10
</div>';
	 
  }
	
    elseif(empty($_POST['c_person'])) {
    
		
		echo ' <div class="alert alert-danger">
  Person Name is required
</div>';
	 
  }
	
	elseif(strlen($c_person) < 3) {
    
		
		echo ' <div class="alert alert-danger">
  Person Name must be between 3 & 10
</div>';
	 
  }
	elseif(strlen($c_person) > 10) {
    
		
		echo ' <div class="alert alert-danger">
  Person Name must be between 3 & 10
</div>';
	 
  }
	
	
	elseif(empty($_POST['number'])) {
		
		echo ' <div class="alert alert-danger">
   Mobile Number is required
</div>';
		
  }
	
	elseif(strlen($number) < 10) {
    
		
		echo ' <div class="alert alert-danger">
  Mobile Number must be between 10 & 15
</div>';
	 
  }
	elseif(strlen($c_person) > 15) {
    
		
		echo ' <div class="alert alert-danger">
  Mobile Number must be between 10 & 15
</div>';
	 
  }
	
	
	elseif(empty($_POST['email'])) {
		
		echo ' <div class="alert alert-danger">
   Email Address is required
</div>';
		
  }
	
	elseif(strlen($number) < 5) {
    
		
		echo ' <div class="alert alert-danger">
  Email Address must be between 5 & 15
</div>';
	 
  }
	elseif(strlen($c_person) > 15) {
    
		
		echo ' <div class="alert alert-danger">
  Email Address must be between 5 & 15
</div>';
	 
  }
	
	
	else{
		
	$c_name=$_POST['c_name'];
	$c_person=$_POST['c_person'];
	$number=$_POST['number'];
	$email=$_POST['email'];
		
	$qq="INSERT into user (c_name,c_person,number,email) values ('$c_name','$c_person','$number','$email')";
		
	mysqli_query($con,$qq);
		
	echo ' <div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Congratulations!</strong> Information submitted successfully.
</div>';

	}
	
	/*
if(isset($_POST['c_name']) && isset($_POST['c_person']) && isset($_POST['number']) && isset($_POST['email'])) {
	
	
}
	*/
?>
</body>
</html>