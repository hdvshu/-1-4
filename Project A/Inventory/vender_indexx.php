<?php
    // Connect to the MySQL server and select the database
    $conn = mysqli_connect("localhost", "root", "", "Inventory") or die("Failed to connect to the database server!" . mysqli_error());
    mysqli_query($conn, "set names utf8"); //code format utf8
    $result = mysqli_query($conn, "select * from vendor order by id desc");	// Executing the query
    $number = mysqli_num_rows($result); 
    include_once('vendor_lists.html');        