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
			<div class="container">
				<section>
					<!--Section heading-->
					<h1 class="main-title py-3">Circulars</h1>
				</section>
				@if(count($circulars) > 0)
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
				@else
				<div class="row text-center">
					<div class="col-12">
						<h3>No Any Circulars Found</h3>
					</div>
				</div>
				@endif
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>