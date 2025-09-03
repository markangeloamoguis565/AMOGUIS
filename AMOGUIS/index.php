<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0" style="text-align: center;">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="process.php" method="POST">
                <!-- Employee Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" required>
                </div>

                <!-- Total Days of Work -->
                <div class="mb-3">
                    <label for="number" class="form-label">Total Days of Work</label>
                    <input type="number" name="workdays" id="workdays" class="form-control" rows="2" required>
                </div>

                <!-- Daily Rate -->
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Daily Rate</label>
                    <input type="number" name="dailyrate" id="dailyrate" class="form-control" required>
                </div>

                <!-- Cash Advance -->
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Cash Advance</label>
                    <input type="number" name="cashadvance" id="cashadvance" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <div class="text-end">                    
                    <input type="submit" class="btn btn-primary" value="Generate Payslip" style="color: white; width: 1260px">          
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>