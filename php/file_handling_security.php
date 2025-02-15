<?php

function uploadImage($file) {
    $allowedTypes = ['image/jpeg', 'image/png'];
    $maxSize = 2 * 1024 * 1024; // 2MB

    if (!in_array($file['type'], $allowedTypes)) {
        throw new Exception("Invalid file type.");
    }

    if ($file['size'] > $maxSize) {
        throw new Exception("File size exceeds limit.");
    }

    $filePath = '/uploads/' . uniqid() . '_' . basename($file['name']);
    move_uploaded_file($file['tmp_name'], $filePath);

    return $filePath;
}
?>