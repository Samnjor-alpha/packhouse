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
                        <h5 class="card-title">Advance payment</h5>
                        <section>
                            <div class="row">
                                <div class="col-4">

                                    <label for="dateregistred">Payment  Date</label>
                                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-4">

                                    <label for="dateregistred">Supplier</label>
                                   <select class="form-select form-control">
                                       <option selected disabled>Select Supplier</option>
                                       <option>Supplier 1</option>
                                       <option>Supplier 2</option>
                                   </select>


                                </div>

                                <div class="col-4">
                                    <label for="userName">Produce (KG)</label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-4">

                                    <label for="dateregistred">Unit Price per KG</label>
                                    <input id="dateregistred" type="number" class="form-control mydatepicker">


                                </div>
                                <div class="col-4">
                                    <label for="userName">Amount to be payed</label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label for="userName">Status</label>
                                    <select class="form-select form-control">
                                        <option selected disabled>Select Status</option>
                                        <option>Paid</option>
                                        <option>Pending</option>
                                    </select>
                                </div>
                            </div>

<button type="submit" class="btn btn-success mt-1">Record</button>

                        </section>





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