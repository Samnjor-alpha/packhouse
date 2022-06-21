<?php
if (isset($_GET['action'])){
   if ($_GET['action']=='logout'){
      session_destroy();
      redirect('login.php');
   }
}
function evaluationnumber(){
    $ref="GGR-";
    $new_ref = $ref.mt_rand(0,100900);

    return  checkifrefexists($new_ref);
}
function checkifrefexists($new_ref){
    global $conn;
    $select = mysqli_query($conn,"select * from evaluation where evaluation_no='$new_ref'");

    if(mysqli_num_rows($select)>0)
    {
        return evaluationnumber();
    }
    else
    {
        return $new_ref;
    }

}

function plantingno(){
    $ref="PLNT";
    $new_ref = $ref.mt_rand(0,100900);

    return  checkifplantexists($new_ref);
}
function checkifplantexists($new_ref){
    global $conn;
    $select = mysqli_query($conn,"select * from evaluation where evaluation_no='$new_ref'");

    if(mysqli_num_rows($select)>0)
    {
        return plantingno();
    }
    else
    {
        return $new_ref;
    }

}
function active($currect_page): void
{
    $url_array =  explode('/', $_SERVER['PHP_SELF']) ;
    $url = end($url_array);
    if($currect_page == $url){
        echo 'active'; //class name in css
    }
}
function show($currect_page): void
{
    $url_array =  explode('/', $_SERVER['PHP_SELF']) ;
    $url = end($url_array);
    if($currect_page == $url){
        echo 'show'; //class name in css
    }else{
        echo 'collapsed';
    }
}
function redirect($location): void
{
    header("location: ".BASE_URL.$location);
}
function checklogin(): bool
{
    if (isset($_SESSION['ph_id'])){
        return true;
    }else{
        return false;
    }
}
function pesticideslist(): void
{
    global $conn;
    $result=mysqli_query($conn,"select * from pesticides");
    while ($row= mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
}
function fertiliserlist(): void
{
    global $conn;
    $result=mysqli_query($conn,"select * from fertiliser");
    while ($row= mysqli_fetch_assoc($result)) {
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
}