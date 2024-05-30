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