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

?>
<?php
$title = "Real Estate Blog - Insights, Tips, and Trends | Ally Properties";
$description = "Explore our real estate blog for valuable insights, tips, and trends. Stay updated with the latest happenings in the real estate market. Visit Ally Properties today.";
?>
<?php include './assets/components/header.php';?>
<section class="breadcumb-section section-padding section-bg">
    <div class="sec-box">
<div class="section-title text-center">
    <h1>
Real Estate Blog - Insights, Tips, and Trends
    </h1>
</div>
    </div>
</section>


<section class="blog-section section-padding">
    <div class="sec-box">
       
        <div class="row">

        <?php
   
   $sql = "SELECT * FROM `blogs` ORDER BY id DESC";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $slug= $row['slug'];
     $blogtitle= $row['blogtitle'];
       $blogshortdesc= $row['blogshortdesc'];
       $blogcat= $row['blogcat'];
       $featureimage= $row['featureimage'];
      
      
   
     echo ' 
            <div class="col-lg-4 col-md-6 col-12">
            <a href="blog/'.$slug.'">
                <div class="blog-item">
                    <div class="blog-image" style="    width: 100%;
    height: 187px;">
                        <img src="https://www.allyproperties.pk/admin-panel/pages/blog/'.$featureimage.'" alt="">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-cat">
                           '.$blogcat.'
                        </h3>
                        <h2 class="blog-title mt-2">
                        '.$blogtitle.'
                        </h2>
                        <p class="blog-desc">
                        '.$blogshortdesc.'
                        </p>
                      
                    </div>
                </div>
                </a>
            </div>
  
            ';

          } 
          
          }
          
          
          ?>


        </div>
    </div>
</section>



<?php include './assets/components/footer.php';?>