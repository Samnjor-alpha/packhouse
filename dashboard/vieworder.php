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

            <div class="offset-2 col-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order</h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="d-flex flex-row rounded">

                                    <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                        <dl>


                                            <dd><h5 class="font-weight-bolder text-dark">Order No:</h5></dd>
                                            <dt><?php echo $_GET['orderno'] ?></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Customer:</h5></dd>
                                            <dt><?php echo "KFC" ?></dt>

                                            <dd><h5 class="font-weight-bolder text-dark">Products:</h5></dd>
                                            <dt><?php echo "Potatoes" ?></dt>

                                                <dd><h5 class="font-weight-bolder text-dark">Quantity:</h5></dd>
                                                <dt>100Kgs</dt>

                                        </dl>
                                    </div>
                                    <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                        <dl>
                                            <dd><h5 class="font-weight-bolder text-dark">Address</h5></dd>
                                            <dt><address>
                                                    <?php echo "Netherlands" ?>
                                                </address></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Order Type</h5></dd>
                                            <dt>International</dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Order Date:</h5></dd>
                                            <?php echo "18th/June/2022" ?>
                                            <dd><h5 class="font-weight-bolder text-dark">Delivery Date:</h5></dd>
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

</main>
<?php include '../navbars/footer.php' ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php
include 'modals/logout.php';
include '../public/scripts.php'?>

</body>

</html>