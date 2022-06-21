<?php
include '../database/config.php';
include '../controllers/helpercontroller.php';
include '../controllers/authcontroller.php';
include '../controllers/_addfarmer.php';
include '../controllers/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <title>Add Farmer</title>
    <?php include '../public/stylesheets.php'; ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
      // Hide the text input box in default
        function myFunction() {
            if($('#gridCheck').prop('checked')) {
                $('#attachments').css('display','block');
            }else{
                $('#attachments').css('display','none');
            }
        }
    </script>
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
        <h1>Farms</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item">Farms</li>
                <li class="breadcrumb-item active">Add Farmer</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="row justify-content-center">

                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="card  border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-left">
                                            <h1 class="h4 text-gray-900 mb-4">Add New Farmer</h1>
                                        </div>
                                        <div class="offset-2 col-7">

                                            <?php if (!empty($_SESSION['msg'])): ?>
                                                <div class="alert <?php echo $_SESSION['msg_class'] ?> alert-dismissible fade show" role="alert">
                                                    <i class="bi <?php echo $_SESSION['msg_icon'] ?> me-1"></i>
                                                    <?php echo $_SESSION['msg']?>

                                                    <?php unset($_SESSION['msg'],$_SESSION['msg_class'],$_SESSION['msg_icon']) ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>


                                        <form class="row g-3">

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                                                    <label for="floatingName">First Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                                                    <label for="floatingName">Last Name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input  type="tel"  pattern="[0-9]{3}[0-9]{9}" class="form-control" id="floatingName" placeholder="Your Name">
                                                    <label for="floatingName">Mobile No</label>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input  type="number" min="1"   class="form-control" id="floatingName" placeholder="Your Name">
                                                    <label for="floatingName">National ID No</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea type="text"   class="form-control" id="floatingName" placeholder="Address"></textarea>
                                                    <label for="floatingName">Address</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input"  onchange="myFunction()" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Attach Documents
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="attachments" style="display: none">
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Farmer's Profile picture</label>
                                                    <div class="col-sm-6">
                                                        <input  accept=".jpg, .png" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Farmer's ID front</label>
                                                    <div class="col-sm-6">
                                                        <input  accept=".jpg, .png" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Farmer's ID back</label>
                                                    <div class="col-sm-6">
                                                        <input  accept=".jpg, .png" class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">Add Farmer</button>

                                            </div>
                                        </form><!-- End Multi Columns Form -->



                                    </div>
                                </div>
                            </div>
                        </div>
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
