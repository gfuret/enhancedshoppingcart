<?php

	require_once('../inc/config.php');

	$search_term = '';
	if (isset($_GET['s'])) {
		$search_term = trim($_GET['s']);
		if (!empty($search_term)){
			require_once(ROOT_PATH . "inc/products.php");
			$products = get_products_search($search_term);

		}
	}
	

	$pageTitle = "Search";
	$section = 'search';
	include_once( ROOT_PATH . 'inc/header.php');
?>

		<div class="section shirts search page">
				<div class="wrapper">
					<h1>Search</h1>
					<form action="./" method="get">
						<input type="text" name="s" value="<?php if (isset($search_term)) { echo htmlspecialchars($search_term); } ?>">
						<input type="submit" value="Go">
					</form>

					<?php
						if(!empty($search_term)){
							if (!empty($products)) {
								echo '<ul class="products">';
									foreach ($products as $product) {
										echo get_list_view_html($product);
									}
								echo "<ul>";
							} else {
								echo "<p>Nothing found!  ...But try again with another search term</p>";
							}
						}

					?>
				</div>
		</div>


<?php
	include_once( ROOT_PATH . 'inc/footer.php');

?>