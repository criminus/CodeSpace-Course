<?php
//Require config for database query
require 'config.php';

//Create a function to get my items based on session id
function getMyItems($user_id) {
    //Global pdo for database querying
    global $pdo;

    try {
        $query = 'SELECT SUM(quantity) AS total_quantity FROM basket WHERE user_id = :user_id';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //Return results and if none, we set quantity to 0
        return $result && $result['total_quantity'] !== null ? $result['total_quantity'] : 0;
    } catch (PDOException $e) {
        die('Error connecting to the database: ' . $e->getMessage());
    } 
}

//Get total orders for this user (previous orders)
function getMyOrders($user_id) {
    //Global pdo for database querying
    global $pdo;

    try {
        $query = 'SELECT COUNT(order_id) AS total_orders FROM orders WHERE user_id = :user_id';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //Return results and if none, we set quantity to 0
        return $result && $result['total_orders'] !== null ? $result['total_orders'] : 0;
    } catch (PDOException $e) {
        die('Error connecting to the database: ' . $e->getMessage());
    } 
}