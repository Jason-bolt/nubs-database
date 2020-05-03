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


<!-- Material form login -->
<div class="card">

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

        <input style="font-size: 50px;" type="text" name="password" class="form-control" placeholder="Password..." size="500" required>
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
	<!-- download link tp get csv file -->
	<a href="download.php" class="btn btn-primary" style="font-size: 50px; margin: 60px auto;">Generate excel</a>

<?php
	}
?>


  </div>

</div>
<!-- Material form login -->


</body>
</html>