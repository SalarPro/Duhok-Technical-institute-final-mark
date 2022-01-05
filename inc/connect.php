<?php
include('constant.php');
	$link = mysqli_connect($server,$username,$password,$database);



	$sSQL= 'SET CHARACTER SET utf8';
	mysqli_query($link,$sSQL) ;

	if(!$link)
	{
        echo mysqli_error($link);
		die("Error in Conection " . mysqli_connect_error());
}
?>