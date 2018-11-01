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
        <style>
            .card-title2{
                padding: 60px 0 0px;
                
            }
            .card-stats{
                min-height: 150px;
            }
        </style>
    </head>

    <body>
        <!-- HEADER START -->
        <?php include 'header.php' ?>
        <!-- HEADER END -->
        <!-- CONTENT START -->
        <div class="content pdt dashboard-bg">
            <div class="breadcrumb-wrap">
                <ul class="breadcrumb container">
                    <li><a href="teacher-dashboard.php">Dashboard</a></li>
                </ul>
            </div>
            <div class="summary-page" id="dashboard">			
                <div class="wrapper-card pt-5 pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 my-auto">
                                <div class="card card-stats">
                                    <div class="card-header card-header-warning card-header-icon">
                                        <div class="card-icon">
                                            Class
                                        </div>
                                        <h3 class="card-title2">Question Paper</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 mx-auto">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 mx-auto card-margin"><a href="question.php"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></a></div>
                                    <div class="col-md-3 col-sm-6 card-margin"><a href="question.php"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></a></div>
                                    <div class="col-md-3 col-sm-6 card-margin"><a href="question.php"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></a></div>
                                    <div class="col-md-3 col-sm-6 card-margin"><a href="question.php"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></a></div>								 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-card pt-5 pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 my-auto">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            Class
                                        </div>
                                        <h3 class="card-title2">Worksheet</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 mx-auto">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 card-margin"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></div>
                                    <div class="col-md-3 col-sm-6 card-margin"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></div>
                                    <div class="col-md-3 col-sm-6 card-margin"><img class="img-fluid" src="assets/img/profile.jpg" alt="logo"></div>
                                </div>
                            </div>
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
    </body>
</html>