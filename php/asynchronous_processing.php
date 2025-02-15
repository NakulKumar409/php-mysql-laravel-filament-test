<?php

function handleFileUpload($file) {
    
    $filePath = '/uploads/' . $file['name'];
    move_uploaded_file($file['tmp_name'], $filePath);

    
    exec("php /path/to/processFile.php '$filePath' > /dev/null 2>&1 &");

    return "File uploaded and processing started.";
}
?>