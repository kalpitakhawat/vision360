<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('../includes/headers')
	</head>
	<body class="fixed-sn white-skin">
		@include('../includes/sidenavbar')
		<main>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h3>Add Circular</h3>
					</div>
				</div>
				<form method="post" action="./doAdd" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<input type="text" id="title" name="title" class="form-control">
										<label for="title" class="">Title</label>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="md-form">
										<textarea type="text" id="description" name="description" class="md-textarea"></textarea>
										<label for="description">Description</label>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>