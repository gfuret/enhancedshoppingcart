
<?php 
require_once("../inc/config.php");
require_once(ROOT_PATH . 'inc/products.php');

$current_page = 1;
// retrieve current page from query string. set 1 if blank
if (isset($_GET['pg'])){
	if(!empty($_GET['pg'])){
		$current_page = $_GET['pg'];
	}
}
// set string to value 0
$current_page = intval($current_page);

$total_products = get_products_count();
$products_per_page = 8;
$total_pages = ceil($total_products / $products_per_page);

// if the page that was set is bigger to the products avaible
// set the number to last page
if($current_page > $total_pages){
	header("Location: ./?pg=" . $total_pages);
}
// if the page that was set is smaller to the products avaible
// set the number to first page
if($current_page < 1){
	header("Location: ./");
}

$start = (($current_page - 1) * $products_per_page) + 1;
$end = $current_page * $products_per_page;
if ($end > $total_products) {
	$end = $total_products;
}

// set the 1st and last page page for the current page
$products = get_products_subset($start,$end);
$pageTitle = "My shirts";
$section = 'shirts';
include_once(ROOT_PATH . 'inc/header.php');
?>

	<div class="section shirts">
		<div class="wrapper">
			<h1>Shirt&rsquo;s Full Catalog Of Shirts</h1>
			
			<?php include(ROOT_PATH . 'inc/partial-list-navigation.html.php'); ?>

			<ul class="products">
				<?php foreach ($products as $product) { 
						echo get_list_view_html($product);
				}	?> 
			</ul>	

			<?php include(ROOT_PATH . 'inc/partial-list-navigation.html.php'); ?>

		</div>
	</div>
<?php 
require_once(ROOT_PATH . 'inc/footer.php');
?>