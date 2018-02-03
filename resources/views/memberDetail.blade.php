<!DOCTYPE html>
<html>
	<head>
		@include('./includes/headers')
		
	</head>
	<body>
		<header>
			@include('./includes/navbar')
		</header>
		<main>
			<div class="container-fluid mt-3">
				<div class="row">
					<div class="col-12 ">
						<!--Card-->
						<div class="card testimonial-card" style="box-shadow: none;">
							
							<!--Background color-->
							<div class="card-up white px-0"></div>
							
							<!--Avatar-->
							<div class="avatar rounded-circle">
								<img src="{{$user->avtar}}" class="img-responsive" style="height: 100%; width: auto;">
							</div>
							
							<div class="card-body">
								<!--Name-->
								<h4 class="mt-1">
								<strong> {{$user->f_name}}&nbsp;{{$user->l_name}}</strong>
								<p class="dark-grey-text">({{$user->sub_cast}})</p>
								</h4>
								<hr>
								<div class="col-12">
									<p><strong> Bio</strong><br>{{$user->about}}</p>
								</div>
								
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
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-briefcase" aria-hidden="true"></i> Present Activity</strong><br>{{$user->present_activity}}</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-building-o" aria-hidden="true"></i> Company Name And Address</strong><br>{{$user->company_name_address}}</p>
												<hr>
											</div>
											@if(Auth::id() == $user->id)
											<div class="col-12">
												<a type="button" class="btn btn-outline-info waves-effect" href="/account/edit">Edit Account</a>
											</div>
											@endif
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!--Card-->
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-8">
						<h2 class="h1 text-center py-5">Recent Blogs</h2>
						@if(count($blogs) <= 0)
						<div class="col-12 text-center">
							<h3 style="text-transform: capitalize;">No Any Blogs By {{$user->f_name}}</h3 style="text-transform: capitalize;">
						</div>
						@else
						@foreach($blogs as $blog)
						<div class="media mb-1">
							<div class="media-body">
								<a href="/blogs/{{$blog->id}}"><h4 class="media-heading">{{$blog->title}}</h4></a>
								<h6 class="text-muted">{{$blog->created_at}}</h6>
								<p class="text-justify">{{$blog->short_desc}}</p>
							</div>
						</div>
						<hr>
						@endforeach
						@endif
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>