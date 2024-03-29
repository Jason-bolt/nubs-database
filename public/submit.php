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
	$wing .= ++$count . "." . $wings . "  ";
}

$full_name = ucwords(mysqli_real_escape_string($connection, $_POST['full_name']));
$program = ucwords(mysqli_real_escape_string($connection, $_POST['program']));
$level = $_POST['level'];
$hall = $_POST['hall'];
if ($hall == "Choose a hall") {
	$hall = null;
}
$mother_church = ucwords(mysqli_real_escape_string($connection, $_POST['mother_church']));
$birth_date = $_POST['birth_date'];
$phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$guardian = ucwords(mysqli_real_escape_string($connection, $_POST['guardian']));
$guardian_number1 = ucwords(mysqli_real_escape_string($connection, $_POST['guardian_number1']));
$guardian_number2 = ucwords(mysqli_real_escape_string($connection, $_POST['guardian_number2']));

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
$query .= " mother_church, date_of_birth, phone_number, email,";
$query .= " guardian, guardian_number1, guardian_number2 ";
$query .= ") VALUES (";
$query .= "'{$full_name}', '{$program}', '{$level}', '{$hall}',";
$query .= " '{$wing}', '{$mother_church}', '{$birth_date}', '{$phone_number}', '{$email}',";
$query .= " '{$guardian}', '{$guardian_number1}', '{$guardian_number2}' ";
$query .= ")";
$result = mysqli_query($connection, $query);

if ($result) {
	header("Location: success.php");
}else{
	echo mysqli_error($connection);
}

}


?>