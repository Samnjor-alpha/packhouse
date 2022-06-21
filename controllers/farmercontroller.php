<?php
function checktelexists($tel): bool
{
    global $conn;
    $checkphone = mysqli_query($conn, "select * from farmers where farmer_tel='$tel'");
    if (mysqli_num_rows($checkphone) > 0) {
        return true;
    } else {
        return false;
    }
}
function checkidexists($idno): bool
{
    global $conn;
    $checkid=mysqli_query($conn,"select * from farmers where farmer_idno='$idno'");
    if (mysqli_num_rows($checkid)>0){
        return true;
    }else{
        return false;
    }

}
function addfarmer($farmername,$telno,$idno,$address): bool
{
    global $conn;
    $hash=farmerpassword($idno);
    $addresss=html_entity_decode($address);
    $addfarmer="insert into farmers set 
                        farmer_name='$farmername',
                        farmer_tel='$telno',
                        farmer_idno='$idno',
                        farmer_address='$addresss',
                        password='$hash'
                        ";
    if (mysqli_query($conn,$addfarmer)){
        return true;
    }else{
        return false;
    }
}
function farmerpassword($pwd): string
{
    return password_hash($pwd,PASSWORD_DEFAULT);
}

