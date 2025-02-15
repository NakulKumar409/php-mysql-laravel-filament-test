<?php

function getUserPosts($userId) {
    
    static $db = null;
    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

   
    $stmt = $db->prepare("SELECT * FROM posts WHERE user_id = ?");
    $stmt->execute([$userId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>