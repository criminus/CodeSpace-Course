<?php

//Get all items from this users basket
function getBasket ($user_id) {
    global $pdo;

    try {
        //Basic join selection
        $query = 'SELECT
                    p.item_id,
                    p.item_name,
                    p.item_desc,
                    p.item_img,
                    p.item_price,
                    b.quantity
                FROM
                    basket b
                JOIN
                    products p oN b.item_id = p.item_id
                WHERE
                    b.user_id = :user_id';

        $stmt= $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $basket = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $basket;

    } catch (PDOException $e) {
         die('Error querying the database: '. $e->getMessage());
    }
}

function getTotal($user_id) {
    global $pdo;

    try {
        //Get the sum of all items for this user_id
        $query = 'SELECT SUM(total) AS total_sum FROM basket WHERE user_id = :user_id';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_ASSOC);

        //If we find anything we return the value, otherwise, set it to 0
        return $total && $total['total_sum'] !== null ? $total['total_sum'] : 0;

    } catch (PDOException $e) {
        die('Error while querying the database: '. $e->getMessage());
    }
}