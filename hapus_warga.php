<?php

$nik=$_GET['nik'];

$sql = "DELETE FROM warga WHERE nik='$nik'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=warga");
}
$conn->close();
?>