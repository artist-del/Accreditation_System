<?php
    include('model/process.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit List</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/logo.jpg" />
    <link rel="stylesheet" href="../../assets/dataTables/css/dataTables.min.css">
  </head>
 <style>
  input{
    color: white !important;
  }
 </style>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/rsu.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/logo.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>Admin</span>
                </div>
              </div>
             
              
            </div>
          </li>

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/admin/index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/admin/documents.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/admin/docslist.php">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-page-variant"></i>
              </span>
              <span class="menu-title">List of Documents</span>
            </a>
          </li>
      
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/admin/table.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">List of Faculty</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/admin/register.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Register New Faculty</span>
            </a>
          </li>
    
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
           
            
           
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/logo.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">RSU Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a href="login.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
               
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">


           
          <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Faculty</h4>
                    <p class="card-description"> Personal info </p>
                    <form method="post">
                    <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" value="<?php echo $name ?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" value="<?php echo $lname?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $address?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" style="color: white" name="gender" id="exampleSelectGender">
                            <?php 
                                if($gender == "Male"){
                            ?>
                           <option value="Male" selected="<?php echo 'selected'?>">Male</option>
                                <?php }else{?>
                           <option value="Female" selected ="<?php echo 'selected'?>">Female</option>
                                <?php }?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" value="<?php echo $department?>" class="form-control p_input" required>
                      </div>
                    </div>
                 
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" value="<?php echo $position?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="e_add" value="<?php echo $email?>" class="form-control p_input">
                      </div>
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="m_num" value="<?php echo $number?>" class="form-control p_input">
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username ?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" value="<?php echo $password?>" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <input type="Submit" name="update" class="btn btn-primary mr-2" value="Update">
                      </div>
                    </div>
                  </div>
                </form>
                  </div>
                </div>
              </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © RSU Cajidiocan Campus 2022</span>
              
               </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>


   
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>