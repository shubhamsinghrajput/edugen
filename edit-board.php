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
        <div class="container-fluid">
            <div class="chap-header p-4">
                <h3 class="unit"><span class="bg-set">Class 7</span></h3>
                <h1>Subject : Science</h1>
            </div><hr color="#3c2727">

            <div class="row">
                <div class="col-lg-2 pl-4 pt-4 pr-4 pb-0">
                    <div class="form-group">
                        <label for="">Please select question type</label>
                    <select id="e-selector1" class='main'>
                        <option value='question-paper'> Question paper </option>
                        <option value='worksheet'> Worksheet</option>                        
                    </select>
                    <select id="e-selector" class='models worksheet'>
                        <option value='whole-class'> Whole class</option>
                        <option value='1'> Individual</option>
                    </select>
                    </div>
                    <div id="hidden_div" class="student-list-wrapper" style="display: none;">
                        <ul class="student-list pl-0 pt-1 row">
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                            <li class="col-sm-6 col-md-4 col-lg-12">
                                <input type="checkbox" name="stuent_list[]" class="c-check"><label>Shubham Kumar</label> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 p-4">
                    <section class="bg-gray" id="question-bank">

                        <div class="form-content">
                            <form action="" method="">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name of the School</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Subject</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <div class="form-group">
                                                    <label for="">Distribution Date</label>
                                                    <input type="date" name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <div class="form-group">
                                                    <label for="">Submission Date</label>
                                                    <input type="date" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name of the chapter</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">

                                        <div class="form-group">
                                            <label for="">Teacher Remark</label>
                                            <textarea type="text" rows="4" name="" class="form-control"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <form action="" method="" class="form-tabel" id="edit-form">
                                <table id="example" class="display">
                                    <thead>
                                        <tr>
                                            <th width="5%">Page
                                                <br />No.</th>
                                            <th width="5%">Q No.</th>
                                            <th width="40%">Questions</th>
                                            <th width="35%">Answer</th>
                                            <th width="5">WS</th>
                                            <th width="5">Mark</th>
                                            <th width="5">Delete</th>

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
                                            <td><input type="text" name="" class="form-control mrak-field"></td>
                                            <td> <i class="fa fa-trash-o" style="font-size:30px;color:red"></i></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>7</td>
                                            <td>This should be a catch-phrase for Support</td>
                                            <td>This should be a catch</td>
                                            <td>
                                                <input type="checkbox" name="" class="c-check">
                                            </td>
                                            <td><input type="text" name="" class="form-control  mrak-field"></td>
                                            <td> <i class="fa fa-trash-o" style="font-size:30px;color:red"></i></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>10</td>
                                            <td>This should be a catch-phrase for Support</td>
                                            <td>This should be a catch</td>
                                            <td>
                                                <input type="checkbox" name="" class="c-check">
                                            </td>
                                            <td><input type="text" name="" class="form-control  mrak-field"></td>
                                            <td> <i class="fa fa-trash-o" style="font-size:30px;color:red"></i></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Page No.</th>
                                            <th>Q No.</th>
                                            <th>Questions</th>
                                            <th>Answer</th>
                                            <th>WS</th>
                                            <th>Mark</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="float-right pt-3">
                                    <input type="button" class="ml-auto  nav-link btn input-btn" onclick="window.location.hre=''" value="Submit"> </div>
                            </form>
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

    <!--
    <script>
        document.getElementById('e-selector').addEventListener('change', function() {
            var style = this.value == 2 ? 'block' : 'none';
            document.getElementById("mySelect").disabled = false;
        });

    </script>
-->
</body>

</html>