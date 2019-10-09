<!DOCTYPE html>
<html>
<head>
	<title>WEB HMI ALARM EMERGENCY GENERATOR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:orange"><center><strong>WEB HMI ALARM EMERGENCY GENERATOR</strong></center></span>
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> REFRESH</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>NAMA</th>
				<th>TANGGAL</th>
				<th>WAKTU</th>
				<th>STATUS</th>
				<th>ACTION</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');

				$query=mysqli_query($conn,"select * from `hmi`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['NAMA']; ?></td>
						<td><?php echo $row['TANGGAL']; ?></td>
						<td><?php echo $row['WAKTU']; ?></td>
						<td><?php if( $row['STATUS']==1){echo "AKTIF";}else{echo "MATI";}; ?></td>
						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-volume-off"></span> Reset</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}

			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>
