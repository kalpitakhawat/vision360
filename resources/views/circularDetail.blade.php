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
			<div class="container mt-5 px-5 py-3">
				<div class="row">
					<div class="col-sm-12">
						<h4>{{$circular->title}}</h4>
						<h6 class="float-left text-muted"> {{$circular->created_at}} </h6>
						<h6 class="float-right text-muted">Circular Id: {{$circular->id}}</h6>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-sm-12">
						<p class="text-justify">{{$circular->description}}</p>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>