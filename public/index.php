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



<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4" style="font-size: 60px;">
    <strong>NUBS-UCC Database</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575; " action="submit.php" method="POST">

      <!-- Full name -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Full Name</label>

        <input style="font-size: 50px;" type="text" name="full_name" class="form-control" placeholder="Fullname..." size="500" required>
      </div>
      	<!-- End Full name -->

      	<hr />

      <!-- Program -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Program</label>

        <input style="font-size: 50px;" type="text" name="program" class="form-control" placeholder="Program..." size="500" required>
      </div>
		<!-- End Program -->

		<hr />

		<!-- Level -->
      <div class="md-form" style="margin: 20px auto; font-size: 50px;">
      	<label style="color: #000;">Level</label>
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
      	<label style="color: #000;">Hall of Affiliation</label>

        <select name="hall" class="browser-default custom-select" style="height: 60px; font-size: 40px;" required>
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
      	<label style="color: #000;">Wings</label>

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
      	<label style="color: #000;">Mother Church</label>

        <input style="font-size: 50px;" type="text" name="mother_church" class="form-control" placeholder="Church name, Location..." size="500" required>
      </div>
     <!-- End Mother church -->

     <hr />

     <!-- Birth date -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Date of birth</label>

        <input style="font-size: 50px;" type="date" name="birth_date" class="form-control" size="500" required>
      </div>
     <!-- End Birth date -->

     <hr />

     <!-- Phone Number -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Phone number</label>

        <input style="font-size: 50px;" type="tel" name="phone_number" class="form-control" size="500" placeholder="number1 - number2..." required>
      </div>
     <!-- End Phone Number -->

     <!-- Email Address -->
      <div class="md-form" style="margin: 20px auto;">
      	<label style="color: #000;">Email Address</label>

        <input style="font-size: 50px;" type="email" name="email" class="form-control" size="500" placeholder="example@email.com" required>
      </div>
     <!-- End Email Address -->

     <hr />
     <br />


      <!-- Sign in button -->
      <button style="font-size: 50px; margin: 20px auto;" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>


    </form>
    <!-- Form -->

    <br />

	<a href="admin.php" style="font-size: 40px; text-decoration: underline; margin: 60px auto;">Generate CSV file</a>

  </div>

</div>
<!-- Material form login -->


</body>
</html>