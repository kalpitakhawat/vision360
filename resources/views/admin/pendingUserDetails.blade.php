<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body class="fixed-sn white-skin"> 
		@include('./includes/sidenavbar')
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
								@if( $user->status == 'applied' || $user->status=='rejected' )
									<form method="post" action="/admin/users/approve">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<button class="btn btn-success">Approve <i class="fa fa-"></i> </button>
									</form>
									<form method="post" action="/admin/users/reject">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<button class="btn btn-danger">Reject<i class="fa fa-"></i> </button>
									</form>
								@elseIf( $user->status == 'rejected')
										<form method="post" action="/admin/users/approve">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<button class="btn btn-success">Approve <i class="fa fa-"></i> </button>
									</form>
								@else
									@if( $user->status == 'blocked' )
									<form method="post" action="/admin/users/approve">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<button class="btn btn-success">Unblock <i class="fa fa-"></i> </button>
									</form>
									@else
									<form method="post" action="/admin/users/block">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$user->id}}">
										<button class="btn btn-danger">Block<i class="fa fa-"></i> </button>
									</form>
									@endif
								@endif								
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
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-minus" aria-hidden="true"></i> Wallet Transaction Id</strong><br>{{$user->transaction_id}}</p>
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