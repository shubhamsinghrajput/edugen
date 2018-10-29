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
<style>
    select.models{
  display:none;
}
select.models.active{
  display:inline-block;
}
    </style>
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
    <div class="container pt-4">
        <div class="chap-header">           
           
<!--           __--------------->
           
         <select id="test1" class='main'> 
   <option value='none'> --</option>
  <option value='worksheet'> Worksheet</option>
  <option value='question-paper'> Question paper </option>
 </select>
<!-- 
define each sublist as you wish,
 undefined ones wont show, 
-->
<select id="test" class='models worksheet'>
  <option  value='whole-class'> Whole class</option>
  <option value='1'> Individual</option>
</select>
<!--<div onchange="showDiv()">show</div>-->



<!--
<select id="test" name="form_select">
   <option value="0">No</option>
   <option value ="1">Yes</option>
</select>
-->

<div id="hidden_div" style="display: none;">Students Name</div>
<!--<input type="button" name="answer" value="Show Div" onclick="showDiv()" />-->
<!--           -------------------------->
           
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
						<div class="float-right"><input type="button" class="nav-link btn" onclick="window.location.hre=''" value="Submit"> </div>
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
                'copy', 'excel', 'pdf', 'print'
                
            ]
        });
    });
</script>

<script>
    $(function(){  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
   
<script>
   document.getElementById('test').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = style;
});
</script>
    
<script>
   document.getElementById('test1').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = style;
});
</script>
</body>
</html>