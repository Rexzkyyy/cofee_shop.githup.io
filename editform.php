<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Coffee Shop</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	 <script src="js/jquery.js"></script>
	 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<?php 
		$id = $_GET['id']; 
		//koneksi database
		include('dbconnect.php');
		//query
		$query = "SELECT * FROM menu WHERE id_menu='$id'";
		$result = mysqli_query($conn, $query);
	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		 <h3>Update Menu</h3>
		 <form role="form" action="edit.php" method="get">
			 <?php
			 while ($row = mysqli_fetch_assoc($result)) {
			 ?>
			<input type="hidden" name="id_menu" value="<?php echo $row['id_menu']; ?>">

		 <div class="form-group">
		  <label>Name Menu</label>
		  <input type="text" name="nama_menu" class="form-control" value="<?php echo $row['nama_menu']; ?>">   
		 </div>

		 <div class="form-group">
		  <label>Jenis Menu</label>
		  <input type="text" name="jenis_menu" class="form-control" value="<?php echo $row['jenis_menu']; ?>">   
		 </div>

		 <div class="form-group">
		  <label>Status Menu</label>
		  <input type="text" name="status_menu" class="form-control" value="<?php echo $row['status_menu']; ?>">   
		 </div>

		 <div class="form-group">
		  <label>Harga Menu</label>
		  <input type="text" name="harga_menu" class="form-control" value="<?php echo $row['harga_menu']; ?>">   
		 </div>
 		<button type="submit" class="btn btn-success btn-block">Update Daftar Menu</button>

 		<?php
 		}
 		mysqli_close($conn);
 		?>    
 		</form>
	</div>
</body>
</html>