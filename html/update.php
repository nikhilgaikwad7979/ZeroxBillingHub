<?php include 'dashboard.php';?>
<?php

include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $cashPayment = $_POST['cashPayment'];
    $onlinePayment = $_POST['onlinePayment'];
    $pigmyPayment = $_POST['pigmyPayment'];
    $expenses = $_POST['expenses_item'];
    $miscellaneous = $_POST['expenses'];

    $sql = "UPDATE payments SET 
            date='$date', 
            cash_payment='$cashPayment', 
            online_payment='$onlinePayment', 
            pigmy_payment='$pigmyPayment', 
            expenses_item='$expenses', 
            expenses='$miscellaneous'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location='dashboard.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
  
    <div class="body-wrapper">
      
       <div class="container-fluid">
         <div class="card">
          <div class="card-body">
          <h1 class="text-center mb-4">Update Payment Record</h1>
    <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Payment Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label for="cashPayment" class="form-label">Cash Payment (₹)</label>
                <input type="number" step="0.01" class="form-control" id="cashPayment" name="cashPayment" required>
            </div>
            <div class="col-md-6">
                <label for="onlinePayment" class="form-label">Online Payment (₹)</label>
                <input type="number" step="0.01" class="form-control" id="onlinePayment" name="onlinePayment" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label for="pigmyPayment" class="form-label">Pigmy Payment (₹)</label>
                <input type="number" step="0.01" class="form-control" id="pigmyPayment" name="pigmyPayment" required>
            </div>
            <div class="col-md-6">
                <label for="expenses_item" class="form-label">Expense Item</label>
                <input type="text" class="form-control" id="expenses_item" name="expenses_item" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label for="expenses" class="form-label">Miscellaneous Expenses (₹)</label>
                <input type="number" step="0.01" class="form-control" id="expenses" name="expenses" required>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Update Payment</button>
        </div>
    </form>   
    
         </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
