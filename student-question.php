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

<body>
    <!-- HEADER START -->
    <?php include 'student-header.php' ?>
    <!-- HEADER END -->
    <!-- CONTENT START -->
    <div class="content pdt que-bg">
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb container">
                <li><a href="teacher-dashboard.php">Dashboard</a></li>
                <li><a href="question.php">Added Questions</a></li>
            </ul>
        </div>
        <!--            --------------------------------------------------------------------------------------------------
       ---------------------------------------------------------------------------------------------------------->


        <div class="container-fluid register">
            <div class="row">
                <div class="col-lg-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>Question Papers and Worksheets are listed here if you want to edit any of them please choose edit option in preview page. You can delete any of them here.</p>
                    <a href="content.php" class="btn edu-btn" name="">Add New Question</a><br />
                </div>
                <div class="col-lg-9 register-right">
                    <ul class="nav nav-tabs nav-justified ml-auto" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Question Paper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Worksheet</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!--                            <h3 class="register-heading">Question Paper</h3>-->
                            <div class="row register-form">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-default">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        1
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :

                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-success">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        2
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :

                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-primary">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :

                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-info">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        4
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-warning">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        5
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-danger">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        6
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input type="submit" class="btnRegister"  value="Register"/>-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!--
                            <h3 class="register-heading" >Worksheet</h3>
-->
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-default">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        1
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-success">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        2
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-primary">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-info">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        4
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-warning">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        5
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="offer offer-radius offer-danger">
                                                <div class="shape">
                                                    <div class="shape-text">
                                                        6
                                                    </div>
                                                </div>
                                                <div class="offer-content">
                                                    <h3>
                                                        Created Date:
                                                    </h3>
                                                    <h3>
                                                        Distribution Date:
                                                    </h3>
                                                    <h3>
                                                        Teacher Remark :
                                                    </h3>
                                                    <a class="btnDelete" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>
                                                    <a href="student-preview.php" class="btnRegister">Open</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--------------------------------------------------Modal------------------------------------------------------>


        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                    </div>
                    <div class="modal-footer ">
                        <a class="btnDelete close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
                        <a class="btnRegister close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> No</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <!-- -------------------------------------------------------------------------------------------------------
           -------------------------------------------------------------------------------------------------------------->



    </div>
    <!-- FOOTER START -->
    <?php include 'footer.php' ?>
    <!-- FOOTER END -->
    <!-- Custom scripts for this template -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/site.js"></script>
    <script>
        $(".alert").alert()
    </script>
</body>

</html>