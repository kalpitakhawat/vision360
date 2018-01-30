<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')

	</head>
	<body>
		<header>
			@include('./includes/navbar')
		</header>
		<main>
			<div class="container-fluid">
				<!--Section: Products v.1-->
				@if (count($uevents) > 0 || count($revents)>0)
					@if(count($uevents) > 0)
						<section class="pb-3">
							<!--Section heading-->
							<h1 class="main-title py-3">Upcoming Events</h1>
							<!--Grid row-->
							<div class="row">
								@foreach ($uevents as $ue)
								<!--Grid column-->
								<div class="col-lg-3 col-md-6 mb-r">
									<!--Card Narrower-->
									<div class="card card-cascade narrower">
										<!--Card image-->
										<div class="view overlay hm-white-slight">
											<img src="/covers/{{$ue->cover_image }}" class="img-fluid" alt="">
											<a>
												<div class="mask"></div>
											</a>
										</div>
										<!--/.Card image-->
										<!--Card content-->
										<div class="card-body">
											<h5 class="pink-text"><i class="fa fa-calendar"></i> {{$ue->time}}</h5>
											<!--Title-->
											<h4 class="card-title">{{$ue->title}} </h4>
											<!--Text-->
											<a class="btn btn-unique" href="./events/{{$ue->id}}">View Details</a>
										</div>
										<!--/.Card content-->
									</div>
									<!--/.Card Narrower-->
								</div>
								<!--Grid column-->
								@endforeach
							</div>
							<!--Grid row-->
						</section>
					@endif

					@if(count($revents) > 0)
						<section class="pb-3">
							<!--Section heading-->
							<h1 class="main-title py-3">Recent Events</h1>
							<div class="row">
								@foreach ($revents as $re)
								<!--Grid column-->
								<div class="col-lg-3 col-md-6 mb-r">
									<!--Card Narrower-->
									<div class="card card-cascade narrower">
										<!--Card image-->
										<div class="view overlay hm-white-slight">
											<img src="/covers/{{$re->cover_image }}" class="img-fluid" alt="">
											<a>
												<div class="mask"></div>
											</a>
										</div>
										<!--/.Card image-->
										<!--Card content-->
										<div class="card-body">
											<h5 class="pink-text"><i class="fa fa-calendar"></i> {{$re->time}}</h5>
											<!--Title-->
											<h4 class="card-title">{{$re->title}} </h4>
											<!--Text-->
											<a class="btn btn-unique" href="./events/{{$re->id}}">View Details</a>
										</div>
										<!--/.Card content-->
									</div>
									<!--/.Card Narrower-->
								</div>
								<!--Grid column-->
								@endforeach
							</div>
							<!--Grid row-->
						</section>
					@endif
				@else
					<section class="text-center">
						<!--Section heading-->
						<h3 class="main-title py-5">No Any Upcomming Or Recent Events</h3>
					</section>
				@endif
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>