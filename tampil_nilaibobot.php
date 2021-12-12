<h2 align="center">NILAI BOBOT ALTERNATIF</h2>
<a class="btn btn-primary" href="?page=nilaibobot&action=tambah" style="margin-bottom: 10px">Tambah</a>
<table class="table table-bordered" style="margin-top: 100px" id="myTable">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

    <!-- Awal proses -->
    <?php
     $sql = "SELECT*FROM tbl_bobot ORDER BY kode ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['c1']; ?></td>
                    <td><?php echo $row['c2']; ?></td>
                    <td><?php echo $row['c3']; ?></td>
                    <td><?php echo $row['c4']; ?></td>
                    <td align="center">
                        <a class="btn btn-warning" href="?page=nilaibobot&action=update&kode=<?php echo $row['kode']; ?>">Update</a>
                    </td>
                </tr>
            <?php
        }
        $conn->close();
    ?>
	<!-- Akhir proses -->

   </tbody>
</table>