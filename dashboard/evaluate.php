<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/farmercontroller.php';
include '../controllers/_evaluate.php';
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
                <li class="breadcrumb-item">Farms</li>
                <li class="breadcrumb-item">Farmers</li>
                <li class="breadcrumb-item active">Evaluate Farmer</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
                <!-- Page Heading -->
                <section class="section dashboard">
                    <div class="row">

                        <div class="d-sm-flex align-items-center justify-content-between">

                            <div class="offset-2 col-7">

                                <?php if (!empty($_SESSION['msg'])): ?>
                                    <div class="alert <?php echo $_SESSION['msg_class'] ?> alert-dismissible fade show" role="alert">
                                        <i class="bi <?php echo $_SESSION['msg_icon'] ?> me-1"></i>
                                        <?php echo $_SESSION['msg']?>

                                        <?php unset($_SESSION['msg'],$_SESSION['msg_class'],$_SESSION['msg_icon']) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Farmers</h5>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="d-flex flex-row rounded">
                                                        <div class="p-0  w-25 h-25">
                                                            <img src="../assets/img/avatar.png" width="150px" height="150px" class="img-thumbnail border-0" />

                                                        </div>
                                                        <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                                            <dl>
                                                                <dd><h5 class="font-weight-bolder text-dark">Farmers Name</h5></dd>
                                                                <dt><?php echo getfarmername($_GET['idno']) ?></dt>
                                                                <dd><h5 class="font-weight-bolder text-dark">Mobile No:</h5></dd>
                                                                <dt><?php echo getfarmertel($_GET['idno']) ?></dt>
                                                                <dd><h5 class="font-weight-bolder text-dark">National ID No:</h5></dd>
                                                                <dt><?php echo $_GET['idno']; ?></dt>
                                                            </dl>
                                                        </div>
                                                        <div class="pl-3 pt-2 pr-2 pb-2 w-50 border-left">
                                                            <dl>
                                                                <dd><h5 class="font-weight-bolder text-dark">Address</h5></dd>
                                                                <dt><address>
                                                                        <?php echo getfarmeraddress($_GET['idno']) ?>
                                                                    </address></dt>
                                                                <dd><h5 class="font-weight-bolder text-dark">Evaluation No:</h5></dd>
                                                                <?php if (!isset($_GET['evaluate'])){ ?>
                                                                <dt>N/A</dt>
                                                                <?php }else{ ?>
                                                                    <?php echo evaluationnumber() ?>
                                                                <?php }?>
                                                                <dd><h5 class="font-weight-bolder text-dark">Evaluation Date:</h5></dd>
                                                                <dt><?php echo date("D, d/M/Y") ?></dt>
                                                            </dl>
                                                            <?php if (!isset($_GET['evaluate'])){ ?>
                                                            <p class="float-right text-right m-0"><a href="evaluate.php?idno=<?php echo $_GET['idno']?>&&evaluate" class="btn btn-success"><i class="fas fa-play"></i> Start Evaluation</a></p>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>





                                        </div>
                                    </div>
                                </div>
                    <?php if (isset($_GET['evaluate'])){ ?>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                   Crops Interested
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <strong>Tick Crops(tick where applicable)</strong>

                                        <form method="post" action=""  enctype="multipart/form-data" class="row g-3 mt-1">
                                            <fieldset class="row mb-3">
                                                    <div class="col-sm-6">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                   Crop 1
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                  Crop 2
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Crop 3
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Crop 4
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Crop 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10 offset-sm-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                             Crop 6
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
<div class="offset-3 col-6">
    <button type="submit" class="btn  btn-success" name="add_logbook">Submit</button>
</div>

                                        </form>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    Past History
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <strong>Past History</strong>

                                        <form action="" method="post" enctype="multipart/form-data" class="row g-3 mt-1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <p>1. Have you ever engaged in farming for another Exporting company before?</p>
                                                   <div class="row">
                                                       <div class="col-6">
                                                           <div class="form-check">
                                                               <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                               <label class="form-check-label" for="gridCheck1">
                                                                   Yes
                                                               </label>
                                                           </div>
                                                       </div>
                                                       <div class="col-6">
                                                           <div class="form-check">
                                                               <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                               <label class="form-check-label" for="gridCheck1">
                                                                   NO
                                                               </label>
                                                           </div>
                                                       </div>
                                                   </div>

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <p>2. How long have you been farming for export products??</p>
                                                        <label for="remarks">Remarks/Reason</label>
                                                        <textarea class="form-control" id="remarks"></textarea>

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <p>3. Have you ever engaged in farming for another Exporting company before?</p>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        Yes
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                    <label class="form-check-label" for="gridCheck1">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="offset-3 col-6">
                                                <button type="submit" class="btn  btn-success" name="add_logbook">Submit</button>
                                            </div>
                                        </form>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThreee">
                                    Farm History
                                </a>
                            </div>
                            <div id="collapseThreee" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                    <form action="" method="post" enctype="multipart/form-data" class="row g-3 mt-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>1. How many acreages of land do you have to set aside for production?</p>
                                                    <label for="remarks">Remarks/Reason</label>
                                                    <textarea class="form-control" id="remarks"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>2. What is the type of soil on your farm?</p>
                                                    <div class="col-sm-4">

                                                        <select class="form-control" id="remarks">
                                                            <option selected>Select type of soil</option>
                                                            <option>Loam</option>
                                                            <option>Clay</option>
                                                            <option>sandy</option>
                                                            <option>alluvial </option>
                                                            <option>sandy loamy</option>
                                                            <option>clay loamy</option>
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>3. Do you have water extract permit?</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="offset-3 col-6">
                                            <button type="submit" class="btn  btn-success" name="add_logbook">Submit</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Pest Control
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                        <form method="post" action="" enctype="multipart/form-data" class="row g-3 mt-2">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>1. Where do you purchase or source your pesticides?</p>
                                                    <label for="remarks">Remarks/Reason</label>
                                                    <textarea class="form-control" id="remarks"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>2. Is the pest control record available in your premises?</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <p>3. Are you keeping the list of all pesticides you apply on the crops?   </p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <button type="submit" name="add_rsl" class="btn  btn-success">Add</button>
                                        </form>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">
                               Suppliers/Agents/Brokers
                                </a>
                            </div>
                            <div id="collapse4" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                    <form method="post" action="" enctype="multipart/form-data" class="row g-3 mt-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p>1. Are you contracted by agents or suppliers?</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                NO
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p>2. Is the contract still valid?</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                NO
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <button type="submit" name="add_rsl" class="btn  btn-success">Add</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse5">
                                 Personel Staff
                                </a>
                            </div>
                            <div id="collapse5" class="collapse" data-parent="#accordion">
                                <div class="card-body">

                                    <form method="post" action="" enctype="multipart/form-data" class="row g-3 mt-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p>1.Do you have knowledge on intended farming crops?</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                NO
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p>2.Are the people handling plant protection product ever been trained on effective and safe use of pesticides?</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                NO
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <button type="submit" name="add_rsl" class="btn  btn-success">Finish evaluation</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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