<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/_managefarmer.php';
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Unprocessed Orders</h5>
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Order No</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Customer</th>
                            <th>Order Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>ORD23432</td>
                            <td><?php echo date("D ,d/M/Y")?></td>
                            <td>French Beans</td>
                            <td>Customer 1</td>
                            <td>Local order</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-success dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="vieworder.php?orderno=ORDER23432">View</a></li>
                                    </ul>
                                </div></td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

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