<!DOCTYPE html>
<html>
	<head>
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
								<img src="/covers/{{$event->cover_image}}" class="img-fluid" style="width: 100%;">
								<a href="#!">
									<div class="mask"></div>
								</a>
							</div>
							<!--/Card image-->
							<!--Card content-->
							<div class="card-body text-center">
								<!--Title-->
								<h4 class="card-title"><strong>{{$event->title}} </strong></h4>
								<p class="card-text">{{$event->desc}} </p>
								<div class="row">
									<div class="col-12 col-md-6">
										<h6>Time</h6>
										{{$event->time}} ({{$event->days}} days)
									</div>
									<div class="col-12 col-md-6">
										<h6>Venue</h6>
										{{$event->venue}}
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