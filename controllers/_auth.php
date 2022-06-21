<?php
include 'authcontroller.php';
$msg="";
$msg_class="";
$msg_icon="";
if (isset($_POST['logintm'])) {
    $email = filter_var(stripslashes($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(stripslashes($_POST['pwd']), FILTER_SANITIZE_STRING);
    if (empty($email)) {
        $msg = "Enter your Email";
        $msg_class = "alert-danger";
        $msg_icon = "bi-exclamation-octagon";

    } elseif (empty($password)) {
        $msg = "Enter your password";
        $msg_class = "alert-danger";
        $msg_icon = "bi-exclamation-octagon";
    } else {
        if (!checkuserexists($email)) {
            $msg = "Email not registered.Contact administrator for account registration";
            $msg_class = "alert-danger";
            $msg_icon = "bi-exclamation-octagon";
        } else {
            if(!loginauth($email,$password)){
                $msg="Incorrect password";
                $msg_class="alert-danger";
                $msg_icon="bi-exclamation-octagon";
            }else{
redirect('dashboard/home.php');
            }
        }
    }
}