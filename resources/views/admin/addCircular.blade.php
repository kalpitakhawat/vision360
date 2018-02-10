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
										<textarea type="text" id="textarea-description" name="description" class="md-textarea"></textarea>
										<label for="textarea-description">Description</label>
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
		<script src="/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			tinymce.init({
		selector: '#textarea-description',
		height: 500,
		theme: 'modern',
		plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
		toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		image_advtab: true,
		templates: [
		{ title: 'Test template 1', content: 'Test 1' },
		{ title: 'Test template 2', content: 'Test 2' }
		],
		content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css'
		]
		});
		</script>
	</body>
</html>