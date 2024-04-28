<?php
    include_once('connection.php');

    if($conn->connect_error){
        echo "Connection error: " . $conn->connect_error;
    }
    else{
        $sql = "SELECT * FROM products";

        $result = $conn->query($sql);

        if(!$result){
            echo "Error: " . $conn->error;
        }
        else{
            $row = $result->fetch_assoc();

            if(empty($row)){
                echo "No products registered!";
            }
            else{
                $products = [];

                do{
                    $product = [
                        'id' => $row['id'],
                        'name' => $row['name']
                    ];

                    array_push($products, $product);
                }while($row = $result->fetch_assoc());

                header('Content-Type: application/json');
                echo json_encode($products);
                $conn->close();
            }
        }
    }
?>