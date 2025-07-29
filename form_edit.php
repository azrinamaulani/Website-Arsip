<?php

$koneksi = mysqli_connect("localhost", "root", "", "arsip_dokumen");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil ID dari URL
$id = intval($_GET['id']); // menghindari SQL Injection

// Ambil data dokumen berdasarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM documents WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dokumen</title>
     <link rel="stylesheet" href="css.css">
</head>
<body>
    <center>
     <h2>Edit Dokumen</h2>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Judul: <input type="text" name="title" value="<?= $row['title'] ?>"><br>
        Kategori: <input type="text" name="category" value="<?= $row['category'] ?>"><br>
        Deskripsi: <textarea name="description"><?= $row['description'] ?></textarea><br>
        Tag: <input type="text" name="tags" value="<?= $row['tags'] ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</center>
</body>
</html>
