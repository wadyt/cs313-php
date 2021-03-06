<!DOCTYPE html>
<html>

<head>
    <title>CS313 - Wady Tupiza</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="assignments.html">My Assignments</a></li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="banner" class="jumbotron">
        <h1>Visit Ecuador</h1>
        <h2>BYUI - CS 313</h2>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="pics/main.jpg" alt="" style="width:100%;">
            </div>
            <div class="item">
                <img src="pics/main2.jpg" alt="" style="width:100%;">
            </div>
            <div class="item">
                <img src="pics/main3.jpg" alt="" style="width:100%;">
            </div>
            <div class="item">
                <img src="pics/main4.jpg" alt="" style="width:100%;">
            </div>
            <div class="item">
                <img src="pics/main5.jpg" alt="" style="width:100%;">
            </div>
            
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="main">
        <div id="col1" class="col-md-3">
            <h2>Assignments</h2>
            <a href="assignments.html">
                <img src="pics/assign.jpg" class="img-rounded" alt="Assignments" style="width:100%;height:100%;border:0;">
            </a>
        </div>
        <div id="col2" class="col-md-3">
            <h2>Sierra</h2>
            <a href="#">
                <img src="pics/q1.jpg" class="img-rounded" alt="Laguna Quilotoa" style="width:100%;height:100%;border:0;">
            </a>
        </div>
        <div id="col3" class="col-md-3">
            <h2>Jungle</h2>
            <a href="#">
                <img src="pics/q2.jpg" class="img-rounded" alt="Columpio al cielo" style="width:100%;height:100%;border:0;">
            </a>
        </div>
        <div id="col4" class="col-md-3">
            <h2>Quito</h2>
            <a href="#">
                <img src="pics/q3.jpg" class="img-rounded" alt="Quito Historico" style="width:100%;height:100%;border:0;">
            </a>
        </div>
    </div>
    <footer class="col-md-12">
        <p></p>
        Copyright 2017
    </footer>
</body>

</html>
