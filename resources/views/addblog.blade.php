<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/headers')
		<link rel="stylesheet" href="/css/landing.min.css">
	</head>
	<body>
		@include('./includes/navbar')
		<main id="app">
			<div class="container mt-2">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3">Write A New Blog</h3>
				</section>
				<form method="post" action="doAdd">
					{{csrf_field()}}
					<div class="row mt-4">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="md-form">
								<input type="text" id="form1" name="title" class="form-control" autofocus="">
								<label for="form1" class="">Blog Title</label>
							</div>
							<div class="md-form">
								<textarea id="textarea-char-counter" name="short_desc" class="md-textarea" length="160"></textarea>
								<label for="textarea-char-counter">Short Description</label>
							</div>
							<label for="textarea-char-counter">Tags <small>(Type a tag and press enter to add tag. Click X to remove it.)</small></label>
							<div class="md-form">
								<div class="chips chips-placeholder"></div>
							</div>
							<input type="hidden" name="categories" :value="categories">
							<label class="mb-2">Content</label>
							<div class="md-form">
								<textarea id="textarea-description" name="desc"></textarea>
							</div>
							<button type="submit" class="btn btn-success">Publish</button>
						</div>
					</div>
				</form>
				
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
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
		<script type="text/javascript">
			var app = new Vue({
				el:'#app',
				data:{
					tags:[],
					categories:'',
				},
				watch:{
					tags:function () {
						var self =this;
						var categories = '';
						self.tags.forEach(function (element) {
							categories += element['tag'] + ',' ; 
						});
						self.categories = categories.slice(0, -1);
					}
				}
			});
		</script>
		<script type="text/javascript">
			$('.chips-placeholder').material_chip({
			    placeholder: '+Tag',
			    secondaryPlaceholder: 'Enter a tag',
			});
			$('.chips').on('chip.add', function(e, chip){
				app.tags = $('.chips').material_chip('data');
			});

			  $('.chips').on('chip.delete', function(e, chip){
			    app.tags = $('.chips').material_chip('data');
			  });
		</script>
	</body>
</html>