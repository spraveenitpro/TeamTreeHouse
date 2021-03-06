<?php include("inc/products.php");

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: shirts.php");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>

				<div class="shirt-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="spraveenitpro@gmail.com">
						<input type="hidden" name="lc" value="IN">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<input type="hidden" name="item_number" value="<?php echo $product_id ; ?>">
						<input type="hidden" name="amount" value="<?php echo $product["price"]; ?>">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
						<table>
						<tr>
								<th>
									<input type="hidden" name="on0" value="Size">
									<label for="os0">Size</label>
								</th>
								<td>
									<select name="os0" id="os0">
										<?php foreach ($product["sizes"] as $size) { ?>
										<option value="<?php echo $size;?>"> <?php echo $size;?> </option>
										 <?php } ?>
							       </select> 
							   </td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
				</form>


					<p class="note-designer">* All shirts are designed by Mike the Frog.</p>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>