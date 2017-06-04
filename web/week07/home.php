<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">CS 313</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php">Home</a></li>
            <li><a href="../assignements.html">My Assigments</a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<div id="wrapper">

	<div class="container">

      <div class="col-md-3">
      </div>

    <div id="banner" class="col-md-8">
      <img src="cars.png" alt="rent a car" style="width:591px;height:241px;">
    </div>
      <div class="col-md-4">
      </div>
    	
        
        <div class="row">
        <div class="col-lg-7">
        <h1>RENT A CAR</h1>
        <h2>Make your choice</h2>
        </div>
        </div>
    
    </div>
    
    </div>

   

    <div class="col-lg-4">
    </div>

   <div class="col-lg-8"> 
<form action="results.php" method="POST">
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('dbtest');

$sql = "SELECT * FROM place";
$result = mysql_query($sql);

echo "<select name='username'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['place'] ."'>" . $row['place'] ."</option>";
}
echo "</select>";


$sql = "SELECT * FROM car";
$result = mysql_query($sql);

echo "<select name='brand'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['brand'] ."'>" . $row['brand'] . $row['year'] ."</option>";
}
echo "</select>";

$sql = "SELECT * FROM drop_place";
$result = mysql_query($sql);

echo "<select name='place'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['drop_place'] ."'>" . $row['drop_place'] . "</option>";
}
echo "</select>";
    
    ?>
<button type="submit" class="btn btn-default">Submit</button>

    </form>

    </div>


    
</body>
</html>
<?php ob_end_flush(); ?>