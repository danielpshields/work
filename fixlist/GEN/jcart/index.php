
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>jCart - Free Ajax/PHP shopping cart</title>

		<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />

	</head>
	<body>
		<div id="wrapper">
			<h2>Demo Store</h2>

			<div id="sidebar">
				<div id="jcart">
	<form method='post' action='checkout.php'>
		<fieldset>
			<input type='hidden' name='jcartToken' value='09119508f39428df239a5d23d70a3b21' />
			<table border='1'>
				<thead>
					<tr>
						<th colspan='3'>
							<strong id='jcart-title'>Shopping Cart</strong> (2 Items)
						</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th colspan='3'>
							<input type='submit'  id='jcart-checkout' name='jcartCheckout' class='jcart-button' value='checkout' />
							<span id='jcart-subtotal'>Subtotal: <strong>$50.00</strong></span>
						</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td class='jcart-item-qty'>
							<input name='jcartItemId[]' type='hidden' value='ABC-123' />
							<input id='jcartItemQty-ABC-123' name='jcartItemQty[]' size='2' type='text' value='2' />
						</td>
						<td class='jcart-item-name'>
							Soccer Ball
							<input name='jcartItemName[]' type='hidden' value='Soccer Ball' />
						</td>
						<td class='jcart-item-price'>
							<span>$50.00</span><input name='jcartItemPrice[]' type='hidden' value='25.00' />
							<a class='jcart-remove' href='?jcartRemove=ABC-123'>remove</a>
						</td>
					</tr>
				</tbody>
			</table>

			<div id='jcart-buttons'>
				<input type='submit'  name='jcartUpdateCart' value='update' class='jcart-button' />
				<input type='submit'  name='jcartEmpty' value='empty' class='jcart-button' />
			</div>
		</fieldset>
	</form>

	<div id='jcart-tooltip'></div>
</div>
			</div>

			<div id="content">

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="09119508f39428df239a5d23d70a3b21" />
						<input type="hidden" name="my-item-id" value="ABC-123" />
						<input type="hidden" name="my-item-name" value="Soccer Ball" />
						<input type="hidden" name="my-item-price" value="25.00" />
						<input type="hidden" name="my-item-url" value="" />

						<ul>
							<li><strong>Soccer Ball</strong></li>
							<li>Price: $25.00</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="09119508f39428df239a5d23d70a3b21" />
						<input type="hidden" name="my-item-id" value="2" />
						<input type="hidden" name="my-item-name" value="Baseball Mitt" />
						<input type="hidden" name="my-item-price" value="19.50" />
						<input type="hidden" name="my-item-url" value="http://yahoo.com" />

						<ul>
							<li><strong>Baseball Mitt</strong></li>
							<li>Price: $19.50</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="09119508f39428df239a5d23d70a3b21" />
						<input type="hidden" name="my-item-id" value="3" />
						<input type="hidden" name="my-item-name" value="Hockey Stick" />
						<input type="hidden" name="my-item-price" value="33.25" />
						<input type="hidden" name="my-item-url" value="http://bing.com" />

						<ul>
							<li><strong>Hockey Stick</strong></li>
							<li>Price: $33.25</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button tip" />
					</fieldset>
				</form>

				<div class="clear"></div>

				<p><small>Having trouble? <a href="jcart/server-test.php">Test your server settings.</a></small></p>

							</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
	</body>
</html>
