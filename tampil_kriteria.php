<h2 align="center">KRITERIA</h2>
<a class="btn btn-primary" href="?page=kriteria&action=tambah">Tambah</a>
<table class="table table-bordered" style="margin-top: 20px">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Kriteria</th>
        <th>Nilai Bobot</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

    <!-- Awal proses -->
    <?php
     $sql = "SELECT*FROM tbl_kriteria ORDER BY kode ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nm_kriteria']; ?></td>
                    <td><?php echo $row['nilai_bobot']; ?></td>
                    <td align="center">
                        <a class="btn btn-warning" href="?page=kriteria&action=update&kode=<?php echo $row['kode']; ?>">Update</a>
                        <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=kriteria&action=hapus&kode=<?php echo $row['kode']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
        }
        $conn->close();
    ?>
	<!-- Akhir proses -->

   </tbody>
</table>