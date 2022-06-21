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
                        <h5 class="card-title">Pesticide</h5>
                        <section>
                            <div class="row">
                                <div class="col-3">

                                    <label for="dateregistred">Application Date</label>
                                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-3">

                                    <label for="dateregistred">Pesticide</label>
                                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-3">
                                    <label for="userName">Justification</label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="userName">Active ingredient</label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6">

                                    <label for="dateregistred">Application  rate</label>
                                    <input id="dateregistred" type="date" class="form-control mydatepicker">


                                </div>

                                <div class="col-6">
                                    <label for="userName">Quantity</label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">

                                    <label for="dateregistred">Water</label>
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" >


                                </div>
                                <div class="col-3">

                                    <label for="dateregistred">Equipment</label>
                                    <input id="dateregistred" type="text" class="form-control mydatepicker">


                                </div>
                                <div class="col-3">
                                    <label for="userName">Start time</label>
                                    <input id="userName" name="userName" type="time" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="userName">End time</label>
                                    <input id="userName" name="userName" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">

                                    <label for="dateregistred">Operator</label>
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-3">

                                    <label for="dateregistred">REI</label>
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-3">
                                    <label for="userName">Weather </label>
                                    <input id="userName" name="userName" type="text" class="form-control">
                                </div>
                                <div class="col-3">
                                    <label for="userName">PHI</label>
                                    <input id="userName" name="userName" type="week" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">

                                    <label for="dateregistred">clear Date</label>
                                    <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                </div>
                                <div class="col-4">

                                    <label for="dateregistred">Technician</label>
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="Technician">


                                </div>
                                <div class="col-4">
                                    <label for="userName">Remarks</label>
                                    <textarea id="userName" name="userName" type="text" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-1">Submit</button>
                            </div>
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