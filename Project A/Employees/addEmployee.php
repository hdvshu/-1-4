<?php
$link = mysqli_connect('localhost', 'root', '', 'members');
mysqli_query($link, "set names utf8");//设置数据库编码格式utf8
/* 连接 */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* check if MySQLi_STMT */
$stmt = mysqli_prepare($link, "INSERT INTO employee (first_name, last_name, address, email, phone, dob, gender, address1, emergency_name, relationship, emergency_phone, bank_name, full_name, bsb, account_no, provider, member_id, tax) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die('mysqli error: ' . mysqli_error($link));
}
/* POST 提交数据 */
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address1 = $_POST['address1'];
$emergency_name = $_POST['emergency_name'];
$relationship = $_POST['relationship'];
$emergency_phone = $_POST['emergency_phone'];
$bank_name = $_POST['bank_name'];
$full_name = $_POST['full_name'];
$bsb = $_POST['bsb'];
$account_no = $_POST['account_no'];
$provider = $_POST['provider'];
$member_id = $_POST['member_id'];
$tax = $_POST['tax'];
/* Parameter binding */
mysqli_stmt_bind_param($stmt, 'ssssssssssssssssss', $first_name, $last_name, $address, $email, $phone, $dob, $gender, $address1, $emergency_name, $relationship, $emergency_phone, $bank_name, $full_name, $bsb, $account_no, $provider, $member_id, $tax);
/* prepare execute*/
mysqli_stmt_execute($stmt);

/* According to the execution result, the page is redirected*/
if (mysqli_stmt_affected_rows($stmt)) {
    echo "<script>alert('added sucessfully');window.location.href='employeeindex.php';</script>";
} else {
    echo "<script>alert('Failed');</script>";
}

?>



