
<?php include('../../assets/components/conn.php') ?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
>

<?php include('../../assets/components/master.php') ?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include('../../assets/components/sidebar.php') ?>
      
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include('../../assets/components/header.php') ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
       <div class="row" style="justify-content:space-between; align-items:center;"> <h4 class="fw-bold py-3 mb-4" style="width:fit-content;"><span class="text-muted fw-light">Dashboard /</span> Projects</h4> <a type="a" href="add-project.php" class="btn btn-primary py-3 mb-4"  style="width:fit-content; color:#fff;">Add Project</a></div>    

     <!-- Basic Bootstrap Table -->
     <div class="card">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="max-width:60px;">Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                 
                               <?php
   
      $sql = "SELECT * FROM `projects`";
      $res = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($res);
      if ($res) {
      while ($row = mysqli_fetch_assoc($res)){
        $id= $row['id'];
        $slug= $row['slug'];
          $project_title= $row['project_title'];
          $short_desc= $row['short_desc'];
      
        echo '  <tr>
                        <td style="max-width:60px;"> '.$id.'</td>
                        <td> <strong>'.$project_title.'	</strong></td>
                        <td>'.$short_desc.'	</td>
                        <td>
                       '.$slug.'	
                        </td>
                        <td><span class="badge bg-label-primary me-1">Published</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="edit-project.php?id='.$id.'"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item"href="delete-project.php?id='.$id.'"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                          ';

    } 

  }
    
    
   ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

</div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://beacontechh.com" target="_blank" class="footer-link fw-bolder">Beacontechh</a>
                </div>
              
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

 

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
