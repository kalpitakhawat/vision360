<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/head')
	</head>
	<body>
		<header>@include('./includes/navbar')</header>
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
					@if(Auth::id() == $user->id)
						<form action="{{route('blogs.delete.post')}} " method="post" onsubmit="return confirm('Do you really want to delete this blog?');">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$blog->id}}">
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					@endif
				</div>
			</div>
		</main>
		@include('./includes/footer')
		@include('./includes/scripts')
	</body>
</html>