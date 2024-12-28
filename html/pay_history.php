<?php include 'index.php'; ?>
<?php
include 'conn.php';
$server = "localhost";
$username = "root";
$password = "";
$dbname = "payment_form_db";

$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$start_date = $end_date = "";
$cash_total = $online_total = $pigmy_total = $expenses_total = $miscellaneous_total = $total_profit = 0;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Query to filter data between start and end dates
    $sql = "SELECT * FROM payments WHERE date BETWEEN '$start_date' AND '$end_date'";
    $result = $conn->query($sql);

    // Calculate totals
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cash_total += $row['cash_payment'];
            $online_total += $row['online_payment'];
            $pigmy_total += $row['pigmy_payment'];
            $expenses_total += $row['expenses'];
        }
        $total_profit = ($cash_total + $online_total + $pigmy_total + $expenses_total);
    }
}
?>
<div class="body-wrapper">
    <div class="container-fluid p-3">
        <div class="card">
            <div class="card-body">
                <div class="container mt-4">
                    <h1 class="text-center">Total Payment Summary</h1>
                    <form method="POST" class="mb-4">
                        <div class="row g-3">
                            <div class="col-sm-12 col-md-5">
                                <label for="start_date" class="form-label"><b>Start Date</b></label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <label for="end_date" class="form-label"><b>End Date</b></label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>
                            <div class="col-sm-12 col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Filter</button>
                            </div>
                        </div>
                    </form>

                    <h2 class="text-center mb-4">Total Payment Record</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr class="text-center">
                                    <th>Total Cash Payment</th>
                                    <th>Total Online Payment</th>
                                    <th>Total Pigmy Payment</th>
                                    <th>Total Expenses</th>
                                    <th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="text-success"><b><?php echo number_format($cash_total, 2) . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo number_format($online_total, 2) . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo number_format($pigmy_total, 2) . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo number_format($expenses_total, 2) . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo number_format($total_profit, 2) . " ₹"; ?></b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
