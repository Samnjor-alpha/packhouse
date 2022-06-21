<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>Dashboard </title>
    <?php include '../public/stylesheets.php'; ?>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <?php include '../navbars/topbar.php' ?>

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <?php include "../navbars/sidebar.php"; ?>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
<div class="col-3">
     <?php include '../navbars/receivingnav.php' ?>

</div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Planting</h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="d-flex flex-row rounded">

                                    <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                        <dl>
                                            <dd><h5 class="font-weight-bolder text-dark">Planting No:</h5></dd>
                                            <dt><?php echo $_GET['plantingno'] ?></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Farm Name:</h5></dd>
                                            <dt>Farm 1</dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Block No:</h5></dd>
                                            <dt><?php echo "BLOCK439430" ?></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Plantation Size:</h5></dd>
                                            <dt><?php echo "80 acres" ?></dt>
                                        </dl>
                                    </div>
                                    <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                        <dl>
                                            <dd><h5 class="font-weight-bolder text-dark">Assigned Farmer</h5></dd>
                                            <dt><address>
                                                    <?php echo "Farmer 1" ?>
                                                </address></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Planted Crop:</h5></dd>
                                            <?php echo "Dhania" ?>
                                            <dd><h5 class="font-weight-bolder text-dark">Planting  Date:</h5></dd>
                                            <dt><?php echo date("D, d/M/Y") ?></dt>
                                        </dl>

                                    </div>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>
            </div>


        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include '../navbars/footer.php' ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php
include 'modals/logout.php';
include '../public/scripts.php'?>

</body>

</html>