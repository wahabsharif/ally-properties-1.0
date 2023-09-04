
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
$datashowquery="SELECT * FROM `agent` WHERE id='$id' ";
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
        <span class="text-muted fw-light">Dashboard / agents /</span> Add agent</h4> <button type="a" class="btn btn-primary py-3 mb-4"  style="width:fit-content; color:#fff;" type="submit" name="submit">Upload</button>
    </div>   
       <div class="card">  
        <div class="card-body"> 
<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="agent_name" class="form-label">Agent Name</label>
                        <input type="text" class="form-control " name="agent_name" placeholder="Agent Name"  value="<?php echo $socdata['agent_name'] ?>">
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="agent_desc" class="form-label">Agent Description</label>
                       <textarea class="form-control" id="agent_desc" name="agent_desc" rows="3" style="height: 90px;"><?php echo $socdata['agent_desc'] ?></textarea>
                    
                      </div>
                    </div>
</div> 
<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="email" class="form-label">Agent Email</label>
                        <input type="text" class="form-control " name="email" placeholder="Agent Email" value="<?php echo $socdata['email'] ?>">
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="contact" class="form-label">Agent Contact</label>
                        <input type="text" class="form-control " name="contact" placeholder="Agent Contact" value="<?php echo $socdata['contact'] ?>">
                    
                      </div>
                    </div>

    </div>     
    
    <div class="row mb-4">
    <div class="col-lg-6 col-md-6 col-sm-12">

 <div>
                        <label for="facebook" class="form-label">Agent Facebook</label>
                        <input type="text" class="form-control " name="facebook" placeholder="Agent Facebook" value="<?php echo $socdata['facebook'] ?>">
                    
                      </div>
 <div>
                        <label for="linkedin" class="form-label">Agent Linkedin</label>
                        <input type="text" class="form-control " name="linkedin" placeholder="Agent Linkedin" value="<?php echo $socdata['linkedin'] ?>">
                    
                      </div>
 <div>
                        <label for="whatsapp" class="form-label">Agent Whatsapp</label>
                        <input type="text" class="form-control " name="whatsapp" placeholder="Agent Whatsapp" value="<?php echo $socdata['whatsapp'] ?>">
                    
                      </div>

</div>
    <div class="col-lg-6 col-md-6 col-sm-12">
<div class="">
                                        <label for="agent_image" class="form-label">agent Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="agent_image" id="formFile" value="<?php echo $socdata['agent_image'] ?>">
                                      
                                      </div>
</div>
    </div>


</div>  

</div>   
</form>
</div>
            <!-- Footer -->

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
   

  </body>
</html>
<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $agent_name = $_POST["agent_name"];
  $agent_desc = $_POST["agent_desc"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $facebook = $_POST["facebook"];
  $linkedin = $_POST["linkedin"];
  $whatsapp = $_POST["whatsapp"];

  
      if(isset($_POST["submit"])){
       

         if($_FILES["agent_image"]["name"]=="")
          {
              $dst= $socdata['agent_image'];
          }
          else
          {
       $fnm=$_FILES["agent_image"]["name"];
       $dst="images/".$fnm;
       $dst1="slider/images/".$fnm;
        move_uploaded_file($_FILES["agent_image"]["tmp_name"],$dst);
          }
      
      
        $sql="UPDATE `agent` SET `agent_name`='$agent_name',`agent_desc`='$agent_desc',`email`='$email',`contact`='$contact',`facebook`='$facebook',`linkedin`='$linkedin',`whatsapp`='$whatsapp',`agent_image`='$dst'WHERE`id`='$id'";
      
       

 
  

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