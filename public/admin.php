<!DOCTYPE html>
<html>
<head>
	<title>NUBS-UCC Database</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">

		body{
			font-size: 60px;
			line-height: 1.3em;
		}

		input[type=radio] {
		    -ms-transform: scale(3); /* IE 9 */
    		-webkit-transform: scale(3); /* Chrome, Safari, Opera */
    		transform: scale(3);
    		margin: 0 20px 25px 20px;
		}

		input[type=checkbox] {
		    -ms-transform: scale(3); /* IE 9 */
    		-webkit-transform: scale(3); /* Chrome, Safari, Opera */
    		transform: scale(3);
    		margin: 0 35px 25px 35px;
		}

	</style>
</head>
<body>

<?php include('db.php'); ?>

<!-- Material form login -->
<!-- <div class="card"> -->

<h5 class="card-header info-color white-text text-center py-4" style="font-size: 60px;">
<strong>NUBS-UCC Database</strong>
</h5>
	  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">


<?php
	if (!isset($_POST['submit'])) {
?>
	    <!-- Form -->
    <form class="text-center" style="color: #757575; " action="admin.php" method="POST">

      <!-- Password -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Password</label>

        <input style="font-size: 50px;" type="password" name="password" class="form-control" placeholder="Password..." size="500" required>
      </div>
		<!-- End Password -->

		<hr />

	  <hr />
     <br />


      <!-- Sign in button -->
      <button style="font-size: 50px; margin: 20px auto;" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>


    </form>
    <!-- Form -->

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

	<table class="text-center table table-bordered">
	    <thead>
	      <tr>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Full name</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Program</th>
	      <th style="font-size: 38px; padding: 0 20px;" class="text-center">Level</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Hall of Affiliation</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Wing</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Mother Church</th>        
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Date of Birth</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Phone Number</th>
	      <th style="font-size: 38px; padding: 0 100px;" class="text-center">Email</th>
	      </tr>
	    </thead>
	  <tbody>
	  
	  <?php
	    while($result = mysqli_fetch_assoc($results))
	  {
	    ?>
	    <tr>
	    <td style="font-size: 35px;"><?php echo $result['full_name']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['program']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['level']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['hall_of_affiliation']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['wing']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['mother_church']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['date_of_birth']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['phone_number']; ?></td>
	    <td style="font-size: 35px;"><?php echo $result['email']; ?></td>
	    </tr>
	    <?php
	  }
	    ?>
	  </tbody>
  </table>

	<!-- download link tp get csv file -->
	<a href="download.php" class="btn btn-primary" style="font-size: 50px; margin: 60px auto;">Generate excel</a>

<?php
	}
?>


  </div>

<!-- </div> -->
<!-- Material form login -->


</body>
</html>