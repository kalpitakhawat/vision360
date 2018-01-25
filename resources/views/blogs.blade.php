<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container">
				<div class="row justify-content-center">
					<section class="text-center">
						<!--Section heading-->
						<h3 class="font-bold h3 py-2">Blogs</h3>
					</section>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="md-form">
							<input type="text" id="form1" class="form-control">
							<label for="form1" class="">Search</label>
						</div>
					</div>
				</div>
				<div class="row mt-2 searchArea">
					<div class="col-12 col-md-8 offset-md-2">
						<!--First review-->
						<div class="media mb-1">
							<a class="media-left waves-light">
								<img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-13.jpg" alt="Generic placeholder image">
							</a>
							<div class="media-body">
								<a href="./blogs/1"><h4 class="media-heading">Blog Title</h4></a>
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
								<a href="./blogs/1"><h4 class="media-heading">Blog Title</h4></a>
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
								<a href="./blogs/1"><h4 class="media-heading">Blog Title</h4></a>
								<h6 class="text-muted">By Dave Snow - 3 days ago</h6>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-lg red" href="./blogs/write">
				<i class="fa fa-pencil"></i>
			</a>
		</div>
		@include('./includes/scripts')
		<script type="text/javascript" src="/js/jimx_quickSearch.js"></script>
		<script type="text/javascript">	
			jimxSearch({
				sbox : "searchArea",
				sdata : "media",
				stype : 0,
				textBox : "#form1",
				sdisplay : "Displaying results for..."
			});
		</script>

	</body>
</html>