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
				<li><a href="question-bank.php">Question Bank</a></li>	
				<li><a href="textbook-name.php">Textbook exercises - Name of the following</a></li>			
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
                <div class=" table-responsive" style="padding-top: 10px;">
					<form action="" method="" class="form-tabel">
						<table id="example" class="display">
							<thead>
								<tr>
									<th width="5%">Page <br />No.</th>
									<th width="5%">Q No.</th>
									<th width="40%">Questions</th>
									<th width="35%">Answer</th>
									<th width="5">WS</th>
						
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10</td>
									<td>5</td>
									<td>This should be a catch-phrase for Support</td>
									<td>This should be a catch</td>
									<td> <input type="checkbox" name="" class="c-check"></td>
								</tr>
								<tr>
									<td>10</td>
									<td>7</td>
									<td>This should be a catch-phrase for Support</td>
									<td>This should be a catch</td>
									<td> <input type="checkbox" name="" class="c-check"></td>
								</tr>
								<tr>
									<td>12</td>
									<td>10</td>
									<td>This should be a catch-phrase for Support</td>
									<td>This should be a catch</td>
									<td> <input type="checkbox" name="" class="c-check"></td>
								</tr>
								</tbody>
							<tfoot>
								<tr>
									<th>Page No.</th>
									<th>Q No.</th>
									<th>Questions</th>
									<th>Answer</th>
									<th width="5">WS</th>
								</tr>
							</tfoot>
						</table>
						<div class="text-right">
						    <div class="col-12 pt-3 pr-0"><input type="button" class=" ml-auto  nav-link btn input-btn" value="Add ot Edit-board"> </div>
							<div class="col-12 pr-0"><a href="edit-board.php" class=" ml-auto nav-link btn input-btn" >Edit board </a></div> 
						</div> 
					</form>
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
	
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print' 
				]
			});
		});
	</script>
</body>
</html>
