<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Average Grade</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0" style="text-align: center;">Calculate Your Average Grade</h4>
        </div>
        <div class="card-body">
            <form action="submitted.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" required>
                </div>

                <!-- Full Name -->
                <div class="mb-3">
                <label class="form-label">Associate in Computer Technology Section:</label>
                <select name="section" class="form-select" required>
                    <option value="">-- Choose Section --</option>
                    <option value="ACT 2A">ACT 2A</option>
                    <option value="ACT 2B">ACT 2B</option>
                    <option value="ACT 2C">ACT 2C</option>
                    <option value="ACT 2D">ACT 2D</option>
                    <option value="ACT 2E">ACT 2E</option>
                </select>
            </div>

                <!-- Prelim Grade -->
                <div class="mb-3">
                    <label for="number" class="form-label">Prelim Grade</label>
                    <input type="number" name="prelim" id="prelim" class="form-control" rows="2" required>
                </div>

                <!-- Midterm Grade -->
                <div class="mb-3">
                    <label for="number" class="form-label">Midterm Grade</label>
                    <input type="number" name="midterm" id="midterm" class="form-control" required>
                </div>

                <!-- Finals Grade -->
                <div class="mb-3">
                    <label for="number" class="form-label">Finals Grade</label>
                    <input type="number" name="finals" id="finals" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <div class="text-end">                    
                    <input type="submit" class="btn btn-success" value="Calculate Average Grade" style="color: white; width: 1260px">          
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>