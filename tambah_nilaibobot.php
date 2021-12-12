<!-- awal proses -->
<?php

if(isset($_POST['simpan'])){
    $kode=$_POST['kode'];
	$nama=$_POST['nama'];
    $c1=$_POST['c1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];
    $c4=$_POST['c4'];

    // validasi
    $sql = "SELECT*FROM tbl_bobot WHERE kode='$kode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Kode nilai bobot alternatif sudah ditemukan</strong>
            </div>
        <?php
    }else{
	    //proses simpan
        $sql = "INSERT INTO tbl_bobot VALUES ('$kode','$nama','$c1','$c2','$c3','$c4')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=nilaibobot");
        }
    }
}
?>
<!-- akhir proses -->

<h2 align="center">INPUT NILAI BOBOT ALTERNATIF</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6" >

            <div class="form-group" style="margin-top: 10px">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" name="kode" maxlength="30" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" maxlength="5" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c1">C1</label>
            <input type="text" class="form-control" name="c1" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c2">C2</label>
            <input type="text" class="form-control" name="c2" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c3">C3</label>
            <input type="text" class="form-control" name="c3" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="c4">C4</label>
            <input type="text" class="form-control" name="c4" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan" >
            <a class="btn btn-danger" href="?page=nilaibobot">Batal</a>
        </div>
    </div>
</form>