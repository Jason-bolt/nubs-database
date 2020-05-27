<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NUBS-UCC Database</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<?php include('db.php'); ?>

<!-- Material form login -->
<!-- <div class="card"> -->

<section class="container py-1 text-center">
	


<?php
	if (!isset($_POST['submit'])) {
?>
<div class="card">

	<h5 class="card-header info-color white-text text-center py-4">
	<strong>NUBS-UCC Database</strong>
	</h5>
	  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

	    <!-- Form -->
    <form class="text-center" style="color: #757575; " action="admin.php" method="POST">

      <!-- Password -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Password</h5>

        <input type="password" name="password" class="form-control" placeholder="Password..." required>
      </div>
		<!-- End Password -->

		<hr />

	  <hr />
     <br />


      <!-- Sign in button -->
      <button style="margin: 20px auto;" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>


    </form>
    <!-- Form -->

    </div>

<?php
	}else{
		$password = $_POST['password'];
		if ($password !== "Administrators Only") {
			$_POST['submit'] = null;
			header('Location: admin.php');
		}
?>
	<!-- Success -->
	
	<?php
		// Query to get all data from database
		$query = "SELECT * from nubs";
		$results = mysqli_query($connection, $query);
	?>

	<h5 class="info-color white-text text-center py-4">
	<strong>NUBS-UCC Database</strong>
	</h5>

	<table class="text-center table table-bordered" style="margin-top: 20px;">
	    <thead>
	      <tr>
	      <th class="text-center">Full name</th>
	      <th class="text-center">Program</th>
	      <th class="text-center">Level</th>
	      <th class="text-center">Hall of Affiliation</th>
	      <th class="text-center">Wing</th>
	      <th class="text-center">Mother Church</th>        
	      <th class="text-center">Date of Birth</th>
	      <th class="text-center">Phone Number</th>
	      <th class="text-center">Email</th>
	      <th class="text-center">Guardian</th>
	      <th class="text-center">Guardian Number 1</th>
	      <th class="text-center">Guardian Number 2</th>
	      </tr>
	    </thead>
	  <tbody>
	  
	  <?php
	    while($result = mysqli_fetch_assoc($results))
	  {
	    ?>
	    <tr>
	    <td><?php echo $result['full_name']; ?></td>
	    <td><?php echo $result['program']; ?></td>
	    <td><?php echo $result['level']; ?></td>
	    <td><?php echo $result['hall_of_affiliation']; ?></td>
	    <td><?php echo $result['wing']; ?></td>
	    <td><?php echo $result['mother_church']; ?></td>
	    <td><?php echo $result['date_of_birth']; ?></td>
	    <td><?php echo $result['phone_number']; ?></td>
	    <td><?php echo $result['email']; ?></td>
	    <td><?php echo $result['guardian']; ?></td>
	    <td><?php echo $result['guardian_number1']; ?></td>
	    <td><?php echo $result['guardian_number2']; ?></td>
	    </tr>
	    <?php
	  }
	    ?>
	  </tbody>
  </table>

	<!-- download link tp get csv file -->
	<a href="download.php" class="btn btn-primary" style="margin: 60px auto;">Generate excel</a>

<?php
	}
?>

	
	</div>
</section>



<!-- </div> -->
<!-- Material form login -->


</body>
</html>