<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payslip</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $ename = $_POST['fullname'];
                $wdays = $_POST['workdays'];
                $drate = $_POST['dailyrate'];
                $cadvance = $_POST['cashadvance'];

                $gp = $wdays * $drate;
                $tax = $gp * 0.02;
                $sss = $gp * 0.015;
                $pagibig = 50;
                $total_deduc = $tax + $sss + $pagibig + $cadvance;
                $net_pay = $gp - $total_deduc;


            } else {
                echo "<div class='alert alert-danger'> No Data Received!</div>";
                exit;
            }

            
            ?>

            
                     
            <ul class="list-group">
                
                <li class="list-group-item" style="border: 0;"><strong>Employee Name:</strong> <?php echo $ename; ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Total Days of Worked:</strong> <?php echo $wdays; ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Daily Rate:</strong> <?php echo "₱" . number_format($drate, 2); ?> </li> 
                <hr>

                <li class="list-group-item" style="border: 0;"><strong>Gross Pay:</strong> <?php echo "₱" . number_format($gp, 2); ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Tax:</strong> <?php echo "₱" . number_format($tax, 2); ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>SSS:</strong> <?php echo "₱" . number_format($sss, 2); ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Pag-IBIG:</strong> <?php echo "₱" . number_format($pagibig, 2); ?> </li>
                <li class="list-group-item" style="border: 0;"><strong>Cash Advance:</strong> <?php echo "₱" . number_format($cadvance, 2); ?> </li> 
                <hr>

                <li class="list-group-item" style="border: 0;"><strong>Total Deductions:</strong> <?php echo "₱" . number_format($total_deduc, 2); ?> </li>
                <li class="list-group-item" style="color: #228B22; font-size: 30px; border: 0;"><p>Net Pay: <?php echo "₱" . number_format($net_pay, 2); ?> </p></li>
            </ul>

            
            <div class="mt-4">                
                    <a href="index.php" class="btn btn-secondary" style="text-align: center;">Back</a>
                    <a href="" class="btn btn-light">Print Payslip</a>                                
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>