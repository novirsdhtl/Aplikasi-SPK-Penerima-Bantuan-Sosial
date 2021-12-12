<h2 align="center">PERANGKINGAN</h2>
<div class="form-group" style="margin-top: 50px">

<?php
$bobot = array(0.10,0.30,0.20,0.40);
?>


<table class="table table-bordered" style="margin-top: 20px">
<h3 align="side">Nilai Alternatif</h3>
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
      </tr>
    </thead>
    <tbody>
    <div class="form-group" style="margin-top: 20px">
            

    <!-- Awal proses -->
    <?php
     $atribut = mysqli_query($conn, 'SELECT min(c1) AS min_c1, max(c2) AS max_c2, min(c3) AS min_c3, min(c4) AS min_c4 FROM tbl_bobot');
 
     $atr = mysqli_fetch_array($atribut);
 
     $sql1 = mysqli_query($conn, 'SELECT * FROM tbl_bobot');
     while($row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
         ?>
                 <tr>
                     <td><?php echo $row1['kode'] ?></td>
                     <td><?php echo $row1['nama'] ?></td>
                     <td><?php echo $row1['c1'] ?></td>
                     <td><?php echo $row1['c2'] ?></td>
                     <td><?php echo $row1['c3'] ?></td>
                     <td><?php echo $row1['c4'] ?></td>
                 <tr>
         <?php
     }
         ?>
         

<!-- Normalisasi -->
<table class="table table-bordered" style="margin-top: 20px">
<h3 align="side">Normalisasi</h3>
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
      </tr>
    </thead>
    <tbody>
    <div class="form-group" style="margin-top: 20px">
            

    <!-- Awal proses -->
    <?php
     $atribut = mysqli_query($conn, 'SELECT min(c1) AS min_c1, max(c2) AS max_c2, min(c3) AS min_c3, min(c4) AS min_c4 FROM tbl_bobot');
 
     $atr = mysqli_fetch_array($atribut);
 
     $sql2 = mysqli_query($conn, 'SELECT * FROM tbl_bobot');
     while($row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC)){
         ?>
                 <tr>
                     <td><?php echo $row2['kode'] ?></td>
                     <td><?php echo $row2['nama'] ?></td>
                     <td><?php echo round (($atr['min_c1']/$row2['c1']), 2) ?></td>
                     <td><?php echo round (($row2['c2']/$atr['max_c2']), 2) ?></td>
                     <td><?php echo round (($atr['min_c3']/$row2['c3']), 2) ?></td>
                     <td><?php echo round (($atr['min_c4']/$row2['c4']), 2) ?></td>
                 <tr>
         <?php
    }    
    ?>     

<!-- Nilai Preferensi -->

<table class="table table-bordered" style="margin-top: 20px">
<h3 align="side">Preferensi</h3>

    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Skor</th>
      </tr>
    </thead>
    <tbody>
    <div class="form-group" style="margin-top: 20px">
            

    <!-- Awal proses -->
    <?php
     $atribut2 = mysqli_query($conn, 'SELECT min(c1) AS min_c1, max(c2) AS max_c2, min(c3) AS min_c3, min(c4) AS min_c4 FROM tbl_bobot');
 
     $atr2 = mysqli_fetch_array($atribut2);
 
     $sql3 = mysqli_query($conn, 'SELECT * FROM tbl_bobot');
     while($row3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC)){
        $poin = (($atr2['min_c1']/$row3['c1'])*$bobot[0]) + (($row3['c2']/$atr2['max_c2'])*$bobot[1]) + (($atr2['min_c3']/$row3['c3'])*$bobot[2]) + (($atr2['min_c4']/$row3['c4'])*$bobot[3]);

         ?>
                 <tr>
                     <td><?php echo $row3['kode'] ?></td>
                     <td><?php echo $row3['nama'] ?></td>
                     <td><?php echo round ($poin, 2); ?></td>
                 <tr>
         <?php
         
    }    
    ?>   
    <tr>
        <td colspan="10">
        <div class="form-group" style="margin-down: 20px">
        <a class="btn btn-danger" href="?page=nilaibobot">Simpan</a>
        </td>
        <tr>



    

