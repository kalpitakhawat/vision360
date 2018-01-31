<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body class="fixed-sn white-skin">
		@include('./includes/sidenavbar')
		<main>
			<div class="container mt-3">
				<div class="row text-center">
					<div class="col-12">
						<h3>{{$blog->title}}</h3>
						<h6 class="text-muted mt-3">
							<div class="rounded-circle" style="display: inline-block;"><img src="{{$user->avtar}}" style="height: 70px; width: 70px;" class="rounded-circle img-fluid"></div> By <a href="/admin/users/preview/{{$user->id}}"> {{$user->f_name}} {{$user->l_name}}</a> on {{$blog->created_at}}
						</h6>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p><strong>{{$blog->short_desc}}</strong></p>
						<br>
						<p>{{strip_tags($blog->desc)}} </p>
					</div>
				</div>
				<div class="row">
					<form action="{{route('admin.blogs.approve.post')}} " method="post">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$blog->id}}">
						<button type="submit" class="btn btn-success">Approve</button>
					</form>
					<form action="{{route('admin.blogs.reject.post')}} " method="post">
						{{csrf_field()}}
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