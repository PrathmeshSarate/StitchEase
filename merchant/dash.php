<?php
define('PAGE', 'dash');
include('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
</head>
<body>
	<?php include('sidebar_nav.php'); ?>
	<div class="col-md-2"></div>
	<div class="col-sm-9 col-md-10">
		<div class="row mx-5 justify-content-center text-center">
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
					<div class="card-header">Customer Feedback</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $feedback; ?>
						</h4>
						<a class="btn text-white" href="customer_feedback.php">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
					<div class="card-header">Customer Order Requests</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $orders; ?>
						</h4>
						<a class="btn text-white" href="customer_order.php">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mt-5">
				<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
					<div class="card-header">Our Products</div>
					<div class="card-body">
						<h4 class="card-title">
							<?php echo $products; ?>
						</h4>
						<a class="btn text-white" href="add_cloths.php">View</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mx-5 text-center">
			<div class="col-sm-9 mt-5  col-md-12">
				<div class="row">
					<div class="col-sm-9 mt-5">
						<!-- Section after cards -->
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>

</html>