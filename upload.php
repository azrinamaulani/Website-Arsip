<?php
include 'koneksi.php';

if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $tags = $_POST['tags'];

    $file_name = $_FILES['file']['name'];
    $file_tmp  = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $mime_type = $_FILES['file']['type'];

    $new_name = time() . '_' . $file_name;
    $file_path = 'uploads/' . $new_name;

    if (move_uploaded_file($file_tmp, $file_path)) {
        $sql = "INSERT INTO documents (title, category, description, tags, file_name, file_path, file_size, mime_type)
                VALUES ('$title', '$category', '$description', '$tags', '$file_name', '$file_path', $file_size, '$mime_type')";
        mysqli_query($conn, $sql);
        header("Location: index.php?success=1");
    } else {
        echo "Upload gagal!";
    }
}
?>
