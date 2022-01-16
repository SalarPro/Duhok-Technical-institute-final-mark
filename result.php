<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet' type='text/css' href='css/login.css'>
<link rel='stylesheet' type='text/css' href='css/select_menu.css'>
</head>
<body>
 <div class="container" style="background-color:#f1f1f1">
      <button onclick="history.back()" class="cancelbtn">زڤرین</button>
    </div>
<?php


$_SESSION['std_code'] = $_POST['stdcode'];



include($_POST['class_name'].'.php');

// if ($_POST['cars_'] == 1){
//     include('acc_2_mor.php');
// }else

// if ($_POST['cars_'] == 2){
//     include('ba_2_mor.php');
// }else 

// if ($_POST['cars_'] == 3){
//     include('hm_2_mor.php');
// }else 

// if ($_POST['cars_'] == 4){
//     include('mis_2_mor.php');
// }else 

// if ($_POST['cars_'] == 5){
//     include('mt_2_mor.php');
// }else 

// if ($_POST['cars_'] == 6){
//     include('acc_2_eve.php');
// }else 

// if ($_POST['cars_'] == 7){
//     include('ba_2_eve.php');
// }else 

// if ($_POST['cars_'] == 8){
//     include('hm_2_eve.php');
// }else 

// if ($_POST['cars_'] == 9){
//     include('mis_2_eve.php');
// }

?>

</body>