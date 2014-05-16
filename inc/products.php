<?php

    // Argument: $product array with list of products to format
    // Return: HTML output for all product given inside a <li>
    function get_list_view_html($products){

        $output = "<li>";   
            $output .= '<a href="' . BASE_URL . 'shirts/' . $products['sku'] . '/">'; 
                $output .= '<img src="' . BASE_URL . $products['img'] . '" alt="' . $products['name'] . '">';   
                $output .= "<p>View Details</p>";
            $output .= "</a>";
        $output .= "</li>"; 

        return $output;
    }

    // Return: array with last 4 products
    function get_products_recent(){
        require(ROOT_PATH . "inc/database.php");
        try {
            $results = $db->prepare("
                SELECT name, price, img, sku, paypal 
                FROM products 
                ORDER BY sku DESC 
                LIMIT 4");
            $results->execute();
        } catch (Exception $e) {
            echo "Not possible to run the query...";
            exit();
        }

        $recent = $results->fetchAll(PDO::FETCH_ASSOC);
        $recent = array_reverse($recent);
        return $recent;
    }

    //Argument: string $s search param for name of the product
    //Return: an array that match the criteria
    //Return: false if nothjing found
    function get_products_search($s){

        require(ROOT_PATH . "inc/database.php");
        try {
            $results = $db->prepare("
                SELECT name, price, img, sku, paypal 
                FROM products  
                WHERE name LIKE ? 
                ORDER BY sku");
            $results->bindValue(1,"%" . $s . "%");
            $results->execute();
        } catch (Exception $e) {
            echo "Not possible to run the query...";
            exit();
        }

        $matches = $results->fetchAll(PDO::FETCH_ASSOC);

        return $matches;
    }
    // Pagination function
    // $positionStart is the first product in the page of products that is gonna be represented
    // $positionEnd is the last product in the page of products is gonna be presented
    // Return: array of product between $positionStart and $positionEnd
    function get_products_subset($positionStart, $positionEnd){

        require(ROOT_PATH . "inc/database.php");
        try {

            $offset = $positionStart - 1;
            $rows = $positionEnd - $positionStart + 1;

            $results = $db->prepare("SELECT name, price, img, sku, paypal 
                FROM products 
                ORDER BY sku  
                LIMIT ?, ? ");

            $results->bindParam(1,$offset,PDO::PARAM_INT);
            $results->bindParam(2,$rows,PDO::PARAM_INT);

            $results->execute();

        } catch (Exception $e) {
            echo "Not possible to run the query...";
            exit();
        }

        $subset = $results->fetchAll(PDO::FETCH_ASSOC);
        return $subset;    
    }
    // return number of all products in $count
    // $count string
    // return false if is not possible
    function get_products_count(){
        require(ROOT_PATH . "inc/database.php");
        try {
            $count = $db->query("
                SELECT COUNT(sku) 
                FROM products 
                ")->fetchColumn(0);
        } catch (Exception $e) {
            echo "Not possible to run the query...";
            exit();
        }

        return intval($count);
    }
    // return array with list of all products
    // not found, returns false boolean
    function get_products_all(){
        require(ROOT_PATH . "inc/database.php");
        try {
            $results = $db->prepare("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
            $results->execute();
        } catch (Exception $e) {
            echo "Not possible to run the query...";
            exit();
        }

        $products = $results->fetchAll(PDO::FETCH_ASSOC);

        return $products;        
    }
    
    // returns array withj one single record of product
    // return false if not found
    //  param int $sku id of product
    function get_product_single($sku){

    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->prepare("SELECT name, price, img, sku, paypal FROM products WHERE sku = ?");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    if ($product === false){ return $product; }

    $product["sizes"] = array();

    try {
        $results = $db->prepare("SELECT size 
            FROM products_sizes ps 
            INNER JOIN sizes s 
            ON ps.size_id = s.id 
            WHERE product_sku = ?
            ORDER BY `order`");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit();
    }


    while($row = $results->fetch(PDO::FETCH_ASSOC)){
        $product["sizes"][] = $row["size"];
    }

    return $product;     
    }
?>