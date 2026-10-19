<?php
include_once "../src/koneksi.php";

// Membaca variabel Kode pada URL (alamta browser)
if(isset($_GET['id_petugas'])){
    $id_petugas   = $_GET['id_petugas'];

    // Hapus data sesuai Kode yang terbaca
    $sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
    if($sql){
        // Refrsh halaman
        echo "<center> <b> <font color = 'red' size = '4' <p> Data Berhasil dihapus </p>
            </center> </b> </font> </br>
            <meta http-eqiuv='refresh' content='2; url=?open=data_petugas'>";
    }
}
else {
    // Jika tidak ada data Kode ditemukan di URL
    echo "<b>Data yang dihapus tidak ada</b>";
}
?>