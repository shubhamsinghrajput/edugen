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
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="content-page">
    <!-- HEADER START -->
    <?php include 'student-header.php' ?>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="content pdt pb-0">
        <div class="breadcrumb-wrap">
            <div class="container d-sm-flex justify-content-sm-between">
                <ul class="breadcrumb ">
                    <li><a href="student-dashboard.php">Dashboard</a></li>
                    <li><a href="student-content.php">Content</a></li>
                    <li><a href="student-content.php">Chapter 1</a></li>
                    <li><a href="smart-content.php">Smart Content</a></li>
                </ul>
                <a href="student-digi-content.php" class="digi-link mr-2 ml-sm-4 mt-2 mt-sm-0">Digi Content</a>
            </div>
        </div>
        <div class="container p-0">
<!--
            <section class="smart-content">
                <embed src="assets/pdf/1_0Inner%20pages.pdf" type="application/pdf" width="100%" style="height:80vh">
            </section>  
            <iframe src="assets/pdf/1_0Inner%20pages.pdf" type="application/pdf" width="100%" style="height:80vh">
             </iframe>
-->
       
       
       
       <object data="assets/pdf/1_0Inner%20pages.pdf" type="application/pdf" width="100%" height="800">
 </object>
         </div>
    </div>
    <!-- FOOTER START -->
    <?php include 'footer.php' ?>
    <!-- FOOTER END -->
    <!-- Custom scripts for this template -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/site.js">
    </script>
</body>

</html>