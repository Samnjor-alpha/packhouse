<?php
function checkuserexists($email): bool
{
 global $conn;
 $checkemail=mysqli_query($conn,"select * from staff where email='$email' and role='PHM'");
 if (mysqli_num_rows($checkemail)>0){
     return true;
 }else{
     return false;
 }

}
function loginauth($email,$password): bool
{
    global $conn;
    $auth=mysqli_query($conn,"select  * from staff where email='$email' and role='PHM'");
    $row=mysqli_fetch_assoc($auth);
    if (password_verify($password,$row['password'])){
        $_SESSION['ph_role']=$row['role'];
        $_SESSION['ph_id']=$row['id'];
        $_SESSION['ph_names']=$row['fnames'];
        $_SESSION['ph_last_login']=$row['last_login'];
        return true;
    }else{
        return false;
    }

}
