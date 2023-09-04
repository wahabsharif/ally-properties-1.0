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
$id=$_GET['slug'];
$datashowquery="SELECT * FROM `societies` WHERE slug='$id' ";
$data=mysqli_query($conn,$datashowquery);
$count=mysqli_num_rows($data);
$show=mysqli_fetch_array($data); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="title" content="<?php echo $show['meta_title'] ?>">
    <meta property="description" content="<?php echo $show['meta_desc'] ?>">
        <meta property="keywords" content="<?php echo $show['keywords'] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://allyproperties.pk/assets/css/style.css" />
    <link rel="stylesheet" href="https://allyproperties.pk/assets/css/responsive.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
              <link rel="icon" type="image/x-icon" href="https://allyproperties.pk/assets/images/favicon.ico">
            <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
            <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "AllyProperties",
  "url": "https://allyproperties.pk",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
  <script>
    window.onload = function() {
      // Get the current URL
      var currentURL = window.location.href;

      // Check if the current URL matches the desired URL
      if (currentURL === "https://allyproperties.pk/societies/dha-valley") {
        // Show the div with the ID "dhasection"
        document.getElementById("dhasection").style.display = "block";
      } else {
        // Hide the div with the ID "dhasection"
        document.getElementById("dhasection").style.display = "none";
      }
    };
  </script>
    <title><?php echo $show['meta_title'] ?></title>
</head>

<body>
    
    <div class="loaderdiv" id="loader">
                 <h6 style="">If You are not Profiting from your investment <br> you need a true business ally</h6>
            <p>loading</p>
            <img style="max-width: 300px;" src="https://allyproperties.pk/assets/images/animated.gif">

  
</div>

    <header>
        <div class="top-nav">
            <div class="top-nav-content">
                <div class="social-icons">
                    <a href="https://www.facebook.com/allyproperties.pk/"><i class="fab fa-facebook-f"></i> </a>
                    <a href="https://www.instagram.com/allyproperties.pk/"><i class="fab fa-instagram"></i> </a>
                    <a href="https://www.youtube.com/@allyproperties"><i class="fab fa-youtube"></i> </a>
                    <a href="https://www.linkedin.com/company/allypropertiespk/"><i class="fab fa-linkedin"></i></a>

                </div>
                <div class="office-timings">
                      <a href="tel://+923365539931">+92 3365539931</a>
                </div>

            </div>
        </div>
        <nav>
            <div class="nav-bar">
                <i class='fas fa-bars sidebarOpen'></i>
                <div class="logo navLogo"><a href="https://allyproperties.pk/"> <img src="https://allyproperties.pk/assets/images/linear-logo.png" alt=""></a>
                </div>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo logo-text"><a href="index.html">AllyProperties</a></span>
                        <i class='fas fa-times siderbarClose'></i>
                    </div>

                    <ul class="nav-links">
                        <li><a href="https://allyproperties.pk/">Home</a></li>
                        <li><a href="https://allyproperties.pk/about.php">About</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
   
   $sql = "SELECT * FROM `projects` ORDER BY `position` ASC ";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $slug= $row['slug'];
       $project_title= $row['project_title'];
      
   
     echo ' 
                                <li><a class="dropdown-item" href="https://allyproperties.pk/projects/'.$slug.'" style="color:#000 !important;">'.$project_title.'</a></li>

                                ';

                              } 
                          
                            }
                              
                              
                             ?>
                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Societies
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
   
   $sql =  "SELECT * FROM `societies` ORDER BY CASE WHEN `position` < 10 THEN CONCAT('0', `position`) ELSE `position` END ASC,  `id` ASC";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $slug= $row['slug'];
       $society_title= $row['society_title'];
      
   
     echo ' 
                <li><a class="dropdown-item" href="https://allyproperties.pk/societies/'.$slug.'" style="color:#000 !important;">'.$society_title.'</a></li> 
    
                ';

              } 
          
            }
              
              
             ?>


                            </ul>
                        </li>
                        <li><a href="https://allyproperties.pk/blogs.php">Blog</a></li>

                        <li><a href="https://allyproperties.pk/contact.php">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <main> 
<section class="breadcumb-section section-padding section-bg">
    <div class="sec-box">
<div class="section-title text-center">
    <h1>
    <?php echo $show['society_title'] ?>
    </h1>
</div>
    </div>
