<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Grade</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Average Grade</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $fname = $_POST['fullname'];
                $section = $_POST['section'];
                $prelim = $_POST['prelim'];
                $midterm = $_POST['midterm'];
                $finals = $_POST['finals'];

                $average = ($prelim + $midterm + $finals) / 3;


            } else {
                echo "<div class='alert alert-danger'> No Information Received!</div>";
                exit;
            }

            
            ?>            
                     
            <ul class="list-group">                
                <li class="list-group-item" style="border: 0;"><strong>Full Name:</strong> <?php echo $fname; ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Section:</strong> <?php echo $section; ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Prelim Grade:</strong> <?php echo number_format($prelim, 2); ?> </li> 
                <li class="list-group-item" style="border: 0;"><strong>Midterm Grade:</strong> <?php echo number_format($midterm, 2); ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Finals Grade::</strong> <?php echo number_format($finals, 2); ?> </li>
                <hr>
                <li class="list-group-item" style="border: 0;"><strong>Average Grade:</strong> <?php echo number_format($average, 2); ?> </li>
                <li class="list-group-item" style="border: 0;">
                    <strong>Pass or Fail:</strong>
                    <?php
                    $passing_grade = 75;
                    if ($average >= $passing_grade) {
                        echo "Pass";
                    } else {
                        echo "Fail";
                    }
                    ?>
                </li>

            </ul>

            
            <div class="mt-4" style="text-align: center;">                
                    <a href="registration.php" class="btn btn-secondary">Back</a>                                
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>