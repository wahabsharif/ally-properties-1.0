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
$datashowquery="SELECT * FROM `projects` WHERE id='$id' ";
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
        <span class="text-muted fw-light">Dashboard / Projects /</span> Edit Project</h4> <button type="a" class="btn btn-primary py-3 mb-4"  style="width:fit-content; color:#fff;" type="submit" name="submit">Update</button>
    </div>   
       <div class="card">  
        <div class="card-body"> 
<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="project_title" class="form-label">Project Title</label>
                        <input type="text" class="form-control basic-usage" name="project_title" placeholder="Project Title" value="<?php echo $socdata['project_title'] ?>">
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="slug" class="form-label">Slug Url</label>
                        <input type="text" class="form-control" id="permalink" name="slug" placeholder="Slug" readonly value="<?php echo $socdata['slug'] ?>">
                    
                      </div>
                    </div>
</div> 

<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="mb-2">
 <label for="project_slogan" class="form-label">Project Slogan</label>
                        <input type="text" class="form-control " name="project_slogan" placeholder="Project Slogan" value="<?php echo $socdata['project_slogan'] ?>" >
</div>
</div> 

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="mb-2">
 <label for="project_value" class="form-label">Project Value</label>
                        <input type="text" class="form-control " name="project_value" placeholder="Project Value" value="<?php echo $socdata['project_value'] ?>" >
</div>
<div class="mb-2">
 <label for="project_offer" class="form-label">Project Offer</label>
                        <input type="text" class="form-control " name="project_offer" placeholder="Project Offer"  value="<?php echo $socdata['project_offer'] ?>" >
</div>
</div> 

</div> 

<div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="mb-2">
                        <label for="yt_video" class="form-label">Youtube Video Code</label>
                        <input type="text" class="form-control" name="yt_video" placeholder="Youtube Video Code" value="<?php echo $socdata['yt_video'] ?>">
                    
