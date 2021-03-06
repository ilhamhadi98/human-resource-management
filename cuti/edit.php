<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
	$nik = $_POST['nik'];
	$nama=$_POST['nama'];
	$tglawal=$_POST['tglawal'];
	$tglakhir=$_POST['tglakhir'];
    $alasan=$_POST['alasan'];
    
	// update user data
	$result = mysqli_query($mysqli, "UPDATE cuti SET id='$id',nik='$nik',nama='$nama',tglawal='$tglawal',tglakhir='$tglakhir',alasan='$alasan' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cuti WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
	$nik = $user_data['nik'];
	$nama = $user_data['nama'];
	$tglawal = $user_data['tglawal'];
    $tglakhir = $user_data['tglakhir'];
    $alasan = $user_data['alasan'];
}
?>
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
	<form class="form-horizontal" name="update_user" method="post" action="edit.php">
		
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nik">Nik:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tglawal">Tanggal Awal:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglawal" name="tglawal" value="<?php echo $tglawal;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tglakhir">Tanggal Akhir:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglakhir" name="tglakhir" value="<?php echo $tglakhir;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alasan">Alasan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $alasan;?>">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <td><input type="hidden" class="btn btn-primary" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>
        
        <!--
        <table border="0">
			<tr> 
				<td>Nik</td>
				<td><input type="text" name="nik" value=<?php echo $nik;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Transaksi</td>
				<td><input type="date" name="tanggal_transaksi" value=<?php echo $tanggal_transaksi;?>></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="total" value=<?php echo $total;?>></td>
			</tr>
            <tr> 
				<td>Status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
        -->
	</form>
    </div>  
</body>
</html>