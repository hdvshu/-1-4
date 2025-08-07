<?php
    /* Max8086 104195667
        Connect databse */
$link = mysqli_connect("localhost", "root", "", "Roster") or die("Failed to connect!".mysqli_error());
mysqli_query($link,"set names utf8");
/* 连接 */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* check if MySQLi_STMT */
$stmt = mysqli_prepare($link, "INSERT INTO Roster (ShiftName, StaffAssign, StartTime, EndTime, Description) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) {
    die('mysqli error: ' . mysqli_error($link));
}              

/* POST 提交数据 */
$ShiftName = $_POST['ShiftName'];
$StaffAssign = $_POST['StaffAssign'];
$StartTime = $_POST['StartTime'];
$EndTime = $_POST['EndTime'];
$Description = $_POST['Description'];

mysqli_stmt_bind_param($stmt, 'sssss', $ShiftName , $StaffAssign, $StartTime, $EndTime, $Description);
/* prepare execute*/
mysqli_stmt_execute($stmt);

/* According to the execution result, the page is redirected*/
if (mysqli_stmt_affected_rows($stmt)) {
    echo "<script>alert('added sucessfully');window.location.href='Rosterindex.php';</script>";
} else {
    echo "<script>alert('Failed');</script>";
}

?>