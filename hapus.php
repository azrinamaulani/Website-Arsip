<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "arsip_dokumen");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses hapus data jika parameter id tersedia
if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // casting untuk keamanan

    $query = "DELETE FROM documents WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus. <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
