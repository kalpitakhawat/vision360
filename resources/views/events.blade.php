<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container-fluid">
				<!--Section: Products v.1-->
				<section class="text-center pb-3">
					<!--Section heading-->
					<h1 class="font-bold h1 py-5">Upcoming Events</h1>
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
				<!--Section: Products v.1-->
				<!--Section: Products v.1-->
				<section class="text-center pb-3">
					<!--Section heading-->
					<h1 class="font-bold h1 py-5">Recent Events</h1>
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
				<!--Section: Products v.1-->
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>