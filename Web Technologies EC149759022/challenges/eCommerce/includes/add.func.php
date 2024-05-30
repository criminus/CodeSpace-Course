<?php

function addItemToCart ($id) {
    global $pdo;

    try {
        //First we check if this item exists
        $query = 'SELECT * FROM products WHERE item_id = :item_id';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':item_id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if item found with this id
        if ($item) {
            //Item exists so we do another query to update this user's cart
            $user_id = $_SESSION['user_id'];
            //Make sure the item_price is float not integer
            $item_price = number_format((float)$item['item_price'], 2, '.', '');
            //We will use ON DUPLICATE KEY to check if item_id already exists for this user and update quantity by 1
            $query  = 'INSERT INTO basket (user_id, item_id, quantity, total) VALUES (:user_id, :item_id, 1, :item_price)
                    ON DUPLICATE KEY UPDATE quantity = quantity + 1, total = total + VALUES(total)';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->bindParam(':item_id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':item_price', $item_price, PDO::PARAM_STR);
            $stmt->execute();

            //To prevent refresh exploit, we store the last_added_item in the session
            $_SESSION['last_added_item'] = $id;

        } else {
            return false;
        }

    } catch (PDOException $e) {
        die('Error querying the database: '. $e->getMessage());
    }
}

//While adding the item to the cart, we would like to actually see which item and its details so we don;t confuse the customer
function getItemInfo($id) {
    //Get PDO inside the function using global
    global $pdo;
    
    try {
        $stmt = $pdo->prepare('SELECT * FROM products WHERE item_id = :item_id');
        $stmt->bindParam(':item_id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        return $item;

    } catch (PDOException $e) {
        die('Error fetching items' . $e->getMessage());
    }
}