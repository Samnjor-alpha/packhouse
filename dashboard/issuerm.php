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
                <?php include '../navbars/inventory-navbar.php'?>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Issue Item</h5>
                        <form>
                            <div class="row">

                                <div class="col-6">

                                    <label for="dateregistred">Item Name</label>
                                    <select class="form-control form-select">
                                        <option selected disabled>select item</option>
                                        <option>Item 1</option>
                                        <option>Item 2</option>
                                    </select>


                                </div>
                                <div class="col-6">

                                    <label for="dateregistred">Quantity</label>
                                    <input id="dateregistred" type="text" class="form-control">


                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6">

                                    <label for="dateregistred">Issued to</label>
                                    <select class="form-control form-select">
                                        <option selected disabled>Select staff</option>
                                        <option>Item 1</option>
                                        <option>Item 2</option>
                                    </select>


                                </div>
                                <div class="col-6">

                                    <label for="dateregistred">Date issued</label>
                                    <input id="dateregistred" type="date" class="form-control">


                                </div>
                            </div>
                                <div class="col-4 mt-4">

                                    <button type="submit" class="btn btn-success">Issue</button>


                                </div>
                        </form>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Issued items</h5>
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Issued To</th>
                                <th>Date issued</th>


                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Seeds</td>
                                <td>150kgs</td>
                                <td>Staff 1</td>
                                <td>22nd/July/2022</td>


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