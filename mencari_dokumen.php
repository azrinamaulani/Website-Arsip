<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Arsip Dokumen</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
<br>
<h2>Daftar Dokumen</h2>
<form method="GET">
    <input type="text" name="search" placeholder="Cari dokumen..." value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    <button type="submit">Cari</button>
</form>

<table border="1" cellpadding="8">
    <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Tags</th>
        <th>File</th>
        <th>Ukuran</th>
        <th>Tanggal Upload</th>
    </tr>
    <?php
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $query = "SELECT * FROM documents";
    if (!empty($search)) {
        $query .= " WHERE title LIKE '%$search%' OR category LIKE '%$search%' OR tags LIKE '%$search%'";
    }
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['title']}</td>
            <td>{$row['category']}</td>
            <td>{$row['tags']}</td>
            <td><a href='{$row['file_path']}' target='_blank'>Download</a></td>
            <td>" . round($row['file_size'] / 1024, 2) . " KB</td>
            <td>{$row['upload_date']}</td>
        </tr>";
    }
    ?>
</table>
<br>
<center><b><a href="index1.php">kembali kedepan</a></b></center>
</body>
</html>
