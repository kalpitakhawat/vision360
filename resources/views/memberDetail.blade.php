<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
		<style type="text/css">
	main{
		margin-top: 140px;
	}
</style>
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
							<div class="avatar">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-responsive">
							</div>
							
							<div class="card-body">
								<!--Name-->
								<h4 class="mt-1">
								<strong>John Doe</strong>
								<p class="dark-grey-text">abc at xyz company</p>
								</h4>
								<hr>
								<!--Quotation-->
								<p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.</p>
								<hr>
								<div class="row justify-content-center">
									<div class="col-12 col-md-6 ">
										<div class="row">
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</strong><br>abc@abc.com</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-mobile" aria-hidden="true"></i> Mobile</strong><br>+91 9727331128</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-minus" aria-hidden="true"></i> City</strong><br>Ahmedabad</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Pincode</strong><br>123456</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</strong><br>B.E. IT vkfbngdjbngfuhgfufoifywer</p>
												<hr>
											</div>
											<div class="col-12 col-md-6">
												<p><strong><i class="fa fa-flask" aria-hidden="true"></i> Expertise</strong><br>ABCDEF GHI</p>
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
				<div class="row justify-content-center">
					<div class="col-sm-8">
                                <h2 class="h1 text-center py-5">Recent Blogs</h2>
                                <!--First review-->
                                <div class="media mb-1">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-13.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="/blogs/1"><h4 class="media-heading">Blog Title</h4></a>
                                        <h6 class="text-muted">By John Doe - 3 days ago</h6>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                                    </div>
                                </div>
                                <!--Second review-->
                                <div class="media mb-1">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="/blogs/1"><h4 class="media-heading">Blog Title</h4></a>
                                        <h6 class="text-muted">By Anna Casie - 3 days ago</h6>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                                    </div>
                                </div>
                                <!--Second review-->
                                <div class="media mb-1">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-7.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="/blogs/1"><h4 class="media-heading">Blog Title</h4></a>
                                        <h6 class="text-muted">By Dave Snow - 3 days ago</h6>
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                                    </div>
                                </div>
                            </div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>