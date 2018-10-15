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
    <link href="assets/css/select.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
  <style>
            @media (max-width: 767px){
                .pd_100 {
                    padding-top: 35px;
                }
            }
            .c-thead{
                background: #167397;
                border-color: #167397;
                color:#fff;
            }
            .btn-secondary ,.btn-secondary:hover{
                color: #fff;
                background-color: #167397;
                border-color: #167397;
            }
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #167397;
                border-color: #167397;
            }
            table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
                cursor: pointer;
                background-repeat: no-repeat;
                background-position: center left;
                background: #167397;
            }
            #dashboard h2 {
                text-align: left;
            }
			@media all and (max-width:767px){
				.table-responsive{
					padding-top: 40px !important;
				}
			}
        </style>
    </head>
    <body class="pd_100">
        <!-- HEADER START -->
			<!--
					<header class="header">
						<?php include 'header.php' ?>
					</header>
			-->
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <ul class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Pictures</a></li>
		  <li><a href="#">Summer 15</a></li>
		  <li>Italy</li>
		</ul>

        
        
        <div class="content summary-page" id="dashboard">
            <div class="banner_domain">
                <div class="b-content container clearfix">
                    <div class="row">
                        <div class="col-md-8"><h2>Summary</h2>
                              <!--<p>This should be a catch-phrase for Support.</p>-->
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="container">
            	<div class=" table-responsive" style="padding-top: 60px;">
            	    <table id="example" class="table table-bordered " style="width:100%">
            	        <thead class="c-thead">
            	            <tr>
            	                <th>Q. No.</th>
            	                <th>Question</th>
            	                <th>Attemped</th>
            	                <th>Correct</th>
            	                <th>Time Spent</th>
            	                <th>Skill</th>
            	            </tr>
            	        </thead>
            	        <tbody>
            	            <tr>
            	                <td>1</td>
            	                <td>2+2</td>
            	                <td>4</td>
            	                <td>4</td>
            	                <td>00:12</td>
            	                <td>Skill 1</td>
            	            </tr>
            	            <tr>
            	                <td>2</td>
            	                <td>4+2</td>
            	                <td>8</td>
            	                <td>6</td>
            	                <td>00:18</td>
            	                <td>Skill 2</td>
            	            </tr>
            	            <tr>
            	                <td>3</td>
            	                <td>12+12</td>
            	                <td>23</td>
            	                <td>24</td>
            	                <td>00:10</td>
            	                <td>Skill 2</td>
            	            </tr>
            	            <tr>
            	                <td>4</td>
            	                <td>55+5</td>
            	                <td>62</td>
            	                <td>60</td>
            	                <td>00:16</td>
            	                <td>Skill 1  
            	                	<i class="right">  
										&#x2713;
										&#10003;
										&check; 
									</i> 
            	           		</td>
            	            </tr>
            	        </tbody>
            	        <tfoot class="c-thead">
            	            <tr>
            	                <th>Q. No.</th>
            	                <th>Question</th>
            	                <th>Attemped</th>
            	                <th>Correct</th>
            	                <th>Time Spent</th>
            	                <th>Skill</th>
            	            </tr>
            	        </tfoot>
            	    </table>
            	</div>
            </div>
        </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
  </body>

</html>
