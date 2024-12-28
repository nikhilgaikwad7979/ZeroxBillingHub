<?php 
include 'index.php'; 
include 'conn.php';

$start_date = '';
$end_date = '';
$filtered_data = [];

// Initialize totals
$total_cash = $total_online = $total_pigmy = $total_expenses = $total_miscellaneous = $total_profit = 0;

// Fetch data based on date range if submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['filter'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Validate dates
    if (!empty($start_date) && !empty($end_date)) {
        $sql = "SELECT * FROM payments WHERE date BETWEEN '$start_date' AND '$end_date' ORDER BY date ASC";
        $result = $conn->query($sql);
        $filtered_data = $result->fetch_all(MYSQLI_ASSOC);

        // Calculate totals only if there is filtered data
        if (!empty($filtered_data)) {
            foreach ($filtered_data as $row) {
                $profit = ($row['cash_payment'] + $row['online_payment'] + $row['pigmy_payment'] + $row['expenses']);

                $total_cash += $row['cash_payment'];
                $total_online += $row['online_payment'];
                $total_pigmy += $row['pigmy_payment'];
                $total_miscellaneous += $row['expenses'];
                $total_profit += $profit;
            }
        }
    }
}
?>


<div class="body-wrapper ">
    <div class="container-fluid p-3 ">
        <div class="card">
            <div class="card-body">
                <div class="container mt-4">
                    <h1 class="text-center mb-4">Payment History</h1>
                    
                    <!-- Date Range Filter Form -->
                    <form method="post" class="mb-4">
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="start_date" class="form-label"><b>Start Date</b></label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date; ?>" required>
                            </div>
                            <div class="col-md-5 mb-4">
                                <label for="end_date" class="form-label"><b>End Date</b></label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $end_date; ?>" required>
                            </div>
                            <div class=" col-md-2 d-flex align-items-end ">
                                <button type="submit" name="filter" class="btn btn-primary w-100">Filter</button>
                            </div>
                        </div>
                    </form>

                    <!-- Display Filtered Data in Table -->
                    <h2 class="text-center">Records</h2>
                    <div class="table-responsive">
                        
                      

                    <table class="table table-bordered border-primary mt-5">
                            <thead>
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Cash Payment</th>
                                    <th>Online Payment</th>
                                    <th>Pigmy Payment</th>
                                    <th>Expenses Item</th>
                                    <th>Expenses</th>
                                    <th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($filtered_data)): ?>
                                    <?php foreach ($filtered_data as $row): ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['cash_payment']; ?></td>
                                            <td><?php echo $row['online_payment']; ?></td>
                                            <td><?php echo $row['pigmy_payment']; ?></td>
                                            <td><?php echo $row['expenses_item']; ?></td>
                                            <td><?php echo $row['expenses']; ?></td>
                                            <td><?php echo ($row['cash_payment'] + $row['online_payment'] + $row['pigmy_payment']) + $row['expenses']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="8" class="text-center text-danger">No records found for the selected date range</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr class="table-light">
                                    <td colspan="2"><b>Total</b></td>
                                    <td class="text-success"><b><?php echo $total_cash . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo $total_online . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo $total_pigmy . " ₹"; ?></b></td>
                                    <td></td>
                                    <td class="text-success"><b><?php echo $total_miscellaneous . " ₹"; ?></b></td>
                                    <td class="text-success"><b><?php echo $total_profit . " ₹"; ?></b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- End Table Responsive -->
                </div>
            </div>
        </div>
    </div>
</div>