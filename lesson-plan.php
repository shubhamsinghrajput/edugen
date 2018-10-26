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
			<ul class="breadcrumb container">
				<li><a href="teacher-dashboard.php">Dashboard</a></li>
				<li><a href="content.php">Content</a></li>
				<li><a href="lesson-plan.php">Chapter 1</a></li>
				<li><a href="lesson-plan.php">Lesson Plan</a></li>
			</ul>
		</div>
		<div class="container pt-4">
			<div class="chap-header">
				<h3 class="unit"><span class="bg-set">Unit 1 Thing About Us</span></h3>
				<h1>Chapter 1: Living and Non-living Things</h1>
			</div>
			<div class="tab-head">
				<ul class="nav nav-tabs">
					<li class="nav-item  active">
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
						<a class="nav-link " href="tell-teacher.php">Tell your teacher</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="find-out.php">Find out</a>
					</li>
				</ul>
			</div>
			<div class="tab-content p-4">
				<section class=" bg-gray" id="accordion-style-1">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-angle-double-right mr-3"></i>Goal
									</button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									What is Lorem Ipsum?
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fa fa-angle-double-right mr-3"></i>Objectives
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									What is Lorem Ipsum?
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fa fa-angle-double-right mr-3"></i>Teaching Aids
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									What is Lorem Ipsum?
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<i class="fa fa-angle-double-right mr-3"></i>Teaching Suggestions
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
									What is Lorem Ipsum?
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
	<script src="assets/js/site.js">
	</script>
</body>
</html>