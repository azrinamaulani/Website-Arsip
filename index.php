<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Arsip Dokumen</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<center>
<h2>Upload Dokumen</h2>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Judul dokumen" required><br>
    <input type="text" name="category" placeholder="Kategori" required><br>
    <textarea name="description" placeholder="Deskripsi dokumen"></textarea><br>
    <input type="text" name="tags" placeholder="Tag, pisahkan dengan koma"><br>
    <input type="file" name="file" required><br>
    <button type="submit">Upload</button>
</form>
<br>
<b><a href="index1.php">kembali kedepan</a></b>
</center>





</body>
</html>
