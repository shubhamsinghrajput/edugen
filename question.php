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
        .tab-content{
                border: none;
            }
            
            
            .register{
                margin-top: 3%;
                padding: 3%;
            }
            .register-left{
                text-align: center;
                color: #fff;
                margin-top: 4%;
            }
            .register-left input{
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                width: 60%;
                background: #f8f9fa;
                font-weight: bold;
                color: #383d41;
                margin-top: 30%;
                margin-bottom: 3%;
                cursor: pointer;
            }
            .register-right{
                background: #f8f9fa;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
            }
            .register-left img{
                margin-top: 15%;
                margin-bottom: 5%;
                width: 25%;
                -webkit-animation: mover 2s infinite  alternate;
                animation: mover 1s infinite  alternate;
            }
            @-webkit-keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            @keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            .register-left p{
                font-weight: lighter;
                padding: 12%;
                margin-top: -9%;
            }
            .register .register-form{
                padding: 10%;
                margin-top: 10%;
            }
            .btnRegister{
                text-align: center;
                float: right;
                margin: 5% 0 2%; 0;
                border: none;
                border-radius: 1.5rem;
                padding: 0.25%;
                background: #3c2727;
                color: #fff !important;
                font-weight: 600;
                width: 20%;
                cursor: pointer;                
            }
        .btnDelete{
            text-align: center;
            float: right;
            margin: 5% 0 2%; 0;
            border: none;
            border-radius: 1.5rem;
            padding: 0.25%;
            background: red;
            color: #fff !important;
            font-weight: 600;
            width: 20%;
            cursor: pointer;                
        }
            .register .nav-tabs{
                margin-top: 3%;
                border: none;
                background: #0062cc;
                border-radius: 1.5rem;
                width: 48%;
                min-width: 280px;
                float: right;
            }
            .register .nav-tabs .nav-link{
                padding: 2%;
                height: 34px;
                font-weight: 600;
                color: #fff;
                border-top-right-radius: 1.5rem;
                border-bottom-right-radius: 1.5rem;
            }
            .register .nav-tabs .nav-link:hover{
                border: none;
            }
            .register .nav-tabs .nav-link.active{
                width: auto;
                color: #0062cc;
                border: 2px solid #0062cc;
                border-top-left-radius: 1.5rem;
                border-bottom-left-radius: 1.5rem;
            }
            .register-heading{
                text-align: center;
                margin-top: 8%;
                margin-bottom: -15%;
                color: #495057;
            }
            
                    
/*  ------------------------------------------------------------------------------*/
            
            
            
            
            .shape{	
                border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
                -ms-transform:rotate(360deg); /* IE 9 */
                -o-transform: rotate(360deg);  /* Opera 10.5 */
                -webkit-transform:rotate(360deg); /* Safari and Chrome */
                transform:rotate(360deg);
            }
            .offer{
                background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
            }
            .offer-radius{
                border-radius:7px;
            }
            .offer-danger {	border-color: #d9534f; }
            .offer-danger .shape{
                border-color: transparent #d9534f transparent transparent;
                border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
            }
            .offer-success {	border-color: #5cb85c; }
            .offer-success .shape{
                border-color: transparent #5cb85c transparent transparent;
                border-color: rgba(255,255,255,0) #5cb85c rgba(255,255,255,0) rgba(255,255,255,0);
            }
            .offer-default {	border-color: #999999; }
            .offer-default .shape{
                border-color: transparent #999999 transparent transparent;
                border-color: rgba(255,255,255,0) #999999 rgba(255,255,255,0) rgba(255,255,255,0);
            }
            .offer-primary {	border-color: #428bca; }
            .offer-primary .shape{
                border-color: transparent #428bca transparent transparent;
                border-color: rgba(255,255,255,0) #428bca rgba(255,255,255,0) rgba(255,255,255,0);
            }
            .offer-info {	border-color: #5bc0de; }
            .offer-info .shape{
                border-color: transparent #5bc0de transparent transparent;
                border-color: rgba(255,255,255,0) #5bc0de rgba(255,255,255,0) rgba(255,255,255,0);
            }
            .offer-warning {	border-color: #f0ad4e; }
            .offer-warning .shape{
                border-color: transparent #f0ad4e transparent transparent;
                border-color: rgba(255,255,255,0) #f0ad4e rgba(255,255,255,0) rgba(255,255,255,0);
            }

            .shape-text{
                color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
                -ms-transform:rotate(30deg); /* IE 9 */
                -o-transform: rotate(360deg);  /* Opera 10.5 */
                -webkit-transform:rotate(30deg); /* Safari and Chrome */
                transform:rotate(30deg);
            }	
            .offer-content{
                padding:15px ;
            }
        .que-bg{
            background: url(assets/img/question-bg.jpg) no-repeat bottom left;
            -webkit-background-size: cover;
            background-size:cover;
            position: relative;
            padding-top: 75px;
        }
        .que-bg:before{
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            //z-index: 2;          
        }
        
      
        </style>
</head>

<body>
    <!-- HEADER START -->
    <?php include 'header.php' ?>
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
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>Question Papers and Worksheets are listed here if you want to edit any of them please choose edit option in preview page. You can delete any of them here.</p>
                    <input type="submit" name="" value="Login" /><br />
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Question Paper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Worksheet</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Question Paper</h3>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                    <a href="preview.php" class="btnRegister">Open</a>  
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input type="submit" class="btnRegister"  value="Register"/>-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Worksheet</h3>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                                                    <a class="btnDelete"  data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Delete</a>  
                                                   <a href="preview.php" class="btnRegister">Open</a>                                                </div>
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
                        <a  class="btnRegister close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> No</a>
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