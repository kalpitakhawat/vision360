<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container mt-3">
				<div class="row text-center">
					<div class="col-12">
						<h3>{{$blog->title}}</h3>
						<h6 class="text-muted mt-3">
							<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle" alt="First sample avatar image" height="50px"> By <a href=""> {{$user->f_name}} {{$user->l_name}}</a> on {{$blog->created_at}}
						</h6>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p><strong>{{$blog->short_desc}}</strong></p>
						<br>
						<p>{{$blog->desc}} </p>
					</div>
				</div>
				<div class="row">
					<form action="./approve" method="post">
						<input type="hidden" name="id" value="{{$blog->id}}">
						<button type="submit" class="btn btn-success">Approve</button>
					</form>
					<form action="./approve" method="post">
						<input type="hidden" name="id" value="{{$blog->id}}">
						<button type="submit" class="btn btn-danger">Reject</button>
					</form>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>