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

    <?php include 'header.php' ?>

    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="content dashboard-bg pdt digi-content">
        <div class="breadcrumb-wrap">
            <ul class="breadcrumb container">
                <li><a href="teacher-dashboard.php">Dashboard</a></li>
                <li><a href="content.php">Content</a></li>
                <li><a href="lesson-plan.php">Chapter 1</a></li>
                <li><a href="find-out.php">Find out</a></li>
                <li><a href="digi-content.php">Digi-Content</a></li>
            </ul>
        </div>
        <div class="container mt-4  pt-4">
            <div class="card">
                <div class="row">
                    <div class="card-header card-header-info card-header-icon">
                        <h1 class="card-icon ">Digi-Content</h1>
                    </div>
                </div>
                <div class="tab-content card-title pl-3 pr-3">
                    <section id="find-out">
                        <div class="embed-responsive  embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="assets/video/1.mp4" allowfullscreen></iframe>
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
    <script src="assets/js/site.js">
    </script>
</body>

</html>