</section>
<section class="intro-sec section-padding ">
<div class="sec-box">
<div class="section-title text-center pb-4">
    <!--<h6 class="fw-bolder">-->
    <!--    INTRODUCTION-->
    <!--</h6>-->
    <!--<h2>-->
    <!--<?php echo $show['society_title'] ?>-->
    <!--</h2>-->
    <!--<p>-->
    <!--<?php echo $show['short_desc'] ?>-->
    <!--</p>-->
    <div class="yt-video">
    <iframe width="1350" height="480" src="https://www.youtube.com/embed/<?php echo $show['yt_video'] ?>" title="1 Hours Love Lofi Mashup || Slowed reverb || #lofi #mashup #1hour" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <a href="https://allyproperties.pk/contact.php" class="advice-btn"> Get Expert Advice
    </a>
</div>
</div>
</section>
<section class="detailed-desc section-padding">
    <div class="sec-box">
        <div class="section-title">
<h1>
   <?php echo $show['htag'] ?>
</h1>
        </div>
        <div class="textarea-content">
        <?php echo $show['society_details'] ?>
        </div>
    </div>
</section>

<section class="amenities section-padding section-bg2">
    <div class="sec-box">
        <div class="section-title">
            <h2>
            Society Features
            </h2>
        </div>
        <div class="row">
        
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img1'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title1'] ?></h4>
        </div>
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img2'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title2'] ?></h4>
        </div>
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img3'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title3'] ?></h4>
        </div>
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img4'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title4'] ?></h4>
        </div>
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img5'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title5'] ?></h4>
        </div>
        <div class="col-md-4 col-6 text-center my-4">
<img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['feature_img6'] ?>" style="margin: auto; width:60px; height:60px; margin-bottom: 5px;" alt="">
<h4>
<?php echo $show['feature_title6'] ?></h4>
        </div>
 
</div>
    </div>
</section>

<section class="plan section-padding">
    <div class="sec-box">
<div class="section-title">
    <h2>
        Payment plan
    </h2>
</div>
<div class="col-sm-10 text-center m-auto">
   <a href="" >
        <img src="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['plan_image'] ?>" alt="">
    </a>
</div>
<a href="https://www.allyproperties.pk/admin-panel/pages/society/<?php echo $show['pdf'] ?>" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>

    </div>
</section>
<section class="section-padding" id="dhasection">
    <div class="sec-box">
          <div class="section-title">
<h2>
Blocks in DHA Valley Islamabad
</h2>
        </div>
          <div class="row justify-content-center">
              <div class="col-md-4 col-12">
                  <div class="blockbox">
                      <h5>
                          DHA Valley Rose Block Res
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/roseblockres.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                    <div class="blockbox">
                      <h5>
                          DHA Valley Blue Bell Res
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/bluebellres.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                  
                  
                    <div class="blockbox">
                      <h5>
                          DHA Valley Bogan Vella Comm
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/boganvellacomm.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                  
                    <div class="blockbox">
                      <h5>
                          DHA Valley Bogan Vella Res
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/boganvellares.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                  
                  
                  
                  
                  </div>
                            <div class="col-md-4 col-12">
                  <div class="blockbox">
                      <h5>
                          DHA Valley Rose Block Comm
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/roseblockcomm.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                  <div class="blockbox">
                      <h5>
                          DHA Valley Lilly
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/lilly.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  <div class="blockbox">
                      <h5>
                          DHA Valley Lilly Comm
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/lillycomm.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                  
                  
                  
                  </div>
                          <div class="col-md-4 col-12">
                    <div class="blockbox">
                      <h5>
                          DHA Valley Mangolia Res
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/magnoliares.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                       <div class="blockbox">
                      <h5>
                          DHA Valley Mangolia Comm
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/magnoliacomm.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                      <div class="blockbox">
                      <h5>
                          DHA Valley Oleander Res
                      </h5>
                      <a href="https://allyproperties.pk/assets/images/oleanderres.pdf" target="_blank">
<div  class="button">
<div class="button-wrapper">
  <div class="text">Download</div>
    <span class="icon">
      <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" height="2em" width="2em" role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none"></path></svg>
    </span>
  </div>
</div>
</a>
                  </div>
                    
                  </div>
              </div>
    </div>
</section>
<section class="location section-padding section-bg2">
    <div class="sec-box">
        <div class="section-title">
<h2>
    Society Location
</h2>
        </div>
        <div class="row justify-content-center">
<div class="col-sm-10">
<?php echo $show['location'] ?>
</div>
        </div>
    </div>
</section>

<?php include './assets/components/footer.php';?>