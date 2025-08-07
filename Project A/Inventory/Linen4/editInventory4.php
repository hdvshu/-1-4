<?php
    /* Max8086 104195667
        Connect databse */
    $link = mysqli_connect("localhost", "root", "", "Inventory") or die("Failed to connect!".mysqli_error());
    mysqli_query($link,"set names utf8");
    $id    = $_GET['id'];   
    $query = 'select * from Linen where id ='.$id;
    $result = mysqli_query($link,$query);	
    $data   = mysqli_fetch_assoc($result);  
    include_once('InventoryEdit.html');              

