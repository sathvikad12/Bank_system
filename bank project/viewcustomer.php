<html>
	<head>
		<title>view customer</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    th,td{
border:1px solid black;
padding-right:20px;
color:black;
}
th{
color:#086A87;
background-color:lightgrey;
}
table{
border-collapse:collapse;
align-content:center;
padding:100px;
margin:15px 0px 0px 550px;
float:left;
background-color:white;
font-size:15px;
max-width:50px;
}
        </style>
	</head>
	<body>
		 <?php include 'home.php' ; ?>
		<?php include 'config.php';
		$query = "SELECT * FROM transfer";
		$connect = mysqli_query($conn,$query);
		?>
		<h2 style="color:black; text-align:center;">VIEW CUSTOMER </h2>
		<table id="tab1">
			<thead>
			<tr>	
				<th>ID</th>
				<th>Receiver Name</th>
				<th>Sender Name</th>
				<th>Email</th>
				<th>Amount</th>
			</tr>
			</thead>
			<tbody>
			<?php
				if(mysqli_num_rows($connect) > 0) {
					while($data = mysqli_fetch_array($connect)){
						echo "
							<tr>
							<td>".$data['id']."</td>
							<td>".$data['receiver_name']."</td>
							<td>".$data['sender_name']."</td>
							<td>".$data['email']."</td>
							<td>".$data['amount']."</td>
							";
					}
				?>
			</tbody>
			<?php
				} else{
					echo "NO TRANACTIONS YET!";
				}
			?>

		</table>

		
	
	</body>
</html>