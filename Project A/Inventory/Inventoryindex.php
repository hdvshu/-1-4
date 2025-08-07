<?php
    /* Max8086 104195667
    Connect databse */
    $conn = mysqli_connect("localhost", "root", "", "Inventory") or die("Failed to connect to the database server!" . mysqli_error());
    mysqli_query($conn, "set names utf8");

    // Query to fetch data from the Medicine table
    $result_medicine = mysqli_query($conn, "SELECT * FROM Medicine ORDER BY id ASC");
    $number_medicine = mysqli_num_rows($result_medicine);

    // Query to fetch data from the food table
    $result_food = mysqli_query($conn, "SELECT * FROM Food ORDER BY id ASC");
    $number_food = mysqli_num_rows($result_food);

    // Query to fetch data from the MedicalSupplies table
    $result_medical_supplies = mysqli_query($conn, "SELECT * FROM MedicalSupplies ORDER BY id ASC");
    $number_medical_supplies = mysqli_num_rows($result_medical_supplies);

    // Query to fetch data from the CleaningSupplies table
    $result_cleaning_supplies = mysqli_query($conn, "SELECT * FROM CleaningSupplies ORDER BY id ASC");
    $number_cleaning_supplies = mysqli_num_rows($result_cleaning_supplies);

    // Query to fetch data from the Linen table
    $result_linen = mysqli_query($conn, "SELECT * FROM Linen ORDER BY id ASC");
    $number_linen = mysqli_num_rows($result_linen);
include_once('Inventory.html');

        

