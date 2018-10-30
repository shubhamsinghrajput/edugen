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
				<li><a href="edit-board.php">Edit-Board</a></li>
			</ul>
		</div>
		<div class="container-fluid pt-4">
			<div class="chap-header e-sel-header">

				<!----------------->

				<div class="row">
					<div class="col-md-10">
						<h3 class="unit"><span class="bg-set">Unit 1 Thing About Us</span></h3>
						<h1>Chapter 1: Living and Non-living Things</h1>
					</div>

					<div class="col-md-2 col-sm-8 col-10 mx-auto e-sel-wrapper">
						<select id="e-selector1" class='main'>
							<option value='none'> Select Question</option>
							<option value='worksheet'> Worksheet</option>
							<option value='question-paper'> Question paper </option>
						</select>
						<select id="e-selector" class='models worksheet'>
							<option value='whole-class'> Whole class</option>
							<option value='1'> Individual</option>
						</select>
					</div>
				</div>
				<!-- -------------------------->
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
			<div class="row">
				<div class="col-md-10 tab-content p-4">
					<section class=" bg-gray" id="question-bank">

						<div class="form-content">
							<form action="" method="">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="">Name of the School</label>
											<input type="text" name="" class="form-control">
										</div>
										<div class="form-group">
											<label for=""> Subject</label>
											<input type="text" name="" class="form-control">
										</div>


									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label for="">Distribution Date</label>
													<input type="text" name="" class="form-control">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="">Submission Date</label>
													<input type="text" name="" class="form-control">
												</div>
											</div>

										</div>
										<div class="form-group">
											<label for="">Name of the chapter</label>
											<input type="text" name="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">

										<div class="form-group">
											<label for="">Teacher Remark</label>
											<textarea type="text" rows="4" name="" class="form-control"></textarea>
										</div>

									</div>
								</div>
							</form>
						</div>

						<div class=" table-responsive" style="padding-top: 10px;">
							<form action="" method="" class="form-tabel">
								<table id="example" class="display">
									<thead>
										<tr>
											<th width="5%">Page
												<br />No.</th>
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
											<td>
												<input type="checkbox" name="" class="c-check">
											</td>
										</tr>
										<tr>
											<td>10</td>
											<td>7</td>
											<td>This should be a catch-phrase for Support</td>
											<td>This should be a catch</td>
											<td>
												<input type="checkbox" name="" class="c-check">
											</td>
										</tr>
										<tr>
											<td>12</td>
											<td>10</td>
											<td>This should be a catch-phrase for Support</td>
											<td>This should be a catch</td>
											<td>
												<input type="checkbox" name="" class="c-check">
											</td>
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
								<div class="float-right">
									<input type="button" class="nav-link btn" onclick="window.location.hre=''" value="Submit"> </div>
							</form>
						</div>
					</section>
				</div>
				<div class="col-md-2 pt-4">
					<div id="hidden_div" class="student-list=-wrapper" style="display: none;">
						<ul class="student-list pl-0 pt-1">
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
							<li>
								<input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
						</ul>
					</div>
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
					'copy', 'excel', 'pdf', 'print'
				]
			});
		});
	</script>

	<script>
		$(function() {
			$("select.main").on("change", function() {
				//remove active
				$("select.models.active").removeClass("active");
				//check if select vlass exists..if it does show it
				var subList = $("select.models." + $(this).val());
				if (subList.length) {
					//it does! show it by adding active class to it
					subList.addClass("active");
				}
			});

		});
	</script>

	<script>
		document.getElementById('e-selector').addEventListener('change', function() {
			var style = this.value == 1 ? 'block' : 'none';
			document.getElementById('hidden_div').style.display = style;
		});
	</script>

	<script>
		document.getElementById('e-selector1').addEventListener('change', function() {
			var style = this.value == 1 ? 'block' : 'none';
			document.getElementById('e-selector').value = 'whole-class';
			document.getElementById('hidden_div').style.display = style;
		});
	</script>
</body>

</html>