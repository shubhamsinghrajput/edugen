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

<body class="content-page">
	<!-- HEADER START -->

	<?php include 'header.php' ?>

	<!-- HEADER END -->

	<!-- CONTENT START -->
	<div class="content pdt book-content">	
        <div class="breadcrumb-wrap">
            <div class="container d-sm-flex justify-content-sm-between">
                <ul class="breadcrumb">
                    <li><a href="teacher-dashboard.php">Dashboard</a></li>
                    <li><a href="content.php">Content</a></li>			
                    <li><a href="lesson-plan.php">Chapter 1</a></li>
                    <li><a href="find-out.php">Find out</a></li>	
                </ul>
                <a href="digi-content.php" class="digi-link mr-2 ml-sm-4 mt-2 mt-sm-0">Digi Content</a>
            </div>
        </div> 
        <div class="container pt-4">
            <div class="chap-header">
				<h3 class="unit"><span class="bg-set">Unit 1 Thing About Us</span></h3>
                <h1>Chapter 1: Living and Non-living Things</h1>
            </div>
            <div class="tab-head">
              <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="lesson-plan.php">Lesson plan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="question-bank.php">Question bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="word-search.php">Word search</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="brainstorm.php">Brainstorm</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tell-teacher.php">Tell your teacher</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link " href="find-out.php">Find out</a>
                    </li> 
                  <li class="nav-item">
                      <a class="nav-link " href="digi-content.php">Digi-Content</a>
                  </li>                     
                  </ul>
            </div>
            <div class="tab-content p-4">
                     <section id="find-out" class="p-2">  	  
		        <h3>Find out</h3>
                       <ul>
                        <li> Tissue culture is a way to grow cells in a laboratory. This is done by
taking the cells in an early stage of development and getting them
to divide in a flask.</li>
                        <li>Spores are the single-celled reproductive unit of non-flowering
plants. Spores-producing plants include plants such as mosses and
ferns. Spores are very tiny and light. They can be dispersed by wind
to new locations where they can grow.</li>
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
