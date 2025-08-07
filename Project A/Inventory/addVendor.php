<?php
/* Max8086 104195667
        Connect databse */
$link = mysqli_connect('localhost', 'root', '', 'Inventory');
mysqli_query($link,"set names utf8");//设置数据库编码格式utf8
/* 检测连接是否成功 */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* 检测是否生成MySQLi_STMT类 */
$stmt = mysqli_prepare($link, "insert into vendor (supplier_name, supplier_contact, supplier_address, item_name, item_quantity, unit_price, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ( !$stmt ) {
    die('mysqli error: '.mysqli_error($link));
}
/* 获取POST提交数据 */
$name     = $_POST['supplier_name'];
$supplier_contact    = $_POST['supplier_contact'];
$supplier_address    = $_POST['supplier_address'];
$item_name  = $_POST['item_name'];
$item_quantity = $_POST['item_quantity'];
$unit_price =$_POST['unit_price'];
$total_cost = $_POST['total_cost'];
/* 参数绑定 */
mysqli_stmt_bind_param($stmt, 'sssssss', $name, $supplier_contact, $supplier_address, $item_name, $item_quantity, $unit_price, $total_cost);
/* 执行prepare语句 */
mysqli_stmt_execute($stmt);
/* 根据执行结果，跳转页面 */
if(mysqli_stmt_affected_rows($stmt)){
    echo "<script>alert('Added Successfully');window.location.href='vender_indexx.php';</script>";
}else{
    echo "<script>alert('Failed to add');</script>";
}

?>