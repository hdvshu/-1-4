<?php
    /* Max8086 104195667
    Connect databse */
    $conn = mysqli_connect("localhost", "root", "", "Roster") or die("Failed to connect to the database server!" . mysqli_error());
    mysqli_query($conn, "set names utf8");

    // Query to fetch data from the Medicine table
    $result_roster = mysqli_query($conn, "SELECT * FROM Roster ORDER BY id ASC");
    $number_roster = mysqli_num_rows($result_roster);
include_once('Roster.html');

        

