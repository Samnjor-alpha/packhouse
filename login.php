<?php
include 'database/config.php';
include 'controllers/helpercontroller.php';
include 'controllers/_auth.php';
if (checklogin()){
    redirect('dashboard/home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include 'public/stylesheets.php'; ?>
</head>

<body id="body">

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-8 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="" class=" d-flex align-items-center">

                                <h1 class="text-capitalize text-white font-bolder"><strong>Pack house Manager Portal</strong></h1>
                            </a>
                        </div>
                        <!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 ">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>
                                <div class="mb-1">
                                    <?php if (!empty($msg)): ?>
                                        <div class="alert <?php echo $msg_class ?> alert-dismissible fade show" role="alert">
                                            <i class="bi <?php echo $msg_icon ?> me-1"></i>
                                            <?php echo $msg?>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <form class="row g-3" action="" method="post">

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" name="email" class="form-control" id="floatingInput" required placeholder="name@example.com">
                                            <label for="floatingInput">Enter Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="pwd" class="form-control" id="floatingPassword" required placeholder="Password">
                                            <label for="floatingPassword">Enter Password</label>
                                        </div>


                                    </div>


                                    <button type="submit" name="logintm" class="btn btn-success btn-user btn-block">
                                        Login
                                    </button>

                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php include 'public/scripts.php'?>

</body>

</html>