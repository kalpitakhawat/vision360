<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('../includes/headers')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<style type="text/css">
			table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after {
		padding: 5px;
		}
		.dataTables_wrapper .mdb-select {
		border: none;
		}
		.dataTables_wrapper .mdb-select.form-control {
		padding-top: 0;
		margin-top: -1rem;
		margin-left: 0.7rem;
		margin-right: 0.7rem;
		width: 100px;
		}
		.dataTables_length label {
		display: flex;
		justify-content: left;
		}
		.dataTables_filter label {
		margin-bottom: 0;
		}
		.dataTables_filter label input.form-control {
		margin-top: -0.6rem;
		padding-bottom: 0;
		}
		table.dataTable {
		margin-bottom: 3rem!important;
		}
		div.dataTables_wrapper div.dataTables_info {
		padding-top: 0;
		}
		</style>
	</head>
	<body class="fixed-sn white-skin">
		@include('../includes/sidenavbar')
		<main>
			<div class="container">
				<!--Panel-->
				<div class="card">
					<div class="card-header text-white">
						<h3 class="float-left mt-3">Events</h3><a href="/admin/events/addEvent" class="btn btn-warning float-right">Add Events</a>
					</div>
					<div class="card-body">
						<table id="example" class="table table-striped table-bordered table-responsive-md" cellspacing="0" width="100%">
							<thead class="text-center">
								<tr>
									<th>Title</th>
									<th>Time</th>
									<th>Venue</th>
									<th>Type</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tfoot class="text-center">
							<tr>
								<th>Title</th>
								<th>Time</th>
								<th>Venue</th>
								<th>Type</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</tfoot>
							<tbody>
								<tr>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td class="text-center"><a class="icons-sm blue-text"><i class="fa fa-pencil"></i></a></td>
									<td class="text-center"><a class="icons-sm red-text"><i class="fa fa-trash"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!--/.Panel-->
			</div>
		</main>
		@include('./includes/scripts')
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript">
			
		$(document).ready(function() {
		$('#example').DataTable();
		$('select').addClass('mdb-select');
		$('.mdb-select').material_select();
		});
		
		</script>
	</body>
</html>