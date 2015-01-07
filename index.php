<!-- //link ke skrip db_koneksi -->
<?php include 'db_koneksi.php';?>
<!-- // -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP + MySQL + DataTables</title>
	<!-- //CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/gaya.css">
	<!-- //JS -->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.tableTools.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="js/datatables.js"></script>
</head>
<body>
	<div class="container" style="margin-top:50px;">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">PHP + MySQL + DataTables</h3>
				</div>
				<div class="panel-body">
					<table id="contoh_gan" class="table table-bordered table-hover">
						<thead align="center">
							<tr>
								<th>lorem ipsum satu</th>
								<th>lorem ipsum dua</th>
								<th>lorem ipsum tiga</th>
								<th>lorem ipsum empat</th>
								<th>lorem ipsum lima</th>
							</tr>
						</thead>
						<tbody>
							<?php while($row =mysql_fetch_array($db)){ ?>
							<tr>
								<td><?=$row['lorem_ipsum_satu'] ?></td>
								<td><?=$row['lorem_ipsum_dua'] ?></td>
								<td><?=$row['lorem_ipsum_tiga'] ?></td>
								<td><?=$row['lorem_ipsum_empat'] ?></td>
								<td><?=$row['lorem_ipsum_lima'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>