<?php
include('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_id_code = $_POST["asset_id_code"];
    $asset_class_code = $_POST["asset_class_code"];
    $purchase_date = $_POST["purchase_date"];
    $invoice_no = $_POST["invoice_no"];
    $vendor_code = $_POST["vendor_code"];
    $location_code = $_POST["location_code"];
    $department_code = $_POST["department_code"];
    $asset_owner = $_POST["asset_owner"];
    $asset_value = $_POST["asset_value"];
    $invoice_amount = $_POST["invoice_amount"];

    $sql = "INSERT INTO asset_master 
        (asset_id_code, asset_class_code, purchase_date, invoice_no, vendor_code, location_code, department_code, asset_owner, asset_value, invoice_amount)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssdd", $asset_id_code, $asset_class_code, $purchase_date, $invoice_no, $vendor_code, $location_code, $department_code, $asset_owner, $asset_value, $invoice_amount);

    if ($stmt->execute()) {
        echo "<script>alert('Asset added successfully!'); window.location.href='../public/asset_master.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
