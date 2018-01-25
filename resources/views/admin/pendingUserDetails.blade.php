<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container-fluid mt-3">
				<div class="row">
					<div class="col-12 ">
						<!--Card-->
						<div class="card testimonial-card" style="box-shadow: none;">
							
							<!--Background color-->
							<div class="card-up white px-0"></div>
							
							<!--Avatar-->
							<div class="avatar">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-responsive">
							</div>
							
							<div class="card-body">
								<!--Name-->
								<h4 class="mt-1">
								<strong> {{$user->f_name}}&nbsp;{{$user->l_name}}</strong>
								<!-- <p class="dark-grey-text">{{$user->edu_qualification}}</p> -->
								</h4>
								<hr>
								<button class="btn btn-success">Approve <i class="fa fa-correct"></i> </button>
								<button class="btn btn-danger">Reject<i class="fa fa-cross"></i> </button>
								<!--Quotation-->
								<!-- <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.</p> -->
								<hr>
								<div class="row justify-content-center">
									<div class="col-12 col-md-6 ">
										<div class="row">
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong><br>{{$user->email}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-mobile" aria-hidden="true"></i> Mobile</strong><br>{{$user->mobile}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-minus" aria-hidden="true"></i> City</strong><br>{{$user->city}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Pincode</strong><br>{{$user->pincode}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</strong><br>{{$user->edu_qualification}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-flask" aria-hidden="true"></i> Expertise</strong><br>{{$user->expertise}}</p>
												<hr>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!--Card-->
					</div>
				</div>
				
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>