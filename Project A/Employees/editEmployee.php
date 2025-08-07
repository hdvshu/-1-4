<?php
    //连接MySQL，选择
    $link = mysqli_connect("localhost", "root", "", "members") or die("Failed".mysqli_error());
    mysqli_query($link,"set names utf8");//设置数据库编码格式utf8
    $id    = $_GET['id'];   //获取id
    $query = 'select * from employee where id ='.$id;
    $result = mysqli_query($link,$query);	// 执行
    $data   = mysqli_fetch_assoc($result);  //
    include_once('editEmployee.html');              //

