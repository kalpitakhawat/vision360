<!DOCTYPE html>
<html>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@include('./includes/headers')
	</head>
	<body>
		<header>
			@include('./includes/navbar')
		</header>
		<main id="app">
			<div class="container">
				<div class="row ">
					<section >
						<!--Section heading-->
						<h1 class="main-title py-3">Blogs</h1>
					</section>
				</div>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="md-form">
							<input type="text" id="form1" class="form-control" v-model="q" v-on:keyup="typed">
							<label for="form1" class="">Search</label>
						</div>
					</div>
				</div>
				<div class="row mt-2 searchArea">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="media mb-1" v-for="blog in blogs">
							<a class="media-left waves-light" :href="'/members/'+blog.user_id">
								<img class="rounded-circle" :src="blog.avtar" alt="Generic placeholder image" height="100px" width="100px">
							</a>
							<div class="media-body">
								<a :href="'/blogs/'+blog.id"><h4 class="media-heading">@{{blog.title}}</h4></a>
								<h6 class="text-muted">By @{{blog.user_name}} - @{{blog.created_at}}</h6>
								<p class="text-justify">@{{blog.short_desc}} </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/footer')
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-lg red" href="./blogs/write">
				<i class="fa fa-pencil"></i>
			</a>
		</div>
		@include('./includes/scripts')
		<!-- <script type="text/javascript" src="/js/jimx_quickSearch.js"></script>
		<script type="text/javascript">	
			jimxSearch({
				sbox : "searchArea",
				sdata : "media",
				stype : 0,
				textBox : "#form1",
				sdisplay : "Displaying results for..."
			});
		</script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
		
		<script type="text/javascript">
			timeout = null;
			var app = new Vue({
				el:'#app',
				data:{
					blogs:[],
					q:'',
					xhrPool:[],
				},
				mounted(){
					var self = this;
					$.ajaxSetup({
					    beforeSend: function(jqXHR) {
					        self.xhrPool.push(jqXHR);
					    },
					    complete: function(jqXHR) {
					        var index = self.xhrPool.indexOf(jqXHR);
					        if (index > -1) {
					            self.xhrPool.splice(index, 1);
					        }
					    }
					});
					self.search();
				},
				methods:{
					typed: function (e) {
			            clearTimeout(timeout);
			            var self = this;
				            timeout = setTimeout(function () {
				              self.blogs = [];
				              self.search();
				            }, 500);
			        },
					search:function () {
						var self = this;
						self.abortAll();
					    $.ajax({
				            type: "POST",
				            headers: {
							    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							  },
				            url: '/blogs/api',
				            data: {q: self.q},
				            success: function( msg ) {
				                self.blogs = msg;
				                console.log(self.blogs);
				            }
				        });
					},
					abortAll:function () {
						var self = this;
						self.xhrPool.forEach(function(jqXHR) {
					        jqXHR.abort();
					    });
					    self.xhrPool = [];
					}
				},
				watch:{
					q:function () {
						var self =this;
						if (self.q.length > 3) {
							self.search();
						}
					}
				}
			});
		</script>
	</body>
</html>