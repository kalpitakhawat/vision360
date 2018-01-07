<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container mt-5 px-5 py-3">
				<div class="row">
					<div class="col-sm-12">
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac ultrices ante. Sed a hendrerit est, ac dapibus massa. Aliquam et ullamcorper odio. Aenean id.</h4>
						<h6 class="float-left text-muted">DD/MM/YYYY hh:mm tt</h6>
						<h6 class="float-right text-muted">Circular Id: 123</h6>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-sm-12">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam enim in nibh pretium rutrum. Maecenas vitae neque congue, venenatis metus accumsan, efficitur risus. Curabitur turpis sem, porta non quam luctus, faucibus venenatis ex. Proin ut nisi ligula. Aenean et est elit. Sed lobortis tellus in nunc iaculis, ac euismod urna luctus. Maecenas condimentum nisi eu elementum iaculis.</p>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>