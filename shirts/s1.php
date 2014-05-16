<?php
    require_once("../inc/config.php");
    require_once(ROOT_PATH . 'inc/products.php');
    $products = get_products_all();
    if(isset($_GET['id'])){
    //  GETTING DATA FOR TSHIRT
        $product_id = $_GET["id"];
        if(isset($products[$product_id])){
            $product = $products[$product_id];  
        }   
    }
    if (!isset($product)) {
        header("location:" . BASE_URL . "shirts/");
    }
    
    $pageTitle = "My shirts";
    $section = 'shirts';
    include(ROOT_PATH . 'inc/header.php');

?>

    <div class="section page">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo BASE_URL; ?>shirts/">Shirts</a> &gt; <?php echo $product['name'];?>
            </div>
            <div class="shirt-picture">
                <span>
                    <img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product['name'];?>">
                </span>
            </div>
            <div class="shirt-details">
                <h1><span class="price"><?php echo '$' . $product['price'];?></span><?php echo $product['name'];?></h1>
                <p class="note-designer">Design by Mike the frog.</p>
                <!-- Paypal Form BEGIN -->
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="<?php echo $product['paypal'];?>">
                    <input type="hidden" name="item_name" value="<?php echo $product['name'];?>" >
                    <table>
                    <tr>
                        <th>
                            <input type="hidden" name="on0" value="Size">
                            <label for="os0">Size</label>
                        </th>
                    <td><select name="os0" id="os0">
                        <?php foreach ($product['sizes'] as $sizes) { ?>
                            <option value="<?php echo $sizes;?>"><?php echo $sizes;?></option>
                        <?php } ?>
                    </select> </td></tr>
                    </table>
                    <input type="submit" value="Add to cart" name="submit">
                </form>
                <!-- Paypal Form END -->
            </div>
        </div>
    </div>

<?php 
    include(ROOT_PATH . 'inc/footer.php');
?>