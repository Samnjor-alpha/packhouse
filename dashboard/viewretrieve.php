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

            <div class="offset-2 col-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="d-flex flex-row rounded">

                                    <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                        <dl>


                                            <dd><h5 class="font-weight-bolder text-dark">Raw Material:</h5></dd>
                                            <dt>Potatoes</dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Quantity:</h5></dd>
                                            <dt><?php echo "50kgs" ?></dt>
                                            <dd><h5 class="font-weight-bolder text-dark">Date Retrieved:</h5></dd>
                                            <dt><?php echo date("D, d/M/Y") ?></dt>
                                        </dl>

                                    </div>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rejected quantity</h5>
                        <form  method="post" action="" class="mt-5">
                            <div>



                                <div class="row">

                                    <div class="col-6">
                                        <label for="userName">Date</label>
                                        <input id="userName" value="<?php
                                        echo date("dd-mm-yyyy")?>" name="plantno" type="date" class="form-control">
                                    </div>

                                    <div class="col-6">
                                        <label for="userName">Quantity (KG)</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="userName">Reasons/Remarks</label>
                                    <textarea id="userName" name="userName" type="text" class="form-control"></textarea>
                                </div>
                                <div class="col-4 mt-4">
                                    <button class="btn btn-success">Record</button>
                                </div>



                            </div>
                        </form>

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