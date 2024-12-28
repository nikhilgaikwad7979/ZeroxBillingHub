
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xerox Software</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/seodashlogo.png" /> -->
  <link rel="stylesheet" href="../../node_modules/simplebar/dist/simplebar.min.css">
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
  .demo{
  }</style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between " style="background-color:rgb(211, 30, 30);">
         
          <a href="dashboard.php  " class="text-nowrap logo-img">
          <!-- <h2 class="text-dark">Software</h2> -->
           
          <img src="../assets/images/logos/nlogo.png" alt="Xerox" style="height:42px;"/>
          <!-- <br><span class="text-success">Developed by </span><span class="text-white"> <b> Nick Gaikwad</b></span> -->
          </a> 
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div><hr>
        </div> 
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar mt-3" data-simplebar="" >
         <div class="demo">
          <ul id="sidebarnav">
           
            <li class="sidebar-item">
              <a class="sidebar-link " href="dashboard.php" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ">Dashboard</span>
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="pay_history.php" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Payment History </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="all_record.php" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">All Payment Records</span>
              </a>
            </li>
            <li class="sidebar-item">
            <a class="sidebar" href="#" aria-expanded="false">
                <span>
                  <iconify-icon icon="#" class="fs-6"></iconify-icon>
                </span>
                <span ></span>
              </a>
            </li>
            <li class="sidebar-item">
            
            
           
            </li>
           
          </ul>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg bg-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
              </a>
            </li>
            <li class="nav-item">
            <span class="d-block d-md-none"><h6 class="text-dark mt-3">RSML</h6></span> <!-- Visible only on small screens -->
            <span class="d-none d-md-block"><h3 class="text-dark mt-3">Rajarshi Shahu Student Service Center</h3></span>
            </li>
           
          </ul>


          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="update.php" target="_blank" class="btn btn-primary me-2">
           <span class="d-block d-md-none">Update</span> <!-- Visible only on small screens -->
           <span class="d-none d-md-block">Update Records</span> <!-- Visible on medium screens and above -->
</a>

            <!-- <a href="resister.php" target="_blank" class="btn btn-primary me-2">
              <span class="d-md-none">New Admin</span> 
              <span class="d-none d-md-inline">New Admin</span> 
            </a> -->
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover"  id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a  class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a  class="d-flex align-items-center gap-2 dropdown-item" href="resister.php">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3"> new Account</p>
                    </a>
                    <a  class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                  <!-- <a href="login.php" target="_blank" 
                class="btn btn-success"><span class="d-none d-md-block ">LogOut</span> 
              </a> -->
                </div>
                
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
     
      </div>
      <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>