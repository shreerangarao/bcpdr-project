<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Master</title>
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

<!-- Top Navbar -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Employee Master</span>
        <div>
            <a href="#" class="btn btn-outline-light btn-sm me-2">➕ Add Employee</a>
            <a href="#" class="btn btn-outline-light btn-sm">👥 Employee List</a>
        </div>
    </div>
</nav>

<!-- Main Form Container -->
<div class="container mt-5">
    <h2 class="mb-4">Add Employee</h2>
    <form method="POST" action="../src/employee.php">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Employee Code *</label>
                <input type="text" name="employee_code" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">First Name *</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Middle Name</label>
                <input type="text" name="middle_name" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Last Name *</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>

            <!-- Company Dropdown -->
            <div class="col-md-4">
                <label class="form-label">Company *</label>
                <select name="company_code" class="form-select" required>
                    <option value="">Select Company</option>
                    <option value="COMP001">COMP001</option>
                    <option value="COMP002">COMP002</option>
                </select>
            </div>

            <!-- Department Dropdown -->
            <div class="col-md-4">
                <label class="form-label">Department *</label>
                <select name="department" class="form-select" required>
                    <option value="">Select Department</option>
                    <option value="HR">HR</option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>

            <!-- Designation Dropdown -->
            <div class="col-md-4">
                <label class="form-label">Designation *</label>
                <select name="designation" class="form-select" required>
                    <option value="">Select Designation</option>
                    <option value="Manager">Manager</option>
                    <option value="Analyst">Analyst</option>
                    <option value="Developer">Developer</option>
                </select>
            </div>

            <!-- Location Dropdown -->
            <div class="col-md-4">
                <label class="form-label">Location *</label>
                <select name="location" class="form-select" required>
                    <option value="">Select Location</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Chennai">Chennai</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Phone Number 1 *</label>
                <input type="text" name="phone_number1" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Phone Number 2</label>
                <input type="text" name="phone_number2" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Email Address 1 *</label>
                <input type="email" name="email1" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Email Address 2</label>
                <input type="email" name="email2" class="form-control">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Add Employee</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>

<!-- Footer -->
<div class="footer">
    © 2025 BCPDR System. All rights reserved.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
