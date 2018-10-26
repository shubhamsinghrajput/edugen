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
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
	h3 {
		color: #333;
	}
</style>

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
				<li><a href="lesson-plan.php">Chapter 1</a></li>
				<li><a href="question-bank.php">Question Bank</a></li>
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
						<a class="nav-link" href="lesson-plan.php">Lesson plan</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link " href="question-bank.php">Question bank</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="word-search.php">Word search</a>
					</li>
					<li class="nav-item">
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
			<div class="tab-content p-4">
				<section class=" bg-gray" id="question-bank">
					<div class="wrapper-card pt-5 pb-3">
						<div class="container">
							<div class="row">
								<div class="col-xl-2 col-lg-3 col-sm-4 my-auto">
									<div class="card card-stats">
										<div class="card-header card-header-success card-header-icon">
											<div class="card-icon">
												Category
											</div>
											<h3>Intext</h3>
										</div>
									</div>
								</div>
								<div class="col-sm-8 my-auto">
									<a class="nav-link btn" href="intext-oral.php">Oral Questions</a>
									<a class="nav-link btn" href="intext-name.php">Name of the following </a>
								</div>
							</div>
						</div>
					</div>
					<div class="wrapper-card pt-5 pb-3">
						<div class="container">
							<div class="row">
								<div class="col-xl-2 col-lg-3 col-sm-4 my-auto">
									<div class="card card-stats">
										<div class="card-header card-header-danger card-header-icon">
											<div class="card-icon">
												Category
											</div>
											<h3>Textbook Exercise</h3>
										</div>
									</div>
								</div>
								<div class="col-sm-8  my-auto">
									<a class="nav-link btn"  href="textbook-oral.php">Oral Questions</a>
									<a class="nav-link btn" href="textbook-name.php">Name of the following </a>
								</div>
							</div>
						</div>
					</div>
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
	<script src="assets/js/site.js"></script>
</body>
</html>