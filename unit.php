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
		<div class=" container">
			<div class="row">
				<div class="col-md-8">
					<h2>Data Table</h2>
					<!--<p>This should be a catch-phrase for Support.</p>-->
				</div>

			</div>
		</div>
		<div class="container">
			<div class=" table-responsive" style="padding-top: 30px;">
				<table id="example" class="display">
					<thead>
						<tr>
							<th width="5%">Page <br />No.</th>
							<th width="5%">Q No.</th>
							<th width="50%">Questions</th>
							<th width="25%">Answer</th>
							<th width="5%">Generate<br />WS</th>
							<th width="5%">Online<br /> Test</th>
							<th width="5%">Marks</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>1</td>
							<td>This should be a catch-phrase for SupportThis should be a catch-phrase for Support</td>
							<td>This should be a catch-phrase for Support</td>
							<td> <input type="checkbox" name="" class="c-check"></td>
							<td> <input type="checkbox" name="" class="c-check"> </td>
							<td>8</td>

						</tr>
						<tr>
							<td>1</td>
							<td>1</td>
							<td>This should be a catch-phrase for SupportThis should be a catch-phrase for Support</td>
							<td>This should be a catch-phrase for Support</td>
							<td> <input type="checkbox" name="" class="c-check"></td>
							<td> <input type="checkbox" name="" class="c-check"> </td>
							<td>8</td>

						</tr>
						<tr>
							<td>1</td>
							<td>1</td>
							<td>This should be a catch-phrase for SupportThis should be a catch-phrase for Support</td>
							<td>This should be a catch-phrase for Support</td>
							<td> <input type="checkbox" name="" class="c-check"></td>
							<td> <input type="checkbox" name="" class="c-check"> </td>
							<td>8</td>

						</tr>
						<tr>
							<td>1</td>
							<td>1</td>
							<td>This should be a catch-phrase for SupportThis should be a catch-phrase for Support</td>
							<td>This should be a catch-phrase for Support</td>
							<td> <input type="checkbox" name="" class="c-check"></td>
							<td> <input type="checkbox" name="" class="c-check"> </td>
							<td>8</td>

						</tr>

					</tbody>
					<tfoot>
						<tr>
							<th>Page No.</th>
							<th>Q No.</th>
							<th>Questions</th>
							<th>Answer</th>
							<th>Generate WS</th>
							<th>Online Test</th>
							<th>Marks</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
 	<!-- FOOTER START -->

	<?php include 'footer.php' ?>

	<!-- FOOTER END -->

	<!-- Custom scripts for this template -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/site.js"></script>
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