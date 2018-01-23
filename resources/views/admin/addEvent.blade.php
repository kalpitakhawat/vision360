<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('../includes/headers')
	</head>
	<body class="fixed-sn white-skin">
		@include('../includes/sidenavbar')
		<main>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h3>Add Event</h3>
					</div>
				</div>
				<form method="post" action="./doAdd" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<input type="text" id="title" name="title" class="form-control">
										<label for="title" class="">Title</label>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<textarea type="text" id="short_desc" name="short_desc" class="md-textarea" length="160" maxlength="160"></textarea>
										<label for="short_desc">Short Description</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<textarea type="text" id="description" name="description" class="md-textarea"></textarea>
										<label for="description">Description</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-6 mt-1">
									<div class=" mt-3 file-field">
										<div class="btn btn-primary btn-sm">
											<span>Choose file</span>
											<input type="file" name="cover_image">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Upload Cover Image">
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mt-2">
									<select class="mdb-select">
										<option value="" selected="" disabled="">Select Event Type</option>
										<option value="upcoming">Upcoming</option>
										<option value="recent">Recent</option>
									</select>
									<label>Event Type</label>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-md-6">
									<div class="md-form">
										<input type="text" id="date" name="date" class="form-control datepicker">
										<label for="date">Event Date</label>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="md-form">
										<input type="text" id="time" name="time" class="form-control timepicker">
										<label for="time">Event Time</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<textarea type="text" id="venue" name="venue" class="md-textarea"></textarea>
										<label for="venue">Venue</label>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</main>
		@include('./includes/scripts')
		<script type="text/javascript">
			$('.datepicker').pickadate({
				selectYears: true,
				selectMonths: true,
				selectYears: 60,
				min: 1,
			});
			$('#time').pickatime({
			twelvehour: true
			});
			$('.mdb-select').material_select();
		</script>
	</body>
</html>