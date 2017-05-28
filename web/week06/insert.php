<?php


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO travel.customer (customer_id, name, lastname, address)
     VALUES (1, 'Paul', 'Jackson', 'California'), 
            (2, 'Allen', 'Roberts', 'Texas'),
            (3, 'Teddy', 'Ford', 'Norway'), 
            (4, 'Mark', 'Johnson', 'Rich-Mond'),
            (5, 'David', 'Parker', 'Texas'), 
            (6, 'Kim', 'Lucas', 'South-Hall'), 
            (7, 'James', 'King', 'Houston')";

    $sql = "INSERT INTO travel.car (car_id, brand, model, year)
     VALUES (1, 'Toyota', 'Prius', 2015), 
            (2, 'Chevrolet', 'Cruze', 2017),
            (3, 'Volkswagen', 'Jeta', 2016), 
            (4, 'Hyundai', 'Accent', 2017),
            (5, 'Kia', 'Rio', 2016)";

    $sql = "INSERT INTO travel.places (places_id, place)
     VALUES (1, 'Chicago'), 
            (2, 'New York'),
            (3, 'Denver'), 
            (4, 'Washington'),
            (5, 'Salt Lake'),
            (1, 'Phoenix'), 
            (2, 'Miami'),
            (3, 'Fresno'), 
            (4, 'Seattle'),
            (5, 'Dallas')";



    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    ?>