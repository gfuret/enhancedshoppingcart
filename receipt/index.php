<?php
	require_once("../inc/config.php");
	$pageTitle = "Thanks for your order";
	$section = 'none';
	include_once(ROOT_PATH . 'inc/header.php');
?>

	<div class="section page">
		<div class="wrapper">
		<h1>Thank you!</h1>
			<p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase 
				has been emailed to you. You may log into your account at <a href="http://www.paypal.com/ee">www.paypal.com/ee</a> to view details of 
				this transaction.
			</p>
			<p>If you need another shirt again, visit the <a href="<?php  echo BASE_URL; ?>shirts.php"> page again</a></p>
		</div>
	</div>
<?php 
	include_once(ROOT_PATH . 'inc/footer.php');
?>