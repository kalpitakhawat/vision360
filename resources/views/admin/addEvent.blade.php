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
										<textarea type="text" id="description" name="description" class="md-textarea"></textarea>
										<label for="description">Description</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<input type="text" required="" id="venue" name="venue" placeholder="" class="form-control" />
										<label >Venue Location</label>
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
										<option value="upcoming" selected="">Upcoming</option>
										<option value="recent">Recent</option>
									</select>
									<label>Event Type</label>
								</div>
							</div>

							<div class="row mt-3">
								<div class="col-12 col-md-6">
									<div class="md-form">
										<input type="text" id="date" name="date" class="form-control datepicker">
										<label for="date">Event Start Date</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="md-form">
										<input type="text" id="time" name="time" class="form-control timepicker">
										<label for="time">Event Start Time</label>
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="md-form">
										<input type="number" value="1" min="1" max="15" id="days" name="days" class="form-control timepicker">
										<label for="days">Total Days</label>
									</div>
								</div>
							</div>
							<button type="submit"  class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</main>
		@include('./includes/scripts')
  <script>
      var placeSearch, autocomplete;
 
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('venue')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        console.log(place)
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnGAqzYLlg9OzfZcFmyEHxEkmLJS-_xyQ&libraries=places&callback=initAutocomplete"
        async defer></script>
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

			$(document).on('keyup keypress', 'form input[type="text"]', function(e) {
			  if(e.keyCode == 13) {
			    e.preventDefault();
			    return false;
			  }
			});

		</script>
	</body>
</html>