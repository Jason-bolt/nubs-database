<?php

	include("db.php");


	$filename = "database.csv";

	$file = fopen("php://output", "w");
	header('Content-type: application/csv');
	header('Content-Disposition: attachment; filename=' . $filename);

	// fetching the database columns from the database
	$query = "select column_name from information_schema.columns where table_schema='nubs_ucc' and table_name='nubs'";
	$columns = mysqli_query($connection, $query);

	while ($column = mysqli_fetch_row($columns)) {
		$column_header[] = strtoupper($column[0]), 50;
	}
	fputcsv($file, $column_header);	


	// fetching the data from the database
	$query1 = "SELECT * FROM nubs";
	$data = mysqli_query($connection, $query1);	
	if(mysqli_num_rows($data) > 0) {    
    while($row = mysqli_fetch_assoc($data)) {
      fputcsv($file, $row);
    }
  }



	// $output = '';

	// $query = "SELECT * FROM nubs";
	// $result = mysqli_query($connection, $query);

	// if (mysqli_num_rows($result) > 0) {
	// 	$output .= '
	// 		<table class"table" bordered="1">
	// 		<tr>
	// 				<th>Full name</th>
	// 				<th>Portfolios</th>
	// 				<th>Wings</th>
	// 		</tr>
	// 	';

	// while ($row = mysqli_fetch_array($result)) {
	// 	$output .= '
	// 		<tr>
	// 			<td>' . $row["full_name"] . '</td>
	// 			<td>' . $row["portfolios"] . '</td>
	// 			<td>' . $row["wings"] . '</td>
	// 		</tr>
	// 	';
	// }

	// $output .= '</table>';

	// // Header files
	// header("Content-Type: application/xls");
	// header("Content-disposition: attachment; filename=database.xls");
	// echo $output;

	// }


?>