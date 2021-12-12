<?php

$kode=$_GET['kode'];

$sql = "DELETE FROM tbl_kriteria WHERE kode='$kode'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=kriteria");
}
$conn->close();
?>