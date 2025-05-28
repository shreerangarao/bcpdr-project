<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asset Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-dark {
            background-color: #212529;
        }
        .footer {
            background-color: #212529;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Asset Master</span>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Add Asset</h2>
    <form method="POST" action="../src/asset.php">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Asset ID Code *</label>
                <input type="text" name="asset_id_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Asset Class Code *</label>
                <input type="text" name="asset_class_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Purchase Date *</label>
                <input type="date" name="purchase_date" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Invoice No *</label>
                <input type="text" name="invoice_no" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Vendor Code *</label>
                <input type="text" name="vendor_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Location Code *</label>
                <input type="text" name="location_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Department Code *</label>
                <input type="text" name="department_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Asset Owner *</label>
                <input type="text" name="asset_owner" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Asset Value *</label>
                <input type="number" step="0.01" name="asset_value" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Invoice Amount *</label>
                <input type="number" step="0.01" name="invoice_amount" class="form-control" required>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Add Asset</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>

<div class="footer">
    © 2025 BCPDR System. All rights reserved.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
