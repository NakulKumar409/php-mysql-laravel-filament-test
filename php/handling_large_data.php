<?php

function processLargeCSV($filePath) {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if (($handle = fopen($filePath, 'r')) !== false) {
        
        $db->beginTransaction();

        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            
            $stmt = $db->prepare("INSERT INTO table_name (column1, column2) VALUES (?, ?)");
            $stmt->execute([$data[0], $data[1]]);
        }

        
        $db->commit();
        fclose($handle);
    }
}
?>