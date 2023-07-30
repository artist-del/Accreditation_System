<?php

session_start();
if($_SESSION['faculty']==null){
  header('location: login.php');
}

  include('model/connection.php');


  $sql = 'select * from tbl_documents';
  $faculty = $con->query($sql);
  $row = $faculty->fetch_assoc();

 
  include('model/docs.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Faculty List</title>
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
    #pagTable_filter input, label{
      color: white;
      cursor: pointer;
    }
    #pagTable tr td{
      background-color: #191c24;
      padding: 10px;
      color: white;
      cursor: pointer;
    }
    #pagTable a{
      padding: 5px;
    }
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
                  <h5 class="mb-0 font-weight-normal">Faculty</h5>
                  <span>Authorized</span>
                </div>
              </div>
             
              
            </div>
          </li>

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/faculty/index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/faculty/addDocuments.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add Documents</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/faculty/documents.php">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-page-variant"></i>
              </span>
              <span class="menu-title">List of Documents</span>
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
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">RSU Faculty</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a href="logout.php" class="dropdown-item preview-item">
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


            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Document list</h4>
                  
              
                    <div class="table-responsive">
                      <table class="table" id="pagTable">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Area</th>
                            <th>Documents</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          <?php
                            do{
                          ?>
                            <tr>
                              <td><?php echo $row['Id']; ?></td>
                              <td><?php echo $row['d_title'];?></td>
                              <td><?php echo $row['d_description'];?></td>
                              <td><?php echo $row['d_area'];?></td>
                              <td><?php echo $row['d_path']?></td>
                              <td>
                                <a href="../../pages/faculty/edit.php?edit=<?php echo $row['Id']; ?>" class="btn btn-info"><span class="mdi mdi-border-color"></span></a>
                                <a href="../../pages/faculty/documents.php?delete=<?php echo $row['Id']; ?>" class="btn btn-danger"><span class="mdi mdi-delete-forever"></span></a>
                                <a href="../../pages/faculty/view.php?view=<?php echo $row['Id']; ?>" target="blank" class="btn btn-success"><span class="mdi mdi-book-open-variant"></span></a>
                              </td>
                            </tr>

                          <?php }while($row=$faculty->fetch_assoc());?>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
    <script src="../../assets/dataTables/js/jquery-3.6.0.min.js"></script>
    <script src="../../assets/dataTables/js/datatables.min.js"></script>

    <script>
     $('#pagTable').DataTable({
       search: {
         return: false
       }
     });
    </script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>