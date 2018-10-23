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
	</head>

<body class="content-page">
	<!-- HEADER START -->

	<?php include 'header.php' ?>

	<!-- HEADER END -->

	<!-- CONTENT START -->
	<div class="content pdt book-content">
		<div class="breadcrumb-wrap">
			<ul class="breadcrumb container">
				<li><a href="teacher-dashboard.php">Dashboard</a></li>
				<li><a href="content.php">Content</a></li>			
				<li><a href="lession-plan.php">Chapter 1</a></li>
				<li><a href="brainstorm.php">Brainstorm</a></li>				
 			</ul>
		</div>
        <div class="container pt-4">
            <div class="chap-header">
				<h3 class="unit"><span class="bg-set">Unit 1 Thing About Us</span></h3>
                <h1>Chapter 1: Living and Non-living Things</h1>
            </div>
            <div class="tab-head">
              <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="lession-plan.php">Lesson plan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="question-bank.php">Question bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="word-search.php">Word search</a>
                    </li>
                     <li class="nav-item active">
                      <a class="nav-link" href="brainstorm.php">Brainstorm</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="tell-teacher.php">Tell your teacher</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="find-out.php">Find out</a>
                    </li>                     
                  </ul>
            </div>
            <div class="tab-content p-3">
               <section id="brainstrom" class="p-2">  	  
		        <h3>Brainstorm (Page 14)</h3>	
                    <ul>			
                            <li>Due to various reasons, all the seeds of all fruits do not germinate and
                            grow into plants. Human tending is necessary for the growth of plants and
                            fruits in an abundant measure. The quantity of crops is a human choice.
                            </li>
                    </ul>                       
                </section>
        </div>
    </div>
    </div>
	<!-- FOOTER START -->
	<?php include 'footer.php' ?>
	<!-- FOOTER END -->

	<!-- Custom scripts for this template -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/site.js">
	</script>
</body>
</html>
