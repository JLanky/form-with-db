<?php
$temp = $_SERVER['REQUEST_METHOD'] === 'POST' ? INPUT_POST : INPUT_GET;

$args = array(

	'name'    => FILTER_SANITIZE_EMAIL,
	'surname' => FILTER_SANITIZE_EMAIL,
	'email'   => FILTER_SANITIZE_EMAIL,
	'pass'    => FILTER_DEFAULT
);

$clear_variables = filter_input_array( $temp, $args );

//include_once "db_connect.php";
//$database = new Database();
//$database->connect();