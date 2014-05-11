
<?php 
require_once("../inc/config.php");
require_once(ROOT_PATH . 'inc/products.php');
$pageTitle = "My shirts";
$section = 'shirts';
include_once(ROOT_PATH . 'inc/header.php');
?>

	<div class="section shirts">
		<div class="wrapper">
			<h1>Shirt&rsquo;s Full Catalog Of Shirts</h1>
			
			<ul class="products">
				<?php foreach ($products as $product_id => $product) { 
						echo get_list_view_html($product_id, $product);
				}	?> 
			</ul>				
		</div>
	</div>
<?php 
require_once(ROOT_PATH . 'inc/footer.php');
?>