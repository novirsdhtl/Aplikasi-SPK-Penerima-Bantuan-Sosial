<!-- awal proses -->
<?php

if(isset($_POST['simpan'])){
    $kode=$_POST['kode'];
	$no=$_POST['no'];
    $nm_kriteria=$_POST['nm_kriteria'];
    $nilai_bobot=$_POST['nilai_bobot'];

    // validasi
    $sql = "SELECT*FROM tbl_kriteria WHERE kode='$kode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Kode kriteria sudah ditemukan</strong>
            </div>
        <?php
    }else{
	    //proses simpan
        $sql = "INSERT INTO tbl_kriteria VALUES ('$kode','$no','$nm_kriteria','$nilai_bobot')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=kriteria");
        }
    }
}
?>
<!-- akhir proses -->

<h2 align="center">INPUT KRITERIA</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6" >

            <div class="form-group" style="margin-top: 10px">
            <label for="no">No</label>
            <input type="text" class="form-control" name="no" maxlength="30" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" name="kode" maxlength="5" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="nm_kriteria">Nama Kriteria</label>
            <input type="text" class="form-control" name="nm_kriteria" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="nilai_bobot">Nilai Bobot</label>
            <input type="text" class="form-control" name="nilai_bobot" maxlength="100" required>
            </div>

            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan" >
            <a class="btn btn-danger" href="?page=kriteria">Batal</a>
        </div>
    </div>
</form>