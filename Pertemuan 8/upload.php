<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents";
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            // $thumbnailWidth = 200;
            // $thumbnailHeight = 200;

            // $sourceImage = imagecreatefromjpeg($targetFile);
            // $sourceWidth = imagesx($sourceImage);
            // $sourceHeight = imagesy($sourceImage);

            // $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            // imagecopyresampled($thumbnailImage, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $sourceWidth, $sourceHeight);

            // $thumbnailFile = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
            // imagejpeg($thumbnailImage, $thumbnailFile);

            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>