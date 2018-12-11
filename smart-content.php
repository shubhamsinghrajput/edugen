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
    <!--    <link href="assets/css/bg-animate.css" rel="stylesheet">-->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .breadcrumb-wrap {
            top: 0px;
        }

        body {
            background: hsl(235, 60%, 13%);
            /*#051a41;*/
        }
       .list-unstyled a,
        .list-unstyled a:hover {
            text-decoration: none;
            //background: #3c2727;
            color: #fff;
            display: block;
            padding: 7px 15px;
            margin-bottom: 1px;
            font-weight: 500;
         }
        .list-unstyled li li a, .list-unstyled li li a:hover {
            background:#fff;
            color: #3c2727;
            padding: 7px 30px;            
        }
        #sidebar {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            height: calc(100vh - 42px);
            overflow: auto;
            position: fixed;
            right: 0;
            width: 200px;
            top: 42px;
            padding: 15px;
        }
        .list-unstyled{
            margin: 0 -15px;
        }
        .list-unstyled ul{
            margin: 0;
        }
        .book-wrapper {
            width: calc(100% - 200px);
        }
        
        .modal-open .modal.modal-center.show {
            display: flex !important; 
            align-items: center!important;            
        }        
        .modal{
            padding: 0 !important;
            display: none ;
        }
        .modal-dialog {
            max-width: 80% !important;
            height: 80%;
            padding: 0;
            margin: 0 auto;
        }
        .modal-content {
            border-radius: 0 !important;
            height: 100%;
        }  
    </style>
</head>

<body class="content-page">
    <!--    <canvas id='c' style="z-index:-1;"></canvas>-->
    <!-- HEADER START -->
    <!--    <?php include 'student-header.php' ?>-->
    <!-- HEADER END -->
    <!-- CONTENT START -->
    <div class="content pb-0" style="padding-top:25px;">
        <div class="breadcrumb-wrap">
            <div class="container d-sm-flex justify-content-sm-between">
                <ul class="breadcrumb">
                    <li><a href="student-dashboard.php">Dashboard</a></li>
                    <li><a href="student-content.php">Science</a></li>
                    <li><a href="student-content.php">Content</a></li>
                    <li><a href="student-content.php">Chapter 1</a></li>
                    <li><a href="smart-content.php">Smart Content</a></li>
                </ul>
                <a href="assets/video/class-one/index.html" class="digi-link mr-2 ml-sm-4 mt-2 mt-sm-0">Digi Content</a>
            </div>
        </div>
        <canvas class="full-len" id="canvas" style="position:absolute; min-height:calc(100vh + 80px);"></canvas>
        <div class="container-fluid my-auto ">
            <div class="book-wrapper">
                <iframe style="position:relative; z-index:2;" src="smart-content+/samples/book/index.html" frameborder="0" width="100%" height="700px"></iframe>
            </div>
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="mb-2">Digi Links</h3>
                </div>
                <ul class="list-unstyled components pt-2">
                    <li class="active">
                        <a href="#" data-toggle="modal" data-target="#myModal">Match Game</a>
                    </li>
                    <li class="active">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Fill in the blank</a>
                    </li>
                    <li class="active">
                        <a href="#" data-toggle="modal" data-target="#myModal3">Matching</a>
                    </li>
                    <li class="active">
                        <a href="#chap1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 1</a>
                        <ul class="collapse list-unstyled" id="chap1">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">2</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#chap2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 2</a>
                        <ul class="collapse list-unstyled" id="chap2">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#chap3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 3</a>
                        <ul class="collapse list-unstyled" id="chap3">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
<!--
                    <li class="active">
                        <a href="#chap4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 4</a>
                        <ul class="collapse list-unstyled" id="chap4">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 5</a>
                        <ul class="collapse list-unstyled" id="chap5">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 6</a>
                        <ul class="collapse list-unstyled" id="chap6">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 7</a>
                        <ul class="collapse list-unstyled" id="chap7">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 8</a>
                        <ul class="collapse list-unstyled" id="chap8">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap9" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 9</a>
                        <ul class="collapse list-unstyled" id="chap9">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap10" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 10</a>
                        <ul class="collapse list-unstyled" id="chap10">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap11" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 11</a>
                        <ul class="collapse list-unstyled" id="chap11">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 12</a>
                        <ul class="collapse list-unstyled" id="chap12">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
<!--
                    <li class="active">
                        <a href="#chap13" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Chapter 13</a>
                        <ul class="collapse list-unstyled" id="chap13">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                        </ul>
                    </li>
-->
                </ul>
            </nav>
        </div>
    </div>
    <div class="modal fade modal-center" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Match the Socks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="memory-game/game-1/index.html" frameborder="0" width="800px" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-center" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Fill in the blank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <iframe src="memory-game/fill-blank/index.html" frameborder="0" width="800px" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-center" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Fill in the blank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <iframe src="memory-game/matching/index.html" frameborder="0" width="800px" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Custom scripts for this template -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src='https://rawgit.com/akm2/simplex-noise.js/master/simplex-noise.js'></script>
    <script src="assets/js/bubble.js"></script>
    <script src="assets/js/site.js"></script>
</body>
</html>