<!-- awal proses -->

<?php 

if(isset($_POST['update'])){

    $nik=$_POST['nik'];
	$namawarga=$_POST['namawarga'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];

    // proses update
    $sql = "UPDATE warga SET nik='$nik',namawarga='$namawarga',alamat='$alamat',no_tlp='$no_tlp' WHERE nik='$nik'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=warga");
    }
}

// mengambil nik
$nik=$_GET['nik'];

// menampilkan data warga
$sql = "SELECT * FROM warga WHERE nik='$nik'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- akhir proses -->

<h2 align="center">UPDATE DATA WARGA DESA NGLEBAK</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group" style="margin-top: 10px">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" value="<?php echo $row['nik']; ?>" name="nik" maxlength="16" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="namawarga">Nama</label>
            <input type="text" class="form-control" value="<?php echo $row['namawarga']; ?>" name="namawarga" maxlength="50" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" maxlength="50" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="no_tlp">No.Telepon</label>
            <input type="text" class="form-control" value="<?php echo $row['no_tlp']; ?>" name="no_tlp" maxlength="15" required>
            </div>
        
            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=warga">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>