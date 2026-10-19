<?php
include_once "../src/koneksi.php";

// Membaca variabel Kode pada URL (alamta browser)
if(isset($_GET['nisn'])){
    $nisn   = $_GET['nisn'];

    // Hapus data sesuai Kode yang terbaca
    $sql = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn='$nisn'");
    if($sql){
        // Refrsh halaman
        echo "<center> <b> <font color = 'red' size = '4' <p> Data Berhasil dihapus </p>
        </center> </b> </font> </br>
        <meta http-eqiuv='refresh' content='2; url=?open=data_siswa'>";
    }
}
else {
    // Jika tidak ada data Kode ditemukan di URL
    echo "<b>Data yang dihapus tidak ada</b>";
}
?>