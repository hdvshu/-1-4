<?php
$link = mysqli_connect('localhost', 'root', '', 'members');
mysqli_query($link, "set names utf8");//设置数据库编码格式utf8
/* 连接 */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* check if MySQLi_STMT */
$stmt = mysqli_prepare($link, "INSERT INTO patients (first_name, last_name, address, email, phone, dob, gender, address1, emergency_name, relationship, emergency_phone, medical_ailment, blood_type, allergies, surgery_history, smoke_history, drink_alcohol, medicare_no, private_insurance, insurance_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
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
$emergency_name = $_POST['emergency_name'];
$relationship = $_POST['relationship'];
$address1 = $_POST['address1'];
$emergency_phone = $_POST['emergency_phone'];
$medical_ailment = $_POST['medical_ailment'];
$blood_type = $_POST['blood_type'];
$allergies = $_POST['allergies'];
$surgery_history = $_POST['surgery_history'];
$smoke_history = $_POST['smoke_history'];
$drink_alcohol = $_POST['drink_alcohol'];
$medicare_no = $_POST['medicare_no'];
$private_insurance = $_POST['private_insurance'];
$insurance_no = $_POST['insurance_no'];
/* Parameter binding */
mysqli_stmt_bind_param($stmt, 'ssssssssssssssssssss', $first_name, $last_name, $address,  $email, $phone, $dob, $gender, $emergency_name, $relationship, $address1, $emergency_phone, $medical_ailment, $blood_type, $allergies, $surgery_history, $smoke_history, $drink_alcohol, $medicare_no, $private_insurance, $insurance_no);
/* prepare execute*/
mysqli_stmt_execute($stmt);

/* According to the execution result, the page is redirected*/
if (mysqli_stmt_affected_rows($stmt)) {
    echo "<script>alert('added sucessfully');window.location.href='patientindex.php';</script>";
} else {
    echo "<script>alert('Failed');</script>";
}
?>



