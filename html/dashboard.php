<?php include'index.php'; ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   
    <div class="body-wrapper">
       <div class="container-fluid">
         <div class="card">
          <div class="card-body">
                
          <form action="dashboard.php" method="post">
        <div class="row mb-4">
          <div class="col-md-6">
            <label for="date" class="form-label text-start d-block"><b><h5>Date</h5></b></label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="col-md-6">
            <label for="cashPayment" class="form-label text-start d-block"><b><h5>Cash Payment</h5></b></label>
            <input type="number" class="form-control" id="cashPayment" name="cashPayment" placeholder="Enter cash payment amount" required>
          </div>
        </div>

        <div class="row mb-4 ">
          <div class="col-md-6">
            <label for="onlinePayment" class="form-label text-start d-block"><b><h5>Online Payment</h5></b></label>
            <input type="number" class="form-control" id="onlinePayment" name="onlinePayment" placeholder="Enter online payment amount" required>
          </div>
          <div class="col-md-6">
            <label for="pigmyPayment" class="form-label text-start d-block"><b><h5>Pigmy Payment</h5></b></label>
            <input type="number" class="form-control" id="pigmyPayment" name="pigmyPayment" placeholder="Enter pigmy payment amount" required>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md-6">
            <label for="expenses_item" class="form-label text-start d-block"><b><h5>Expenses Item</h5></b></label>
            <input type="text" class="form-control" id="expenses_item" name="expenses_item" placeholder="Enter expense amount" required>
          </div>
          <div class="col-md-6">
            <label for="expenses" class="form-label text-start d-block"><b><h5>Expenses Payment</h5></b></label>
            <input type="number" class="form-control" id="expenses" name="expenses" placeholder="Enter miscellaneous payment amount" required>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

      <?php
include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $cashPayment = $_POST['cashPayment'];
    $onlinePayment = $_POST['onlinePayment'];
    $pigmyPayment = $_POST['pigmyPayment'];
    $expenses_item = $_POST['expenses_item'];
    $expenses = $_POST['expenses'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO payments (date, cash_payment, online_payment, pigmy_payment, expenses_item, expenses)
            VALUES ('$date', '$cashPayment', '$onlinePayment', '$pigmyPayment', '$expenses_item', '$expenses')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Save successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

          </div>
         </div>
         <!-- <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by  <a target="_blank" class="text-success"
              >Nick Gaikwad</a></p>
         </div> -->
         </div> 
            </div>
         </div>
         </div>