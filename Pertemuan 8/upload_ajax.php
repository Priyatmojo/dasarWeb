<?php
if (isset($_FILES['file']['name'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    // $extensions = array("pdf", "doc", "docx", "txt");
    $extensions = array("png", "jpg", "jpeg");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "eksistani file yang diizinkan adalah PDF, DOC, DOCX, atau TXT";
    }

    if ($file_size > 2097152) {
        $errors[] = 'ukuran file tidak boleh lebih dari 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents" . $file_name);
        echo "file berhasil di upload";
    } else {
        echo implode(" ", $errors);
    }
}
?>