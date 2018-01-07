<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		<main>
			<div class="container">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3 py-3">Donation</h3>
				</section>
				<form action="donate" method="post">
					{{csrf_field()}}
					<button type="submit" class="btn btn-success">Donate</button>
				</form>
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>