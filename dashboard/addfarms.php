<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>add Farms </title>
    <?php include '../public/stylesheets.php'; ?>
<!--<script>-->
<!--    $('#vehicle').css('display','block'); // Hide the text input box in default-->
<!--    function myFunction() {-->
<!--    if($('#owned').prop('checked')) {-->
<!--    $('#leaser').css('display','none');-->
<!--    } else {-->
<!--    $('#leasebtn').show();-->
<!--    $('#ownedbtn').hide();-->
<!--    $('#leaser').show();-->
<!--    }-->
<!--    }-->
<!--    </script>-->
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
            <div class="card" id="addfarmform">
                <div class="card-body">
                    <h5 class="card-title">Add Farm</h5>
                    <form class="">
                        <div class="row">



                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Farm Name</label>
                                <input id="fname" type="text" class="form-control" placeholder="Farm Name">

                            </div>
                            <div class="col-4">
                                <label for="fname">Farm Size (Acres)</label>
                                <input id="fname" type="text" class="form-control" placeholder="Farm size">

                            </div>
                            <div class="col-4">
                                <label for="fname">Arable Acres</label>
                                <input id="fname" type="text" class="form-control" placeholder="Arable Acres">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Location</label>
                                <input id="fname" type="text" class="form-control" placeholder="Location">

                            </div>
                            <div class="col-4">
                                <label for="fname">Latitude</label>
                                <input id="fname" type="text" class="form-control" placeholder="Latitude">

                            </div>
                            <div class="col-4">
                                <label for="fname">Longitude</label>
                                <input id="fname" type="text" class="form-control" placeholder="Longitude">

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Climate</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select climate</option>

                                    <option value="AK">Hot & Dry</option>
                                    <option value="HI">Cool & Wet</option>


                                </select>

                            </div>
                            <div class="col-4">
                                <label for="fname">Terrain</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select Terrain</option>

                                    <option value="AK">Flat</option>
                                    <option value="HI">Hilly</option>


                                </select>

                            </div>
                            <div class="col-4">
                                <label for="fname">Soil Type</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select Soil</option>

                                    <option value="AK">Loam</option>
                                    <option value="HI">Black Cotton</option>


                                </select>
                            </div>

                        </div>

                        <div id="leaser" style="display: none">
                            <div class="row">
                                <div class="col-4">
                                    <label for="fname">Leaser</label>
                                    <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;">
                                        <option selected disabled>Select Land Leaser</option>

                                        <option value="AK">Leaser 1</option>
                                        <option value="HI">Leaser 2</option>


                                    </select>

                                </div>
                                <div class="col-4">
                                    <label for="dateregistred">Start Date</label>
                                    <div class="input-group">
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-4">
                                    <label for="dateregistred">End Date</label>
                                    <div class="input-group">
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-6">
                                <input id="insertfarm" class="btn btn-success" type="submit" value="Add Farm">
                            </div>

                        </div>

                    </form>

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