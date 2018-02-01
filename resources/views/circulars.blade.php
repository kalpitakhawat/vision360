<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
		<link rel="stylesheet" href="/css/landing.min.css">
		
	</head>
	<body>
		<header>
			@include('./includes/navbar')
		</header>
		<main>
			<div class="container">
				<section>
					<!--Section heading-->
					<h1 class="main-title py-3">Circulars</h1>
				</section>
				<div class="row">
					<div class="col-12">
						<div class="list-group">
							@foreach ($circulars as $c)
							<a href="/circulars/{{$c->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-1">{{$c->title}}</h5>
									<small class="text-muted">{{$c->created_at}}</small>
								</div>
							</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>