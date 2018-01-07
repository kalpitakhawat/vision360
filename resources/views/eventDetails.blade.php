<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body >
		@include('./includes/navbar')
		<main>
			<div class="container mt-5">
				<div class="row">
					<div class="col-12">
						<!--Card-->
						<div class="card card-cascade wider reverse my-4">
							<!--Card image-->
							<div class="view overlay hm-white-slight">
								<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid">
								<a href="#!">
									<div class="mask"></div>
								</a>
							</div>
							<!--/Card image-->
							<!--Card content-->
							<div class="card-body text-center">
								<!--Title-->
								<h4 class="card-title"><strong>Event Title</strong></h4>
								<h5 class="indigo-text"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at ligula rhoncus, gravida justo non, consequat orci. Duis eu nunc eleifend, venenatis metus.</strong></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget quam id augue feugiat tincidunt. Maecenas luctus, arcu ac dignissim vehicula, est metus porttitor enim, eget tempor augue tortor a nisl. Aenean nibh est, pellentesque eu quam vel, pretium suscipit nulla. Sed elementum dui dui, a ornare purus posuere et. Donec commodo eros vel nisl venenatis, at hendrerit purus hendrerit. Sed lobortis porttitor dolor lobortis lobortis. In quis elementum elit. Fusce imperdiet, leo eget rutrum luctus, ligula eros vulputate nisl, eget congue erat purus ut lectus. Nullam a ultrices risus. Nulla venenatis rhoncus lacus, id tristique ligula aliquam quis.
								</p>
								<div class="row">
									<div class="col-12 col-md-6">
										<h6>Time</h6>
										26 January 2018, 8 Am
									</div>
									<div class="col-12 col-md-6">
										<h6>Venue</h6>
										The Grand Bhagvati,
										S.G. Highway,
										Ahmedabad
									</div>
								</div>
							</div>
							<!--/.Card content-->
						</div>
						<!--/.Card-->
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
		<script type="text/javascript">
			
		</script>
	</body>
</html>