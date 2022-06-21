<?php
function farmersexist($id): bool
{
    global $conn;
    $checkfarmer=mysqli_query($conn,"select * from farmers where farmer_idno='$id'");
    if (mysqli_num_rows($checkfarmer)>0){
        return true;
    }else{
        return false;
    }
}
function getfarmername($id)
{
    global $conn;
    $getname=mysqli_query($conn,"select farmer_name from farmers where farmer_idno='$id'");
    return mysqli_fetch_assoc($getname)['farmer_name'];
}
function getfarmertel($id)
{
    global $conn;
    $geTel=mysqli_query($conn,"select farmer_tel from farmers where farmer_idno='$id'");
    return mysqli_fetch_assoc($geTel)['farmer_tel'];
}
function getfarmeraddress($id): string
{
    global $conn;
    $getAdress=mysqli_query($conn,"select farmer_address from farmers where farmer_idno='$id'");
    return htmlspecialchars_decode(mysqli_fetch_assoc($getAdress)['farmer_address']);
}