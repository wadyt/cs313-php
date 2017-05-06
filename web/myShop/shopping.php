<?php

require 'start.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
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
<h1>Shopping Cart</h1>
</div>
<h2>List of All Products</h2>
<table>
<tr>
  <th>Product</th>
  <th width="10px">&nbsp;</th>
  <th>Amount</th>
  <th width="10px">&nbsp;</th>
  <th>Action</th>
</tr>
<?php
for ($i=0; $i< count($products); $i++) {
?>
<tr>
  <td><?php echo($products[$i]); ?></td>
  <td width="10px">&nbsp;</td>
  <td><?php echo($amounts[$i]); ?></td>
  <td width="10px">&nbsp;</td>
  <td><a href="?add=<?php echo($i); ?>"><button type="button" class="btn-sm btn-warning">Add</button></a></td>


</tr>



<?php
}
?>

</table>


<a href="order.php"<button type="button" class="btn-sm btn-primary">Order Cart</button></a>
<p></p>
<footer class="col-md-12">
Copyright 2017
</footer>
</body>
</html>