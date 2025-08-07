<?php
    /* 连接 */
    $link = mysqli_connect('localhost','root','','members');
    if(!$link){
        die('mysqli connect error:'.mysqli_connect_error());
    }
    $id    = $_GET['id']; //获取id
    $query = "delete from patients where id = ".$id;   //SQL
    /*  */
    if(mysqli_query($link,$query) === true ){
        echo "<script>alert('deleted');window.location.href='patientindex.php'</script>";
    }else{
        echo "<script>alert('Failed');</script>";
    }


