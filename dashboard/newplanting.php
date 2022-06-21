<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>New Planting</title>
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
        <h1>Production</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">New planting</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="card" id="addfarmerform">
                <div class="card-body">
                    <?php if (!isset($_GET['startplant'])){ ?>
                        <h5 class="card-title">New Planting </h5>
                        <form method="get" class="offset-3 col-6">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="farms">Select farm to start new planting</label>
                                        <select name="startplant" class="form-select form-control" id="farms">
                                            <option selected disabled>Select farm</option>
                                            <option value="BLOCK-3232">Farm 1</option>
                                            <option value="BLOCK-432">Farm 2</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-success">Continue</button>
                                </div>
                            </div>


                        </form>




                    <?php }elseif (!isset($_GET['checklist'])&& $_GET['startplant']){?>
                        <h5 class="card-title">Checklist</h5>


                    <?php include 'forms/checklist.php'?>

                    <?php }else{ ?>
                    <h5 class="card-title">Planting</h5>
                   <?php include 'forms/planting.php'?>
                </div>
                <?php }?>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php
include 'modals/logout.php';
include '../public/scripts.php'?>

</body>

</html>