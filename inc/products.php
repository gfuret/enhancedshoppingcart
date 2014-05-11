<?php

	// build HTML output
	function get_list_view_html($product_id, $product){

		$output = "<li>";	
			$output .= '<a href="' . BASE_URL . 'shirts/' . $product_id . '/">'; 
				$output .= '<img src="' . BASE_URL . $product['img'] . '" alt="' . $product['name'] . '">';	
				$output .= "<p>View Details</p>";
			$output .= "</a>";
		$output .= "</li>"; 

		return $output;
	}





$products = array();
$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18,
    "paypal" => 'G6A9PKRY2YFH6',
    "sizes" => array('X-Large', 'Large', 'Medium', 'Small')   
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => 'Y2TFLBLXER5XU',
    "sizes" => array('X-Large', 'Large', 'Medium', 'Small','X-small')
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => 'L3N34SPZP6W7W',
    "sizes" => array('Large', 'Small')

);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => 'WH7JYFAJJ62M8',
    "sizes" => array('Large', 'Medium', 'Small')  
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => 'ZLH5TQ77ZN6DN',
    "sizes" => array('Large', 'Medium', 'Small')  
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => 'ZD7CTDKS6X7RQ',
    "sizes" => array('Large', 'Medium', 'Small', 'X-small')  
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => '2GRJ2HT6UYU52',
    "sizes" => array('Large', 'Medium', 'Small')  
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => 'W2296ZDDERHK4',
    "sizes" => array('Large', 'Medium', 'Small')  
);

?>