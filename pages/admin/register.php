<?php

  include('model/registration.php');
  
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
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
  </head>
  <style>
    form input{
      color: white !important;
    }
    form select{
      color: white !important;
    }
  </style>
  <body>
  
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-12 mx-auto">
              <div class="card-body px-5 py-5">
                    <?php if(isset($_SESSION['msg'])){?>
                      <div class="alert alert-success">
                        <?php echo $_SESSION['msg'];
                              unset($_SESSION['msg']);
                        ?>
                      </div>

                    <?php }?>
                <h3 class="card-title text-left mb-3">Register</h3>
                <form method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" name="gender" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" class="form-control p_input" required>
                      </div>
                    </div>
                 
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="e_add" class="form-control p_input">
                      </div>
                      <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="m_num" class="form-control p_input">
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <input type="Submit" name="submit" class="btn btn-primary mr-2" value="Register">
                        <a href="table.php" class="btn btn-info">Back</a>
                      </div>
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
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
  </body>
</html>