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



$_SESSION['std_code'] = $_POST['uname'];
if ($_POST['cars_'] == 1){
    include('result2.php');
}

?>

</body>