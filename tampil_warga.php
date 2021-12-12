<h2 align="center">DATA WARGA DESA NGLEBAK</h2>

<a class="btn btn-primary" href="?page=warga&action=tambah">Tambah</a>
<div class="row" style="margin-top:10px">
<table class="table table-bordered" style="margin-top: 40px" id="myTable">
    <thead>
      <tr>
        <th>No</th>  
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No.Telepon</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

    <!-- Awal proses -->
    <?php
     $sql = "SELECT*FROM warga ORDER BY nik ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['no']; ?></td>    
            <td><?php echo $row['nik']; ?></td>
            <td><?php echo $row['namawarga']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_tlp']; ?></td>
            <td align="center">
                <a class="btn btn-warning" href="?page=warga&action=update&nik=<?php echo $row['nik']; ?>">Update</a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=warga&action=hapus&nik=<?php echo $row['nik']; ?>">Hapus</a>
            </td>
        </tr>
    <?php
        }
        $conn->close();
    ?>
	<!-- Akhir proses -->

   </tbody>
</table>