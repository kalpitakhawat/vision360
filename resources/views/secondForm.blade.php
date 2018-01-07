<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		<div class="container">
			<section class="text-center">
				<!--Section heading-->
				<h3 class="font-bold h3 py-5">Fill Following Details For Registration</h3>
			</section>
			<form action="second" method="POST">
				{{csrf_field()}}
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="text" id="f_name" name="f_name" value="{{$u->f_name}}" class="form-control" disabled="">
									<label for="form1" class="">First Name</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="text" id="l_name" name="l_name" value="{{$u->l_name}}" class="form-control" disabled="">
									<label for="form1" class="">Last Name</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input placeholder="Select birth date" type="date" id="birth-date" class="form-control datepicker">
									<label for="date-picker-example">Birthdate</label>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="md-form">
									<input type="email" id="email" name="email" value="{{$u->email}}" class="form-control" disabled="">
									<label for="form1" class="">Email</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="text" id="mobile" name="mobile" class="form-control" >
									<label for="form1" class="">Mobile</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<strong>Gender</strong>
								<div class="form-group mt-2">
									<input name="gender" type="radio" id="radio1" value="male">
									<label for="radio1">Male</label>
								</div>
								<div class="form-group">
									<input name="gender" type="radio" id="radio2" value="female">
									<label for="radio2">Female</label>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="md-form">
									<textarea type="text" name="address" id="address" class="md-textarea" length="160"></textarea>
									<label for="form7">Address</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="text" id="city" name="city" class="form-control" >
									<label for="form1" class="">City</label>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="number" id="pincode" name="pincode" class="form-control" >
									<label for="form1" class="">Pincode</label>
								</div>
							</div>
							<div class="col-12 col-md-4" style="padding-top: 0.4em">
								<select class="form-group md-form mdb-select" name="sub_cast">
									<option value="" disabled selected>Choose your sub cast</option>
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</select>
								<label>Sub Cast</label>
							</div>
							<div class="col-12">
								<div class="md-form">
									<input type="text" id="edu_qualification" name="edu_qualification" class="form-control" >
									<label for="form1" class="">Education Qualification</label>
								</div>
							</div>
							<div class="col-12">
								<div class="md-form">
									<input type="text" id="expertise" name="expertise" class="form-control" >
									<label for="form1" class="">Expertise</label>
									<small id="expertiseHelp" class="form-text text-muted">Write Your All Expertise with seperated by coma (,)</small>
								</div>
							</div>
							<div class="col-12">
								<div class="md-form">
									<input type="text" id="present_activity" name="present_activity" class="form-control" >
									<label for="form1" class="">Present Activity</label>
									<small id="present_activityHelp" class="form-text text-muted">Write about what you doing currently</small>
								</div>
							</div>
							<div class="col-12">
								<div class="md-form">
									<textarea type="text" name="company_name_address" id="c_name_address" class="md-textarea" length="160"></textarea>
									<label for="form7">Company Name & Address</label>
								</div>
							</div>
							<div class="col-12 col-md-8">
								<div class="md-form">
									<input type="text" id="nature_of_business" name="nature_of_business" class="form-control" >
									<label for="form1" class="">Nature Of Business</label>
									<small id="present_activityHelp" class="form-text text-muted">for Example.. Software Company or Electronic commerce company</small>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="md-form">
									<input type="text" id="c_pincode" name="c_pincode" class="form-control" >
									<label for="form1" class="">Company Pincode</label>
								</div>
							</div>
							<div class="col-12">
								<div class="md-form">
									<input type="url" id="website" name="website" class="form-control" >
									<label for="form1" class="">Website</label>
								</div>
							</div>
							<div class="col-12">
								<div class="md-form">
									<textarea type="text" id="about" name="about" class="md-textarea" length="160"></textarea>
									<label for="form7">Bio</label>
									<small id="bioHelp" class="form-text text-muted">Describe your self in 160 characters</small>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Next</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		@include('./includes/scripts')
		<script type="text/javascript">
			$(document).ready(function() {
		$('.mdb-select').material_select();
		});
			$('.datepicker').pickadate({
				selectYears: true,
				selectMonths: true,
				selectYears: 60,
				max: -6570,
			});
		</script>
	</body>
</html>