<?php

include("db.php");
	
if (!isset($_POST['submit'])) {
	header("Location: index.php");
}

 // print_r($_POST);

// fields to be entered into the database
$wing_arr = $_POST['wing'];
$wing = '';
$count = 0;
foreach ($wing_arr as $wings) {
	$wing .= ++$count . "." . $wings . "&nbsp;&nbsp;";
}

$full_name = ucwords($_POST['full_name']);
$program = ucwords($_POST['program']);
$level = $_POST['level'];
$hall = $_POST['hall'];
if ($hall == "Choose a hall") {
	$hall = null;
}
$mother_church = $_POST['mother_church'];
$birth_date = $_POST['birth_date'];
$phone_number = $_POST['phone_number'];

// query to check if user exists
$check_query = "SELECT * FROM nubs";
$check_query .= " WHERE full_name = '{$full_name}'";
$already_in = mysqli_query($connection, $check_query);
if (mysqli_num_rows($already_in) > 0) {
	header("Location: fail.php");
	// print_r($already_in);
	// echo mysqli_num_rows($already_in) > 0;
}else{
	
// query to store data from member
$query = "INSERT into nubs(";
$query .= "full_name, program, level, hall_of_affiliation, wing,";
$query .= " mother_church, date_of_birth, phone_number";
$query .= ") VALUES (";
$query .= "'{$full_name}', '{$program}', '{$level}', '{$hall}',";
$query .= " '{$wing}', '{$mother_church}', '{$birth_date}', '{$phone_number}'";
$query .= ")";
$result = mysqli_query($connection, $query);

if ($result) {
	header("Location: success.php");
}else{
	echo mysqli_error($connection);
}

}


?>