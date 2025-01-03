<?php
    #1. Koneksi file
    include("../koneksi.php");

    #2. Mengambil id dari tombol hapus
    $id = $_GET['xyz'];

    #3. Menulis query
    $hapus = "DELETE from jurusans WHERE id='$id'";

    #4. Jalankan Query
    $proses = mysqli_query($koneksi, $hapus);

    #5. Mengalihkan halaman
    header("location:index.php")
?>