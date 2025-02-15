<?php

try {
    $db->beginTransaction();


    $db->exec("INSERT INTO orders (user_id, total) VALUES (1, 100.00)");
    $orderId = $db->lastInsertId();

    $db->exec("INSERT INTO order_items (order_id, product_id, quantity) VALUES ($orderId, 1, 2)");

 
    $db->exec("INSERT INTO payments (order_id, amount) VALUES ($orderId, 100.00)");

    $db->commit();
} catch (Exception $e) {
    $db->rollBack();
    echo "Error: " . $e->getMessage();
}
?>