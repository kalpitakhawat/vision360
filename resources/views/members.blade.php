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
			<div class="container mt-3">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3">Members</h3>
				</section>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="md-form">
							<input type="text" id="inputx" class="form-control">
							<label for="form1" class="">Search</label>
						</div>
					</div>
				</div>
				<div class="row" id="searchArea">
					<div class="col-12 col-md-3 postArea">
						<a href="/members/1">
							<!--Card-->
						<div class="card testimonial-card mask waves-effect waves-light hoverable">
							<!--Bacground color-->
							<div class="card-up indigo lighten-1">
							</div>
							<!--Avatar-->
							<div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
							</div>
							<div class="card-body">
								<!--Name-->
								<h4 class="card-title">Anna Doe</h4>
								<!-- <hr> -->
								<!--Quotation-->
								<!-- <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p> -->
							</div>
						</div>
						<!--/.Card-->
						</a>
					</div>
					<div class="col-12 col-md-3 postArea">
						<a href="/members/1">
							<!--Card-->
						<div class="card testimonial-card mask waves-effect waves-light hoverable">
							<!--Bacground color-->
							<div class="card-up indigo lighten-1">
							</div>
							<!--Avatar-->
							<div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
							</div>
							<div class="card-body">
								<!--Name-->
								<h4 class="card-title">Marck ZUck</h4>
								<!-- <hr> -->
								<!--Quotation-->
								<!-- <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p> -->
							</div>
						</div>
						<!--/.Card-->
						</a>
					</div>
					<div class="col-12 col-md-3 postArea">
						<a href="/members/1">
							<!--Card-->
						<div class="card testimonial-card mask waves-effect waves-light hoverable">
							<!--Bacground color-->
							<div class="card-up indigo lighten-1">
							</div>
							<!--Avatar-->
							<div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
							</div>
							<div class="card-body">
								<!--Name-->
								<h4 class="card-title">Bill Gates</h4>
								<!-- <hr> -->
								<!--Quotation-->
								<!-- <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p> -->
							</div>
						</div>
						<!--/.Card-->
						</a>
					</div>
					<div class="col-12 col-md-3 postArea">
						<a href="/members/1">
							<!--Card-->
						<div class="card testimonial-card mask waves-effect waves-light hoverable">
							<!--Bacground color-->
							<div class="card-up indigo lighten-1">
							</div>
							<!--Avatar-->
							<div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
							</div>
							<div class="card-body">
								<!--Name-->
								<h4 class="card-title">Jimy</h4>
								<!-- <hr> -->
								<!--Quotation-->
								<!-- <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p> -->
							</div>
						</div>
						<!--/.Card-->
						</a>
					</div>
					
				</div>
			</div>
		</main>
		@include('./includes/footer') 
		@include('./includes/scripts')
		<script type="text/javascript" src="/js/jimx_quickSearch.js"></script>
		<script type="text/javascript">
			
			jimxSearch({
				sbox : "searchArea",
				sdata : "postArea",
				stype : 0,
				textBox : "#inputx",
				sdisplay : "Displaying results for..."
			});

		</script>
	</body>
</html>