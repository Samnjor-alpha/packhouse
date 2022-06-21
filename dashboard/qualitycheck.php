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
<div class="col-3">
    <?php include '../navbars/quality-navbar.php'?>
</div>
<div class="col-9">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Raw materials</h5>
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Crop</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td>French Beans</td>
                    <td>150kgs</td>
                    <td>21/June/2022</td>
                    <td><div class="dropdown">
                            <button class="btn btn-outline-success dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="viewretrieve.php?prno=PRNO23432">View</a></li>
                            </ul>
                        </div></td>
                </tr>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

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