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
			<div class="container mt-3">
				<div class="row text-center">
					<div class="col"><h3>Account Edit</h3></div>
				</div>
				<div class="row">
					<form method="post" action="/account/edit">
						{{csrf_field()}}
						<div class="row mt-4">
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="text" id="f_name" name="f_name" value="{{$user->f_name}}" class="form-control" disabled="">
								<label for="form1" class="">First Name</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="text" id="l_name" name="l_name" value="{{$user->l_name}}" class="form-control" disabled="">
								<label for="form1" class="">Last Name</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input placeholder="Select birth date" type="date" id="birth-date" class="form-control datepicker" required="" readonly="false" data-value="{{$user->birth_date}}">
								<label for="date-picker-example">Birthdate</label>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="md-form">
								<input type="email" id="email" name="email" value="{{$user->email}}" class="form-control" disabled="">
								<label for="form1" class="">Email</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="text" id="mobile" name="mobile" class="form-control" required="" value="{{$user->mobile}}">
								<label for="form1" class="">Mobile</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<strong>Gender</strong>
							<div class="form-group mt-2">
								<input name="gender" type="radio" value="male" id="rd1" required="" {{$user->gender == 'male' ? 'checked' : ''}} >
								<label for="rd1">Male</label>
							</div>
							<div class="form-group">
								<input name="gender" type="radio" value="female" id="rd2" {{$user->gender == 'female' ? 'checked' : ''}}>
								<label for="rd2">Female</label>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="md-form">
								<textarea type="text" name="address" id="address" class="md-textarea" length="160" required="">{{$user->address}}</textarea>
								<label for="form7">Address</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="text" id="city" name="city" class="form-control" required="" value="{{$user->city}}">
								<label for="form1" class="">City</label>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="number" id="pincode" name="pincode" class="form-control"  required="" value="{{$user->pincode}}">
								<label for="form1" class="">Pincode</label>
							</div>
						</div>
						<div class="col-12 col-md-4" style="padding-top: 0.4em">
							<select class="form-group md-form mdb-select" name="sub_cast" required="">
								<option value="" disabled>Choose your sub cast</option>
								@foreach($sc as $s)
								<option value="{{$s}}" {{$user->sub_cast == $s ? 'selected' :''}}>{{$s}}</option>
								@endforeach
							</select>
							<label>Sub Cast</label>
						</div>
						<div class="col-12">
							<div class="md-form">
								<input type="text" id="edu_qualification" name="edu_qualification" class="form-control" required="" value="{{$user->edu_qualification}}">
								<label for="form1" class="">Education Qualification</label>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form">
								<input type="text" id="expertise" name="expertise" class="form-control" value="{{$user->expertise}} ">
								<label for="form1" class="">Expertise</label>
								<small id="expertiseHelp" class="form-text text-muted">Write Your All Expertise with seperated by coma (,)</small>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form">
								<input type="text" id="present_activity" name="present_activity" class="form-control" required="" name="{{$user->present_activity}} ">
								<label for="form1" class="">Present Activity</label>
								<small id="present_activityHelp" class="form-text text-muted">Write about what you doing currently</small>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form">
								<textarea type="text" name="company_name_address" id="c_name_address" class="md-textarea" length="160" required="">{{$user->company_name_address}}</textarea>
								<label for="form7">Company Name & Address</label>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="md-form">
								<input type="text" id="nature_of_business" name="nature_of_business" class="form-control" required="" value="{{$user->nature_of_business}}">
								<label for="form1" class="">Nature Of Business</label>
								<small id="present_activityHelp" class="form-text text-muted">for Example.. Software Company or Electronic commerce company</small>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="md-form">
								<input type="text" id="c_pincode" name="c_pincode" class="form-control" required="" value="{{$user->company_pincode}}" >
								<label for="form1" class="">Company Pincode</label>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form">
								<input type="url" id="website" name="website" class="form-control" value="{{$user->website}} ">
								<label for="form1" class="">Website</label>
							</div>
						</div>
						<div class="col-12">
							<div class="md-form">
								<textarea type="text" id="about" name="about" class="md-textarea" length="160">{{$user->about}}</textarea>
								<label for="form7">Bio</label>
								<small id="bioHelp" class="form-text text-muted">Describe your self in 160 characters</small>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					</form>
				</div>
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
	</body>
</html>