<?php
    //
    $conn = mysqli_connect("localhost", "root", "", "members") or die("Failed!".mysqli_error());
    mysqli_query($conn,"set names utf8");//
    $result = mysqli_query($conn,"select * from employee order by id desc");	// 执
    $number = mysqli_num_rows($result); //获取查询条数
    include_once('viewEmployeelists.html');         //

