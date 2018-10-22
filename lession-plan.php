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
				<li><a href="book-content.php">Book Content</a></li>
 			</ul>
		</div>
        <div class="container pt-4">
            <div class="chap-header">
                <h3 class="unit">Unit 2 Thing About Us</h3>
                <h1>Chapter 1: Living and Non-living Things</h1>
            </div>
            <div class="tab-head">
              <ul class="nav nav-tabs">
                    <li class="nav-item  active">
                      <a class="nav-link" href="#">Lesson plan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Question bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Word search</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">Brainstorm</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Tell your teacher</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">Find out</a>
                    </li>                     
                  </ul>
            </div>
            <div class="tab-content p-4">
               <div class="container">
                    <section>
                          <div class="container-fluid bg-gray" id="accordion-style-1">
                                <div class="container">
                                    <section>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                          <i class="fa fa-minus main"></i><i class="fa fa-angle-double-right mr-3"></i>Goal
                                                        </button>
                                                      </h5>
                                                        </div>

                                                        <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                         <i class="fa fa-minus main"></i><i class="fa fa-angle-double-right mr-3"></i>Objectives
                                                        </button>
                                                      </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                          <i class="fa fa-minus main"></i><i class="fa fa-angle-double-right mr-3"></i>Teaching Aids
                                                        </button>
                                                      </h5>
                                                        </div>
                                                        <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                            <div class="card-body">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="headingFour">
                                                            <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                          <i class="fa fa-minus main"></i><i class="fa fa-angle-double-right mr-3"></i>Teaching Suggestions
                                                        </button>
                                                      </h5>
                                                        </div>
                                                        <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                            <div class="card-body">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	
                                        </div>
                                    </section>
                                </div>
                            </div>
                         
                    </section>
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
	<script src="assets/js/site.js">
	</script>
</body>
</html>
