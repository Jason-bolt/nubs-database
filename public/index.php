<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NUBS-UCC Database</title>
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">

		/*body{
			font-size: 60px;
			line-height: 1.3em;
		}*/

		label{
			margin-left: 5px;
		}

	</style>
</head>
<body>


<!-- 
	*Name
*Program
*Level
*Hall of affiliation
*Wing(s)
*Mother Church (Name of church and location)
*Birth date(Day/Month) 
*Mobile Number
 -->


<section class="container py-1 text-center">
	<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>NUBS-UCC Database</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575; " action="submit.php" method="POST">

      <!-- Full name -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Full Name</h5>

        <input type="text" name="full_name" class="form-control" placeholder="Fullname..." required>
      </div>
      	<!-- End Full name -->

      	<hr />

      <!-- Program -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Program</h5>

        <input type="text" name="program" class="form-control" placeholder="Program..." required>
      </div>
		<!-- End Program -->

		<hr />

		<!-- Level -->
      <div class="md-form" style="margin: 20px auto;	">
      	<h5 style="color: #000;">Level</h5>
      	<br />

        <label class="radio-inline">
	      <input type="radio" value="100" name="level" checked>100
	    </label>

	    <label class="radio-inline">
	      <input type="radio" value="200" name="level">200
	    </label>
	    
	    <label class="radio-inline">
	      <input type="radio" value="300" name="level">300
	    </label>

	    <label class="radio-inline">
	      <input type="radio" value="400" name="level">400
	    </label>

	    <label class="radio-inline">
	      <input type="radio" value="500" name="level">500
	    </label>

	    <label class="radio-inline">
	      <input type="radio" value="600" name="level">600
	    </label>

      </div>
		<!-- End Level -->

		<hr />

		<!-- Hall of Affiliation -->
      <div class="md-form" style="margin: 20px auto; ">
      	<h5 style="color: #000;">Hall of Affiliation</h5>

        <select name="hall" class="browser-default custom-select" required>
		  <option selected>Choose a hall</option>
		  <option value="Atlantic Hall (ATL)">Atlantic Hall (ATL)</option>
		  <option value="Adehye Hall">Adehye Hall</option>
		  <option value="Oguaa Hall">Oguaa Hall</option>
		  <option value="Casford Hall">Casford Hall</option>
		  <option value="Valco Hall">Valco Hall</option>
		  <option value="Kwame Nkrumah Hall (KNH)">Kwame Nkrumah Hall (KNH)</option>
		  <option value="Supernuation Hall">Supernuation Hall</option>
		  <option value="SRC Hall">SRC Hall</option>
		</select>
      </div>
		<!-- End Hall of Affiliation -->

		<hr />

		<!-- Wings -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Wings</h5>

		<div class="checkbox">
			<label><input type="checkbox" name="wing[]" value="Bible Studies Wing">Bible Studies Wing</label>
		</div>

		<div class="checkbox">
			<label><input type="checkbox" name="wing[]" value="Chariots of Praise">Chariots of Praise</label>
		</div>

		<div class="checkbox">
			<label><input type="checkbox" name="wing[]" value="Organizing Wing">Organizing Wing</label>
		</div>

		<div class="checkbox">
			<label><input type="checkbox" name="wing[]" value="Vessels of Peace">Vessels of Peace</label>
		</div>

		<div class="checkbox">
			<label><input type="checkbox" name="wing[]" value="Evangelism Wing">Evangelism Wing</label>
		</div>

      </div>
		<!-- End Wings --> 

		<hr />     

 	<!-- Mother Church -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Mother Church</h5>

        <input type="text" name="mother_church" class="form-control" placeholder="Church name, Location..." required>
      </div>
     <!-- End Mother church -->

     <hr />

     <!-- Birth date -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Date of birth</h5>

        <input type="date" name="birth_date" class="form-control" required>
      </div>
     <!-- End Birth date -->

     <hr />

     <!-- Phone Number -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Phone number</h5>

        <input type="tel" name="phone_number" class="form-control" placeholder="number1 - number2..." required>
      </div>
     <!-- End Phone Number -->

     <hr />

     <!-- Email Address -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Email Address</h5>

        <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
      </div>
     <!-- End Email Address -->

     <hr />

     <!-- Guardian -->
      <div class="md-form" style="margin: 20px auto;">
      	<h5 style="color: #000;">Guardian details</h5>

        <input type="text" name="guardian" class="form-control" placeholder="Name and relationship with guardian" required>
        <p>e.g: Mr. Jane Doe (Father)</p>

        <br />

        <input type="tel" name="guardian_number1" class="form-control" placeholder="Phone number 1" required>

        <br />

        <input type="tel" name="guardian_number2" class="form-control" placeholder="Phone number 2 (Optional)">
      </div>
     <!-- End Guardian -->

     <hr />
     <br />


      <!-- Sign in button -->
      <button style="margin: 20px auto;" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>


    </form>
    <!-- Form -->

    <br />

	<a href="admin.php" style="text-decoration: underline; margin: 60px auto;">Generate CSV file</a>

  </div>

</div>
<!-- Material form login -->
</section>





</body>
</html>