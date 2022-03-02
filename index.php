<?php

require('connection.php');


?>


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
   <style>	   
	   .error{
		   color: red;
	   }
	   .c1{
		   border: 2px red ridge;
	   }
  </style>
</head>

<body>

<div class="container-fluid bg-light p-5">
	<h2 class="text-center">Request A Demo</h2>
	<p class="text-center">Your Dealership in the palm of your hands</p>
	<div class="container m-auto bg-white p-3" style="width: 80%;">
	<form action="" id="form1">
    <div class="form-group">
     <div id="success" class="text-center"></div>
      <label for="name">Company Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your Company Name" name="name" autocomplete="off">
      <h6 id="namecheck"></h6>
    </div>
    <div class="form-group">
      <label for="person">Contact Person:</label>
      <input type="text" class="form-control" id="person" placeholder="Enter Your Contact Person" name="person" autocomplete="off">
      <h6 id="personcheck"></h6>
    </div>
    <div class="form-group">
      <label for="number">Phone Number:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter Your Mobile Number" name="number" autocomplete="off">
      <h6 id="numbercheck"></h6>
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" autocomplete="off">
      <h6 id="emailcheck"></h6>
    </div>
    
    <button type="submit" name="submit" id="submit" class="btn btn-primary rounded-pill" onClick="addRecord()">Submit Request</button>
    </form>	
	</div>
</div>
<br>

<script src="jquery validation/dist/jquery.validate.min.js"></script>
<script>
	
	$(document).ready(function(){
		
		$('#form1').validate({
			rules:{
				name:{
					required:true,
					minlength:3,
					maxlength:12
				},
				
				person:{
					required:true,
					minlength:3,
					maxlength:12
				},
				
				number:{
					required:true,
					minlength:3,
					maxlength:12
				},
				
				email:{
					required:true,
					email:true
				}
			},
			
			highlight:function(element){
				$(element).addClass("c1");
			},
			
			unhighlight:function(element){
				$(element).removeClass("c2");
			},
			
			
			messages:{
				name:{
					required:"Company Name is mandatory",
				}
			}
			
		})
			
		
		
		
	})
	
	</script>

</body>
</html>

