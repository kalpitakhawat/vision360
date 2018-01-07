<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
	</head>
	<body>
		@include('./includes/navbar')
		<main>
			<div class="container mt-2">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3">Write A New Blog</h3>
				</section>
				<div class="row mt-4">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="md-form">
							<input type="text" id="form1" class="form-control" autofocus="">
							<label for="form1" class="">Blog Title</label>
						</div>
						<div class="md-form">
							<textarea id="textarea-char-counter" class="md-textarea" length="160"></textarea>
							<label for="textarea-char-counter">Short Description</label>
						</div>
							<label class="mb-2">Content</label>
						<div class="md-form">
							<textarea id="textarea-description"></textarea>
						</div>
						<button type="button" class="btn btn-success">Publish</button>
					</div>
				</div>
				
			</div>
		</main>
		@include('./includes/footer')
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