<?php
/* Max8086 104195667 */
/* Getting data */
$id       = $_POST['id'];
$name     = $_POST['name'];
$supplier   = $_POST['Supplier'];
$QUANTITY    = $_POST['QUANTITY'];

$link = mysqli_connect('localhost', 'root', '', 'Inventory');
mysqli_query($link,"set names utf8");
/* checking connections */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* Check if createing MySQLi_STMT */ 
$query = "update Medicine set ItemName = ?, Supplier = ?, Quantity = ? where id = ".$id;
$stmt  = mysqli_prepare($link, $query);
if ( !$stmt ) {
    die('mysqli error: '.mysqli_error($link));
}
/* Parameter binding */
mysqli_stmt_bind_param($stmt, 'sss', $name, $supplier, $QUANTITY);
/* Execute prepare*/
mysqli_stmt_execute($stmt);
/* Jump to the page */
if(mysqli_stmt_affected_rows($stmt)){
    echo "<script>alert('Fixed successfully');window.location.href='../Inventoryindex.php';</script>";
}else{
    echo "<script>alert('Failed to fix');</script>";
}

?>