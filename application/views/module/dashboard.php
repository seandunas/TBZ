<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Dashboard</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Include Font Awesome icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 bg-primary text-white p-3">
				<h3>Welcome, <?= $user->user_fname ?> <?= $user->user_lname ?>!</h3>
			</div>
		</div>
		<div class="row mt-3 justify-content-center align-items-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-success text-white">
						<h5 class="mb-0">Registered Users</h5>
					</div>
					<div class="card-body">
						<p class="card-text">There are <?= $cardData['users_quantity']?> registered users as of today.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-warning text-white">
						<h5 class="mb-0">No. of Services Available</h5>
					</div>
					<div class="card-body">
						<p class="card-text"> <?= $cardData['service_quantity']?> services are available for the pets</p>
					</div>
				</div>
			</div>
		
            <div class="container w-100 h-80 justify-content-center align-items-center" > 
                <div class="row mt-4 justify-content-center align-items-center">
                    <div class="col-md-8">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
		</div>
	</div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Dogs', 'Cats', 'Both'],
                datasets: [{
                    label: 'No. of Service per Category',
                    data: [<?= $chartData['dog']?>, <?= $chartData['cat']?>, <?= $chartData['both']?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
    
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                
                legend: {
                    position: 'bottom',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
                
            }
        });
        </script>
	<!-- Include Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
