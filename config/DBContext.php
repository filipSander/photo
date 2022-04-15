<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'photo');

if( $connection == false ){
	echo 'Не удалось подключится к бд <br>';
	echo mysql_connect_error();
	exit();
}