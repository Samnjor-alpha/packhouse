<?php
include 'farmercontroller.php';

$_SESSION['msg']="";
$_SESSION['msg_class']="";
$_SESSION['msg_icon']="";
if (isset($_POST['addfarmer'])) {
    $farmername = filter_var(stripslashes($_POST['fnames']), FILTER_SANITIZE_STRING);
    $telno = filter_var(stripslashes($_POST['telno']), FILTER_SANITIZE_STRING);
    $idno = filter_var(stripslashes($_POST['idno']), FILTER_SANITIZE_STRING);
    $address = filter_var(stripslashes($_POST['address']), FILTER_SANITIZE_STRING);


    if (empty($farmername)) {
        $_SESSION['msg'] = "Farmer's name must be added";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";

    }elseif (empty($telno)){
        $_SESSION['msg'] = "Farmer's mobile Number must be added";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";
    }elseif (empty($idno)){
        $_SESSION['msg'] = "Farmer's National Id no must be added";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";
    }elseif (empty($address)){
        $_SESSION['msg'] = "Farmer's Address must be added";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";
    }elseif(checktelexists($telno)){
        $_SESSION['msg'] = "Farmer's Mobile number is associated with an account";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";
    }elseif (checkidexists($idno)){
        $_SESSION['msg'] = "Farmer's National ID number is associated with an account";
        $_SESSION['msg_class'] = "alert-danger";
        $_SESSION['msg_icon'] = "bi-exclamation-octagon";
    }else{
        if (addfarmer($farmername,$telno,$idno,$address)){
           echo '<script>
           alert("Farmer added successfully");
           window.location.href = "evaluate?idno='.$idno.'";
           </script>';
        }
    }
}