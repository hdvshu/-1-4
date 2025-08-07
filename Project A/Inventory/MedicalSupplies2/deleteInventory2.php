<?php
    /* Max8086 104195667
        Connect databse */
    $link = mysqli_connect('localhost','root','','Inventory');
    if(!$link){
        die('mysqli connect error:'.mysqli_connect_error());
    }
    $id    = $_GET['id']; //get id
    $query = "delete from MedicalSupplies where id = ".$id;   //SQL delete
    /* Determine whether the deletion succeeded or failed */
    if(mysqli_query($link, $query) === true ){
        echo "<script>alert('Successfully deleted');window.location.href='../Inventoryindex.php'</script>";
    }else{
        echo "<script>alert('Failed to delete');</script>";
    }


