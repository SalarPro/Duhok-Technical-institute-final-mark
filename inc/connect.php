<?php
include('constant.php');
	$link = mysqli_connect($server,$username,$password,$database);

	if(!$link)
	{
        echo mysqli_error($link);
		die("Error in Conection " . mysqli_connect_error());
}
?>