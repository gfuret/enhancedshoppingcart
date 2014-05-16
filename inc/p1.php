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
        $recent = array();
        $all = get_products_all();
        $totalProducts = count($all);  
        $position = 0;  
        foreach ($all as $product) { 
            $position++;
            if($position <= $totalProducts-4){ continue;}
            $recent[] = $product;
        }
        return $recent;
    }

    //Argument: string $s search param for id or name of the product
    //Return: an array that match the criteria
    function get_products_search($s){
        $results = array();
        $all = get_products_all();
        foreach ($all as $product) {
            if (stripos($product['name'], $s) !==   false OR stripos($product['sku'], $s) !== false) {
                $results[] = $product;
            }
        }
        return $results;
    }
    // Pagination function
    // $positionStart is the first product in the page of products that is gonna be represented
    // $positionEnd is the last product in the page of products is gonna be presented
    // Return: array of product between $positionStart and $positionEnd
    function get_products_subset($positionStart, $positionEnd){
        $subset = array();
        $all = get_products_all();
        $position = 0;
        foreach ($all as $product) {
            $position++;
            if ($position >= $positionStart AND $position <= $positionEnd) {
                $subset[] = $product;
            }
        }
        return $subset;    
    }
    // return number of all products
    function get_products_count(){
        return count(get_products_all());
    }
    // return list of all products
    function get_products_all(){
        

        require(ROOT_PATH . "inc/database.php");
        try {
            $results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
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

    return $product;     
    }

?>