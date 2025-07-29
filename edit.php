<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $title      = $_POST['title'];
    $category   = $_POST['category'];
    $description = $_POST['description'];
    $tags       = $_POST['tags'];

    $query = "UPDATE documents SET 
                title='$title',
                category='$category',
                description='$description',
                tags='$tags'
              WHERE id=$id";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil diupdate. <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
}
?>
