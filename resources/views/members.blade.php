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
			<div class="container mt-3">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3">Members</h3>
				</section>
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2">
						<div class="md-form">
							<input type="text" id="inputx" class="form-control" v-model="q" v-on:keyup="typed">
							<label for="form1" class="">Search</label>
						</div>
					</div>
				</div>
				<div class="row" id="searchArea">
					<div class="col-12 col-md-3 postArea mt-3" v-for="member in members">
						<a :href="'/members/'+member.id">
							<!--Card-->
						<div class="card testimonial-card mask waves-effect waves-light hoverable">
							<!--Bacground color-->
							<div class="card-up indigo lighten-1">
							</div>
							<!--Avatar-->
							<div class="avatar"><img :src="member.avtar" class="rounded-circle" width="110px" height="110px">
							</div>
							<div class="card-body">
								<!--Name-->
								<h4 class="card-title">@{{member.f_name}} @{{member.l_name}}</h4>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
		
		<script type="text/javascript">
			timeout = null;
			var app = new Vue({
				el:'#app',
				data:{
					members:[],
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
				              self.members = [];
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
				            url: '/members/api',
				            data: {q: self.q},
				            success: function( msg ) {
				                self.members = msg;
				                console.log(self.members);
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
		<!-- <script type="text/javascript" src="/js/jimx_quickSearch.js"></script>
		<script type="text/javascript">
			
			jimxSearch({
				sbox : "searchArea",
				sdata : "postArea",
				stype : 0,
				textBox : "#inputx",
				sdisplay : "Displaying results for..."
			});

		</script> -->
	</body>
</html>