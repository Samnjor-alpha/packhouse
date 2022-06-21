<?php
include 'evaluatefarmercontroller.php';

if (!isset($_GET['idno'])){
    echo"<script>
alert('Select a farmer to evaluate');
window.location.href='managefarmers.php';
</script>";
}elseif ($_GET['idno']){
    if (!farmersexist($_GET['idno'])){
        echo"<script>
alert('Farmer does not exist or is already evaluated');
window.location.href='managefarmers.php';
</script>";
    }
}