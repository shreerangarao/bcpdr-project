<?php
include('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_code = $_POST["employee_code"];
    $company_code = $_POST["company_code"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $department = $_POST["department"];
    $designation = $_POST["designation"];
    $location = $_POST["location"];
    $phone_number1 = $_POST["phone_number1"];
    $phone_number2 = $_POST["phone_number2"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $address = ""; // optional if not present in form

    $sql = "INSERT INTO employee_master 
        (employee_code, company_code, first_name, middle_name, last_name, department, designation, location, phone_number1, phone_number2, email1, email2)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssssssssss", $employee_code, $company_code, $first_name, $middle_name, $last_name, $department, $designation, $location, $phone_number1, $phone_number2, $email1, $email2);

    if ($stmt->execute()) {
        echo "<script>alert('Employee added successfully!'); window.location.href='../public/employee_master.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