</div>
<div class="mb-2">
                        <label for="short_desc" class="form-label">Short Description</label>
                        <textarea class="form-control" id="short_desc" name="short_desc" rows="3" style="height: 90px;"><?php echo $socdata['short_desc'] ?></textarea>
                      </div>
                      <div class="">
                                        <label for="feature_image" class="form-label">Feature Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="feature_image"  id="formFile" value="<?php echo $socdata['feature_image'] ?>">
                                      
                                      </div>

                                      <div class="">
                                        <label for="slider1" class="form-label">Slider Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="slider1"  id="formFile"  value="<?php echo $socdata['slider1'] ?>">
                                      
                                      </div>
                                      <div class="">
                                        <label for="slider2" class="form-label">Slider Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="slider2"  id="formFile"  value="<?php echo $socdata['slider2'] ?>">
                                      
                                      </div>
                                      <div class="">
                                        <label for="slider3" class="form-label">Slider Image</label>
                                      
                                        <input class="form-control mb-2" type="file" name="slider3"  id="formFile"  value="<?php echo $socdata['slider3'] ?>">
                                      
                                      </div>





                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <label for="project_details" class="form-label">Project Details</label>
                        <textarea class="form-control" id="project_details" name="project_details" rows="3" style="height: 90px;"> <?php echo $socdata['project_details'] ?></textarea>
                      </div>
                    </div>
              </div> 

              <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                                        <label for="feature_title1" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title1" placeholder="Feature Title"  value="<?php echo $socdata['feature_title1'] ?>">
                                    
                                         
                                            <input class="form-control mb-2" type="file" name="feature_img1"  id="formFile" value="<?php echo $socdata['feature_img1'] ?>">
                                      
                                      </div>
                                      <div class="togg">
                                        <label for="feature_title2" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title2" placeholder="Feature Title 2" value="<?php echo $socdata['feature_title2'] ?>">
                                    
                                         
                                            <input class="form-control mb-2" type="file" name="feature_img2" id="formFile"  value="<?php echo $socdata['feature_img2'] ?>">
                                      
                                      </div>  
                                      <div class="togg">
                                        <label for="feature_title3" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title3" placeholder="Feature Title 3"  value="<?php echo $socdata['feature_title3'] ?>">
                                    
                                         
                                            <input class="form-control mb-2 mb-2" type="file" name="feature_img3" id="formFile"  value="<?php echo $socdata['feature_img3'] ?>">
                                      
                                      </div>  
                                      <div class="togg">
                                        <label for="feature_title4" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title4" placeholder="Feature Title" value="<?php echo $socdata['feature_title4'] ?>" >
                                    
                                         
                                            <input class="form-control mb-2" type="file" name="feature_img4" id="formFile"   value="<?php echo $socdata['feature_img4'] ?>">
                                      
                                      </div>  
                                      <div class="togg">
                                        <label for="feature_title5" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title5" placeholder="Feature Title" value="<?php echo $socdata['feature_title5'] ?>">
                                    
                                         
                                            <input class="form-control mb-2" type="file" name="feature_img5" id="formFile"  value="<?php echo $socdata['feature_img5'] ?>">
                                      
                                      </div>  
                                      <div class="togg">
                                        <label for="feature_title6" class="form-label">Feature Icon</label>
                                        <input type="text" class="form-control  mb-2" name="feature_title6" placeholder="Feature Title" value="<?php echo $socdata['feature_title6'] ?>">
                                    
                                         
                                            <input class="form-control mb-2" type="file" name="feature_img6" id="formFile" value="<?php echo $socdata['feature_img6'] ?>">
                                      
                                      </div>  
   <a class="btn btn-dark py-3 mb-4" id="more" style="width:fit-content; color:#fff;">More</a>   
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="">
                                     
                  
                                     <label for="pdf" class="form-label">Payment Plan Pdf</label>
                                     <input type="file" class="form-control  mb-2" name="pdf" placeholder="Payment Plan Pdf" value="<?php echo $socdata['pdf'] ?>" >
                                     <label for="plan_image" class="form-label">Payment Plan Image</label>
                                     <input type="file" class="form-control  mb-2" name="plan_image" placeholder="Payment Plan Image" value="<?php echo $socdata['plan_image'] ?>">
                                     <label for="location" class="form-label">Location</label>
                                     <textarea class="form-control" id="location" name="location" rows="3" style="height: 90px;"><?php echo $socdata['location'] ?></textarea>
                                 </div>
                                    </div>

                                    <div class="row mb-4">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="<?php echo $socdata['meta_title'] ?>">
                    
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
    <div>
                     
    <label for="meta_desc" class="form-label">Meta Description</label>
                        <input type="text" class="form-control" name="meta_desc" placeholder="Meta Description" value="<?php echo $socdata['meta_desc'] ?>">  
                         <input type="text" class="form-control" name="position" placeholder="Position"  value="<?php echo $socdata['position'] ?>">   
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
            $(document).ready(function(){
              $("#more").click(function(){
                $(".togg").toggle();
              });  
               $("#more2").click(function(){
                $(".togg2").toggle();
              });
            });
            </script>
