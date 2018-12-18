<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
        
	<form class="form-horizontal" action="add.php" method="post" name="form1">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">Nik:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" placeholder="Nik" name="id">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ttl">Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="ttl" placeholder="Tanggal Lahir" name="ttl">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="telp">No Telp:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" placeholder="No Telp" name="telp">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="status">Status:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" placeholder="Status Karyawan" name="status">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Submit" value="Add">Submit</button>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>

	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
        $ttl = $_POST['ttl'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $status = $_POST['status'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO karyawan(id,nama,alamat,ttl,telp,email,status) VALUES('$id','$nama','$alamat','$ttl','$telp','$email','$status')");
		
		// Show message when user added
		echo "<center>Data berhasil di tambahkan. <a href='index.php'>Lihat Daftar</a><center>";
	}
	?>
</div>
</body>
</html>