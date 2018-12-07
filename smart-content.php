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
    </style>
    <style>
        /*
    #wrap { width: 1620px; height: 3500px; padding: 0; position:relative; left:-100px; top:0px; overflow: hidden; }
    #frame { width: 1620px; height: 3500px; position:relative; left:-65px; top:0px; }
    #frame { -ms-zoom: 0.7; -moz-transform: scale(0.7); -moz-transform-origin: 0px 0; -o-transform: scale(0.7); -o-transform-origin: 0 0; -webkit-transform: scale(0.7); -webkit-transform-origin: 0 0; }
*/
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
        <div id="wrap" class="container-fluid my-auto ">
            <div class="book-wrapper">
                <iframe style="position:relative; z-index:2;" src="smart-content/samples/book/index.html" frameborder="0" width="100%" height="700px"></iframe>
            </div>
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="mb-4">Digi Links</h3>
                </div>

                <ul class="list-unstyled components pt-4">
                     <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>

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