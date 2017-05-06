<?php

require 'start.php'
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Order</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">CS 313</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a>
					</li>
					<li><a href="shopping.php">Shopping Cart</a>
				</li>
				<li>
					<a href="order.php">Order Form</a>
				</li>
				<li>
          <a href="checkout.php">Check Out</a>
        </li>
        <li>
          <a href="confirm.php">Payment</a>
        </li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<div id="shoppingBanner" class="jumbotron">
<h1>Your Order</h1>
</div>
<?php
if ( isset($_SESSION["cart"]) ) {
?>
<table>
<tr>
	<th>Product</th>
	<th width="10px">&nbsp;</th>
	<th>Qty</th>
	<th width="10px">&nbsp;</th>
	<th>Amount</th>
	<th width="10px">&nbsp;</th>
	<th>Action</th>
</tr>
<?php
$total = 0;
foreach ( $_SESSION["cart"] as $i ) {
?>
<tr>
	<td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
	<td width="10px">&nbsp;</td>
	<td><?php echo( $_SESSION["qty"][$i] ); ?></td>
	<td width="10px">&nbsp;</td>
	<td><?php echo( $_SESSION["amounts"][$i] ); ?></td>
	<td width="10px">&nbsp;</td>
	<td><a href="?delete=<?php echo($i); ?>"><button type="button" class="btn-sm btn-danger">Delete</button></a></td>
</tr>
<?php
$total = $total + $_SESSION["amounts"][$i];
}
$_SESSION["total"] = $total;
?>
<tr>
	<td colspan="7">Total : <?php echo($total); ?></td>
</tr>
</table>
<?php
}
?>

<table>
<tr>
  <td colspan="5"><a href="?reset=true"><button type="button" class="btn-sm btn-danger">Reset</button></a></td>
  <td colspan="5"><a href="shopping.php"><button type="button" class="btn-sm btn-primary">Keep Shopping</button></a></td>
  <td colspan="5"><a href="checkout.php"><button type="button" class="btn-sm btn-primary">Check Out</button></a></td>
</tr>
</table>

<footer class="col-md-12">
Copyright 2017
</footer>
</body>
</html>