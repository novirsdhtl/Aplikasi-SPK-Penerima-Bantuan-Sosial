<!-- awal proses -->
<?php

if(isset($_POST['simpan'])){
    $no=$_POST['no'];
    $nik=$_POST['nik'];
	$namawarga=$_POST['namawarga'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];

    // validasi
    $sql = "SELECT*FROM warga WHERE nik='$nik'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>NIK sudah ditemukan</strong>
            </div>
        <?php
    }else{
	    //proses simpan
        $sql = "INSERT INTO warga VALUES ('$no','$nik','$namawarga','$alamat','$no_tlp')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=warga");
        }
    }
}
?>
<!-- akhir proses -->

<h2 align="center">INPUT DATA WARGA DESA NGLEBAK</h2>
<form action="" method="POST">
    <div class="row">
        <div class="col-sm-6" >

            <div class="form-group" style="margin-top: 10px">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" maxlength="16" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="namawarga">Nama</label>
            <input type="text" class="form-control" name="namawarga" maxlength="50" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" maxlength="50" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
            <label for="no_tlp">No.Telepon</label>
            <input type="text" class="form-control" name="no_tlp" maxlength="15" required>
            </div>

            <div class="form-group" style="margin-top: 20px">
            <input class="btn btn-primary" type="submit" name="simpan" value="Simpan" >
            <a class="btn btn-danger" href="?page=warga">Batal</a>
        </div>
    </div>
</form>