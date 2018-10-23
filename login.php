<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Edugen</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login-page">
<!-- HEADER START -->
	 <header class="header bg-orange fixed-top">
	   <nav class="navbar navbar-expand-md container">
		  <a class="navbar-brand logo" href="#">
			<img src="assets/img/profile.jpg" alt="logo">
		  </a>
		</nav> 
	</header>
<!-- HEADER END -->
<!-- CONTENT START -->
<div class="content pdt ">
    <div class="breadcrumb-wrap">
        		 <div class="container">
        		     <p>Login for teacher</p>
        		 </div>
        	</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-8 col-lg-6 mx-auto">
                <form name="login-form" method="" action="" id="login-form">
                    <div class="mb-0 pb-2">
                        <label>Email</label>
                        <input class="form-control" id="username" type="text" placeholder="user" required="required">
                    </div>
                    <div class="mb-0 pb-2">
                        <label>password</label>
                        <input class="form-control" id="teacher-name" type="password" placeholder="password" required="required">
                    </div>
                    <button type="submit" class="btn btn-xl mt-3"><a href="teacher-dashboard.php">Log in</a></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER START -->
<?php include 'footer.php' ?>
<!-- FOOTER END -->
<!-- Custom scripts for this template -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>