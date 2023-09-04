
<?php 
$server = "localhost";
$username = "ally_ally";
$password = "ally_allyproperties";
$database = "ally_ally";

$conn = mysqli_connect($server, $username, $password, $database);
//  if($conn)
//  {
//      echo "success";
//  }else
//  {
//      echo "failed";
//  }

 $id=$_GET['id'];
$datashowquery="SELECT * FROM `blogs` WHERE id='$id' ";
$data=mysqli_query($conn,$datashowquery);
$count=mysqli_num_rows($data);
$socdata=mysqli_fetch_array($data); 
?>
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
                <form enctype="multipart/form-data"  method="POST" >

       <div class="row" style="justify-content:space-between; align-items:center;"> 
        <h4 class="fw-bold py-3 mb-4" style="width:fit-content;">
        <span class="text-muted fw-light">Dashboard / Blogs /</span> Edit Blog</h4> <button type="a" class="btn btn-primary py-3 mb-4"  style="width:fit-content; color:#fff;" type="submit" name="submit">Update</button>
    </div>   
       <div class="card">  
        <div class="card-body"> 
<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="blogtitle" class="form-label">Blog Title</label>
                        <input type="text" class="form-control basic-usage" name="blogtitle" placeholder="Blog Title" value="<?php echo $socdata['blogtitle'] ?>" >
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="slug" class="form-label">Slug Url</label>
                        <input type="text" class="form-control" id="permalink" name="slug" placeholder="Slug" readonly value="<?php echo $socdata['slug'] ?>" >
                    
                      </div>
                    </div>
</div> 
<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">

<div class="mb-2">
                        <label for="blogshortdesc" class="form-label">Short Description</label>
                        <textarea class="form-control" id="blogshortdesc" name="blogshortdesc" rows="3" style="height: 90px;"><?php echo $socdata['blogshortdesc'] ?></textarea>
                      </div>
                
                 <div class="mb-2">
                        <label for="blogcat" class="form-label">Blog Category</label>
                        <input type="text" class="form-control" name="blogcat" placeholder="Blog Category" value="<?php echo $socdata['blogcat'] ?>">
                    
                      </div>
                  <div class="mb-2">
                                        <label for="featureimage" class="form-label">Feature Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="featureimage"  id="formFile" value="<?php echo $socdata['featureimage'] ?>">
                                      
                                      </div>
                
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                   <div  class="mb-2">
                        <label for="blogdesc" class="form-label">Blog Details</label>
                        <textarea class="form-control" id="blogdesc" name="blogdesc" rows="3" style="height: 90px;"><?php echo $socdata['blogdesc'] ?> </textarea>
                      </div>
                    </div>
              </div> 

             
                                    <div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title"  value="<?php echo $socdata['meta_title'] ?>">
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                     
    <label for="meta_desc" class="form-label">Meta Description</label>
                        <input type="text" class="form-control" name="meta_desc" placeholder="Meta Description"  value="<?php echo $socdata['meta_desc'] ?>">   
                      </div>
                    </div>
</div> 

                </div> 
</div>  

</div>   
</form>
</div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/6.0.0/speakingurl.min.js"></script>
   <script src="../../assets/js/jquery.stringtoslug.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
   
<script>
 CKEDITOR.replace( 'blogdesc', {
  height: 300,
  filebrowserUploadUrl: "../textarea-upload.php"
 });
</script>
<script>
           $(document).ready( function() {
    $(".basic-usage").stringToSlug();
});
</script>

  </body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $idd=$socdata['id'];
   $blogtitle = $_POST["blogtitle"];
  $slug = $_POST["slug"];
  $blogshortdesc = $_POST["blogshortdesc"];
  $blogdesc = $_POST["blogdesc"];
  $blogcat = $_POST["blogcat"];
  $meta_title = $_POST["meta_title"];
  $meta_desc = $_POST["meta_desc"];

         if(isset($_POST["submit"])){
          

          if($_FILES["featureimage"]["name"]=="")
          {
              $dst= $socdata['featureimage'];
          }
          else
          {
         $fnm=$_FILES["featureimage"]["name"];
        $dst="images/".$fnm;
        $dst1="blog/images/".$fnm;
        move_uploaded_file($_FILES["featureimage"]["tmp_name"],$dst);
          }
          
      
      
      
        $sql="UPDATE `blogs` SET `blogtitle`='$blogtitle',`slug`='$slug',`blogshortdesc`='$blogshortdesc',`blogdesc`='$blogdesc',`blogcat`='$blogcat',`featureimage`='$dst',`meta_title`='$meta_title',`meta_desc`='$meta_desc'WHERE`id`='$id'";


 $result= mysqli_query($conn,$sql);
       if($result){
          echo '<div class="bs-toast toast fade show bg-secondary" style="position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Status</div>
                          <small>Just Now</small>
                          <button type="button"  class="btn-close" id="closee" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Data has been updated successfully.
                        </div>
                      </div>';
            
      }
    }
  else{
    echo "failed";
}
}

?>
<script>
    $("#closee").click(function(){
window.location.href=window.location.href
});
</script>