<script>
 CKEDITOR.replace( 'project_details', {
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
         $project_title = $_POST["project_title"];
         $slug = $_POST["slug"];
         $project_slogan = $_POST["project_slogan"];
         $project_value = $_POST["project_value"];
         $project_offer = $_POST["project_offer"];
         $yt_video = $_POST["yt_video"];
         $short_desc = $_POST["short_desc"];
         $project_details = $_POST["project_details"];
         $feature_title1 = $_POST["feature_title1"];
         $feature_title2 = $_POST["feature_title2"];
         $feature_title3 = $_POST["feature_title3"];
         $feature_title4 = $_POST["feature_title4"];
         $feature_title5 = $_POST["feature_title5"];
         $feature_title6 = $_POST["feature_title6"];
         $location = $_POST["location"];
         $meta_title = $_POST["meta_title"];
         $meta_desc = $_POST["meta_desc"];
           $position = $_POST["position"];
       if(isset($_POST["submit"])){
           
            if($_FILES["feature_image"]["name"]=="")
          {
              $dst= $socdata['feature_image'];
          }
          else
          {
       $fnm=$_FILES["feature_image"]["name"];
      $dst="images/".$fnm;
        $dst1="project/images/".$fnm;
        move_uploaded_file($_FILES["feature_image"]["tmp_name"],$dst);
          }
          
          
          if($_FILES["slider1"]["name"]=="")
          {
              $dsts1= $socdata['slider1'];
          }
          else
          {
            $fnms1=$_FILES["slider1"]["name"];
            $dsts1="images/".$fnms1;
            $dst1s="project/images/".$fnms1;
            move_uploaded_file($_FILES["slider1"]["tmp_name"],$dsts1);
          }

          if($_FILES["slider2"]["name"]=="")
          {
              $dsts2= $socdata['slider2'];
          }
          else
          {
            $fnms2=$_FILES["slider2"]["name"];
            $dsts2="images/".$fnms2;
            $dst2s="project/images/".$fnms2;
            move_uploaded_file($_FILES["slider2"]["tmp_name"],$dsts2);
          }



          if($_FILES["slider3"]["name"]=="")
          {
              $dsts3= $socdata['slider3'];
          }
          else
          {
            $fnms3=$_FILES["slider3"]["name"];
        $dsts3="images/".$fnms3;
        $dst3s="project/images/".$fnms3;
        move_uploaded_file($_FILES["slider3"]["tmp_name"],$dsts3);
          }


          
               if($_FILES["feature_img1"]["name"]=="")
          {
              $dst2= $socdata['feature_img1'];
          }
          else
          {
       $fnm2=$_FILES["feature_img1"]["name"];
      $dst2="images/".$fnm2;
        $dst10="project/images/".$fnm2;
        move_uploaded_file($_FILES["feature_img1"]["tmp_name"],$dst2);
          } 
          
          
          
                if($_FILES["feature_img2"]["name"]=="")
          {
              $dst3= $socdata['feature_img2'];
          }
          else
          {
       $fnm3=$_FILES["feature_img2"]["name"];
      $dst3="images/".$fnm3;
        $dst13="project/images/".$fnm3;
        move_uploaded_file($_FILES["feature_img2"]["tmp_name"],$dst3);
          } 
          
          
          
          
                 if($_FILES["feature_img3"]["name"]=="")
          {
              $dst4= $socdata['feature_img3'];
          }
          else
          {
       $fnm4=$_FILES["feature_img3"]["name"];
      $dst4="images/".$fnm4;
        $dst14="project/images/".$fnm4;
        move_uploaded_file($_FILES["feature_img3"]["tmp_name"],$dst4);
          } 
          
       
       
                 if($_FILES["feature_img4"]["name"]=="")
          {
              $dst5= $socdata['feature_img4'];
          }
          else
          {
       $fnm5=$_FILES["feature_img4"]["name"];
      $dst5="images/".$fnm5;
        $dst15="project/images/".$fnm5;
        move_uploaded_file($_FILES["feature_img4"]["tmp_name"],$dst5);
          } 
       
       
       
                 if($_FILES["feature_img5"]["name"]=="")
          {
              $dst6= $socdata['feature_img5'];
          }
          else
          {
       $fnm6=$_FILES["feature_img5"]["name"];
      $dst6="images/".$fnm6;
        $dst16="project/images/".$fnm6;
        move_uploaded_file($_FILES["feature_img5"]["tmp_name"],$dst6);
          } 
       
             if($_FILES["pdf"]["name"]=="")
          {
              $dst8= $socdata['pdf'];
          }
          else
          {
       $fnm8=$_FILES["pdf"]["name"];
      $dst8="images/".$fnm8;
        $dst18="project/images/".$fnm8;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],$dst8);
          } 
          
       
       
                 if($_FILES["feature_img6"]["name"]=="")
          {
              $dst7= $socdata['feature_img6'];
          }
          else
          {
       $fnm7=$_FILES["feature_img6"]["name"];
      $dst7="images/".$fnm7;
        $dst17="project/images/".$fnm7;
        move_uploaded_file($_FILES["feature_img6"]["tmp_name"],$dst7);
          } 
          
          
          
           
       
       $sql="UPDATE `projects` SET `project_title`='$project_title',`slug`='$slug',`project_slogan`='$project_slogan',`project_value`='$project_value',`project_offer`='$project_offer',`yt_video`='$yt_video',`short_desc`='$short_desc',`feature_image`='$dst',`slider1`='$dsts1',`slider2`='$dsts2',`slider3`='$dsts3',`project_details`='$project_details',`feature_title1`='$feature_title1',`feature_img1`='$dst2',`feature_title2`='$feature_title2',`feature_img2`='$dst3',`feature_title3`='$feature_title3',`feature_img3`='$dst4',`feature_title4`='$feature_title4',`feature_img4`='$dst5',`feature_title5`='$feature_title5',`feature_img5`='$dst6',`feature_title6`='$feature_title6',`pdf`='$dst8',`feature_img6`='$dst7',`location`='$location',`meta_title`='$meta_title',`meta_desc`='$meta_desc',`position`='$position'WHERE`id`='$id'";

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










