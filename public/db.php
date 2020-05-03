<?php

	// define("DB_HOST", "remotemysql.com");
	// define("DB_USER", "XLL3UiaxH9");
	// define("DB_PASSWORD", "YmB0mCrhdY");
	// define("DB_NAME", "XLL3UiaxH9");

	// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// if (mysqli_connect_error()) {
	// 	die("Database connection failed "
	// 		.
	// 	 mysqli_connect_error()
	// 	);
	// }



	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "nubs_ucc");

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (mysqli_connect_error()) {
		die("Database connection failed "
			.
		 mysqli_connect_error()
		);
	}

?>