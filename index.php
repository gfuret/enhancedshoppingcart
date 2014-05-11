<?php 
require_once("inc/config.php");

$pageTitle = "Shirts4Mike Store, Unique T-shirts designed by a frog";
$section = 'Home';
include_once( ROOT_PATH . 'inc/header.php');
?>

	<div class="section banner">

		<div class="wrapper">

			<img class="hero" src="<?php echo BASE_URL; ?>img/mike-the-frog.png" alt="Mike the Frog says:">
			<div class="button">
				<a href="<?php echo BASE_URL; ?>shirts.php">
					<h2>Hey, I&rsquo;m Mike!</h2>
					<p>Check Out My Shirts</p>
				</a>
			</div>
		</div>

	</div>

	<div class="section shirts latest">

		<div class="wrapper">

			<h2>Mike&rsquo;s Latest Shirts</h2>
			<?php include(ROOT_PATH . 'inc/products.php'); 
			$totalProducts = count($products);	
			$position = 0;	?>
			<ul class="products">
				<?php foreach ($products as $product_id => $product) { 
						$position++;
						if($position <= $totalProducts-4){ continue;}
						echo get_list_view_html($product_id, $product);
				}	?> 						
			</ul>

		</div>
	</div>

<?php include_once( ROOT_PATH . 'inc/footer.php');?>