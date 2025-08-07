<?php
/* Retrieve POST data */
$id              = $_POST['id'];
$first_name      = $_POST['first_name'];
$last_name       = $_POST['last_name'];
$phone           = $_POST['phone'];
$email           = $_POST['email'];
$address         = $_POST['address'];
$dob             = $_POST['dob'];
$gender          = $_POST['gender'];

$emergency_name  = $_POST['emergency_name'];
$relationship    = $_POST['relationship'];
$address1        = $_POST['address1'];
$emergency_phone = $_POST['emergency_phone'];

$bank_name      = $_POST['bank_name'];
$full_name      = $_POST['full_name'];
$bsb            = $_POST['bsb'];
$account_no     = $_POST['account_no'];

$provider   = $_POST['provider'];
$member_id  = $_POST['member_id'];
$tax        = $_POST['tax'];

$link = mysqli_connect('localhost', 'root', '', 'members');
mysqli_query($link, "set names utf8"); // Set the database encoding format to utf8

/* Check if the connection is successful */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Check if MySQLi_STMT class is generated */
$query = "UPDATE employee SET first_name = ?, last_name = ?, phone = ?, email = ?, address = ?, dob = ?, gender = ?, emergency_name = ?, relationship = ?, address1 = ?, emergency_phone = ?, bank_name = ?, full_name = ?, bsb = ?, account_no = ?, provider = ?, member_id = ?, tax = ?  WHERE id =".$id;
$stmt  = mysqli_prepare($link, $query);
if (!$stmt) {
    die('mysqli error: ' . mysqli_error($link));
}

/* Parameter binding */
mysqli_stmt_bind_param($stmt, 'ssssssssssssssssss', $first_name, $last_name, $phone, $email, $address, $dob, $gender, $emergency_name, $relationship, $address1, $emergency_phone, $bank_name, $full_name, $bsb, $account_no, $provider, $member_id, $tax);
/* Execute the prepared statement */
mysqli_stmt_execute($stmt);

/* Redirect the page based on the execution result */
if (mysqli_stmt_affected_rows($stmt)) {
    echo "<script>alert('Updated');window.location.href='employeeindex.php';</script>";
} else {
    echo "<script>alert('Failed');</script>";
}
?>

