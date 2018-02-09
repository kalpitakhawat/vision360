<!DOCTYPE html>
<html>
	<head>
		@include('./includes/headers')
	</head>
	<body>
		<main>
			<div class="container">
				<section class="text-center">
					<!--Section heading-->
					<h3 class="font-bold h3 py-3">Subscription Fees</h3>
				</section>
				<div class="row mt-5">
					<div class="col-12 col-md-8">
						<h4><strong>Do As Follow</strong></h4>
						<form action="/register/donation" method="post">
						<ol>
							<li>Open Paytm App In Your Mobile</li>
							<li>Click On 'Pay'</li>
							<li>Scan Qr Code or Enter Mobile Number - <strong>9828104215</strong></li>
							<li>Enter Amount of <strong>360 Rs.</strong></li>
							<li>Enter Your Full Name, Mobile Number And Registered Email Id In the Description</li>
							<li>Click on 'Pay' Button</li>
							<li>Enter Your 'Wallet Txn ID' Here <input type="text" name="transaction_id" class="form-control" placeholder="Wallet Txn Id" required=""></li>

					{{csrf_field()}}
					<button type="submit" class="btn btn-success">Continue</button>
				
						</ol>
						</form>
					</div>
					<div class="col-12 col-md-4">
						<img src="/img/paytm.png" class="img-fluid">
					</div>
				</div>
				
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>