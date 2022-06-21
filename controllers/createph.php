<?php
include '../database/config.php';

$username="Packhouse";
$email='janiph@hi2.in';
$password="janiph123";
$role='PHM';
$fname="Shadrack Mule";
$hash=password_hash($password,PASSWORD_DEFAULT);

$createtm="insert into staff set
                     username='$username',
                     email='$email',
                     password='$hash',
                     role='$role',
                     fnames='$fname'
                     ";
if (mysqli_query($conn,$createtm)){
    echo "created PHM successfully";
}else{
    echo "error";
}
