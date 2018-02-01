<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		<header>
			<nav class="navbar navbar-dark justify-content-between">
				<a class="navbar-brand align-center"><img src="/img/vision_360.png" height="70px;" /></a>
			</nav>
		</header>
		<main>
			<div class="container" id="app">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3 py-5">Fill Following Details For Registration</h3>
				</section>
					<form method="post" enctype="multipart/form-data" action="/register/second">
					{{csrf_field()}}
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="row">
								<div class="col-12 col-md-4 text-center text-md-left">
									<img src="{{{ empty($u->avtar) ? '/img/user.png' : $u->avtar}}} " class="img-fluid z-depth-1" alt="Responsive image" style="height:200px !important; overflow: hidden;" id="avtar">
								
								</div>
								<div class="col-12 col-md-8">
									<div class="file-field pt-5 mt-md-5">
										<div class="btn btn-primary btn-sm">
											<span>Choose file</span>
											<input type="file" accept="image/*" name="avtar" id="files" >
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Upload your Profile Pic">
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-4">
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
										<input placeholder="Select birth date" type="date" id="birth-date" class="form-control datepicker" required="" readonly="false" name="birth_date">
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
										<input type="text" id="mobile" name="mobile" class="form-control" required="">
										<label for="form1" class="">Mobile</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<strong>Gender</strong>
									<div class="form-group mt-2">
										<input name="gender" type="radio" value="male" id="rd1" required="">
										<label for="rd1">Male</label>
									</div>
									<div class="form-group">
										<input name="gender" type="radio" value="female" id="rd2">
										<label for="rd2">Female</label>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<div class="md-form">
										<textarea type="text" name="address" id="address" class="md-textarea" length="160" required=""></textarea>
										<label for="form7">Address</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="md-form">
										<input type="text" id="city" name="city" class="form-control" required="">
										<label for="form1" class="">City</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="md-form">
										<input type="number" id="pincode" name="pincode" class="form-control"  required="">
										<label for="form1" class="">Pincode</label>
									</div>
								</div>
								<div class="col-12 col-md-4" style="padding-top: 0.4em">
									<select class="form-group md-form mdb-select" name="sub_cast" required="">
										<option value="" disabled selected>Choose your sub cast</option>
										<option value="Kutchi Visa Oswal">Kutchi Visa Oswal</option>
										<option value="Kutchi Dasa Oswal">Kutchi Dasa Oswal</option>
										<option value="Gurjar Visa Shrimali">Gurjar Visa Shrimali</option>
										<option value="Gurjar Dasa Shrimali">Gurjar Dasa Shrimali</option>
										<option value="Vagad Sat Chovishi">Vagad Sat Chovishi</option>
										<option value="Vagad Be Chovishi">Vagad Be Chovishi</option>
									</select>
									<label>Sub Cast</label>
								</div>
								<div class="col-12">
									<div class="md-form">
										<input type="text" id="edu_qualification" name="edu_qualification" class="form-control" required="">
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
										<input type="text" id="present_activity" name="present_activity" class="form-control" required="">
										<label for="form1" class="">Present Activity</label>
										<small id="present_activityHelp" class="form-text text-muted">Write about what you doing currently</small>
									</div>
								</div>
								<div class="col-12">
									<div class="md-form">
										<textarea type="text" name="company_name_address" id="c_name_address" class="md-textarea" length="160" required=""></textarea>
										<label for="form7">Company Name & Address</label>
									</div>
								</div>
								<div class="col-12 col-md-8">
									<div class="md-form">
										<input type="text" id="nature_of_business" name="nature_of_business" class="form-control" required="">
										<label for="form1" class="">Nature Of Business</label>
										<small id="present_activityHelp" class="form-text text-muted">for Example.. Software Company or Electronic commerce company</small>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="md-form">
										<input type="text" id="c_pincode" name="c_pincode" class="form-control" required="">
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
		</main>
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
		<script type="text/javascript">
		document.getElementById("files").onchange = function() {
			var reader = new FileReader();
			var etr;
			reader.onload = function(e) {
			etr = e.target.result;
			var canvas = document.createElement("canvas");
			var ctx = canvas.getContext("2d");
			var image = new Image();
			//document.body.appendChild(image);
			image.onload = function(e) {
			canvas.width = 200; // target width
			canvas.height = Math.round((image.height * 200) / image.width);
			ctx.drawImage(image,
			0, 0, image.width, image.height,
			0, 0, canvas.width, canvas.height
		);
		// create a new base64 encoding
		document.getElementById("avtar").src = canvas.toDataURL();
		// document.getElementById('avtar_hidden').value = etr;
		};
		image.src = etr;
		};
		reader.readAsDataURL(this.files[0]);
		};
		</script>
	</body>
</html>