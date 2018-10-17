<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edugen - Regestration Form</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"> 
    <link href="assets/css/style.css" rel="stylesheet">
  <style>
          
        </style>

    </head>
    <body>
        <!-- HEADER START -->
			
					 	<?php include 'header.php' ?>
				 
		  <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="content pdt">
       		<div class="breadcrumb-wrap">
        		<ul class="breadcrumb container">
        				  <li><a href="#">Home</a></li>
        				  <li><a href="#">Pictures</a></li>
        				  <li><a href="#">Summer 15</a></li>
        				  <li>Italy</li>
        				</ul>
        	</div>
        	<div class="container">
        		 <form name="teacher-form" id="teacher-form" novalidate="novalidate">
					<div class="mb-0 pb-2">
					   <label>CID</label>
					   <input class="form-control" id="teacher-cid" type="text" placeholder="Please enter school CID" required="required">
						</div> 
					 <div class="mb-0 pb-2">
					   <label>Name</label>
					   <input class="form-control" id="teacher-name" type="text" placeholder="Name" required="required" >
					 </div>
					 <div class="mb-0 pb-2">
					   <label>Phone No.</label>
					   <input class="form-control" id="teacher-phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
					 </div>
					 <div class="mb-0 pb-2">
					   <label>Email Address</label>
					   <input class="form-control" id="teacher-email" type="email" placeholder="Email Address" required="required" >
					 </div>                             
					 <div class="mb-0 pb-2">
					 <label>Subject</label>
					   <select class="multiselect"  name="teacher-sub" multiple="multiple" id="teacher-sub">
						 <option value="math">Math</option>
						 <option value="science">Science</option>
						 <option value="english">English</option>
						 <option value="hindi">Hindi</option>
						 <option value="sanskrit">Sanskrit</option>
					 </select>   
					   </div>
					<div class="mb-0 pb-2">
					 <label>Class</label>
					   <select class="multiselect"  name="teacher-class" multiple="multiple" id="teacher-class">
						 <option value="class-5">Class-5</option>
						 <option value="class-6">Class-6</option>
						 <option value="class-7">Class-7</option>
						 <option value="class-8">Class-8</option>
						 <option value="class-9">Class-9</option>
					 </select>   
					   </div>
				   <br>
				   <div id="success"></div>                         
					 <button type="submit" class="btn btn-xl" id="teacher-form-submit">Send</button>  
				 </form>
        	</div>
        </div>
 		  <!-- FOOTER START -->
			 <?php include 'footer.php' ?>
		  <!-- FOOTER END -->
		
        <!-- Custom scripts for this template -->
	    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/site.js"></script>
    </body>
</html>
