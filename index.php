<?php 
    date_default_timezone_set("Asia/Jakarta");
    include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- dataTables CSS -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <title>SPK Penerima Bantuan Sosial</title>
  </head>
  <body>
    <!-- Awal navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: gold">
        <a class="navbar-brand" href="#" style="color: white; font-weight: bold"></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="index.php" style="font-weight: bold">Beranda <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=warga" style="font-weight: bold">Alternatif <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=kriteria" style="font-weight: bold">Kriteria <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=nilaibobot" style="font-weight: bold">Nilai Bobot <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=rangking" style="font-weight: bold">Perangkingan <span class="sr-only"></span></a>
            </li>
            
        </ul>
        </nav>
    <!-- Akhir navbar -->
    
    <!-- Awal container -->
    <div class="container" style="margin-top: 30px">

    <?php

        // setting variabel page & action
        $page = isset($_GET['page']) ? $_GET['page'] : "";
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        // setting halaman
        if ($page==""){
            include "welcome.php";
        }elseif ($page=="warga"){
            if ($action==""){
                include "tampil_warga.php";
            }elseif ($action=="tambah"){
                include "tambah_warga.php";
            }elseif ($action=="update"){
                include "update_warga.php";
            }else{
                include "hapus_warga.php";
            }
        }elseif ($page=="kriteria"){
            if ($action==""){
                include "tampil_kriteria.php";
            }elseif ($action=="tambah"){
                include "tambah_kriteria.php";
            }elseif ($action=="update"){
                include "update_kriteria.php";
            }else{
                include "hapus_kriteria.php";
            }
        }elseif ($page=="nilaibobot"){
            if ($action==""){
                include "tampil_nilaibobot.php";
            }elseif ($action=="tambah"){
                include "tambah_nilaibobot.php";
            }elseif ($action=="update"){
                include "update_nilaibobot.php";
            }else{
                include "";
            }
        }elseif ($page=="rangking"){
            if ($action==""){
                include "tampil_rangking.php";
            }else{
                include "";
            }
        }

        ?>
    
    </div>
    <!-- Akhir container -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
    </script>
  </body>
</html>