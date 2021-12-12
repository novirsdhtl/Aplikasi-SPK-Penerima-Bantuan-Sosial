<!-- awal proses -->

<?php 

if(isset($_POST['update'])){

    $kode=$_POST['kode'];
	$no=$_POST['no'];
    $nm_kriteria=$_POST['nm_kriteria'];

    // proses update
    $sql = "UPDATE tbl_kriteria SET kode='$kode',no='$no',nm_kriteria='$nm_kriteria' WHERE kode='$kode'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=kriteria");
    }
}

// mengambil nik
$kode=$_GET['kode'];

// menampilkan data warga
$sql = "SELECT * FROM tbl_kriteria WHERE kode='$kode'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- akhir proses -->

<h2 align="center">UPDATE KRITERIA</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group" style="margin-top: 10px">
            <label for="no">No</label>
            <input type="text" class="form-control" value="<?php echo $row['no']; ?>" name="no" maxlength="30" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" value="<?php echo $row['kode']; ?>" name="kode" maxlength="5" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="nm_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" value="<?php echo $row['nm_kriteria']; ?>" name="nm_kriteria" maxlength="100" required>
            </div>
        
            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=kriteria">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>