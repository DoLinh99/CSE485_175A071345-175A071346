<?php 
	$conn = mysqli_connect('localhost','root','','btl')or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
?>