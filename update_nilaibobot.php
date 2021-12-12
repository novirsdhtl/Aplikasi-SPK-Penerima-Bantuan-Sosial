<!-- awal proses -->

<?php 

if(isset($_POST['update'])){

    $kode=$_POST['kode'];
	$nama=$_POST['nama'];
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];
    $c4=$_POST['c4'];

    // proses update
    $sql = "UPDATE tbl_bobot SET kode='$kode',nama='$nama',c1='$c1',c2='$c2',c3='$c3',c4='$c4' WHERE kode='$kode'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=nilaibobot");
    }
}

$kode=$_GET['kode'];

// menampilkan data warga
$sql = "SELECT * FROM tbl_bobot WHERE kode='$kode'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!-- akhir proses -->

<h2 align="center">UPDATE NILAI BOBOT ALTERNATIF</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group" style="margin-top: 10px">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" value="<?php echo $row['kode']; ?>" name="kode" maxlength="30" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" name="nama" maxlength="5" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c1">C1</label>
            <input type="text" class="form-control" value="<?php echo $row['c1']; ?>" name="c1" maxlength="100" required>
            </div>
        
            <div class="form-group" style="margin-top: 10px">
            <label for="c2">C2</label>
            <input type="text" class="form-control" value="<?php echo $row['c2']; ?>" name="c2" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c3">C3</label>
            <input type="text" class="form-control" value="<?php echo $row['c3']; ?>" name="c3" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c4">C4</label>
            <input type="text" class="form-control" value="<?php echo $row['c4']; ?>" name="c4" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            <a class="btn btn-danger" href="?page=nilaibobot">Batal</a>
        </div>
    </div>
</form>

<?php
$conn->close();
?>