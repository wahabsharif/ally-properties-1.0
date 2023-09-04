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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
         <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
     <meta property="title" content="Contact Ally Properties - Get in Touch for Real Estate Assistance">
  <meta property="description" content="Reach out to Ally Properties for expert real estate assistance. Our team is here to help with buying, selling, and investing in properties. Contact us today.">
    <link rel="stylesheet" href="assets/contact/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous" />
    <title>AllyProperties</title>
</head>

<body>
    <!-- <div class="loader" id="loader">-->
    <!--    <div class="loading">-->
    <!--        <h6 style=" left: -50%;-->
    <!--color: #fff;-->
    <!--position: absolute;-->
    <!--min-width: 616px;-->
    <!--text-align: center;-->
    <!--width: 100%;-->
    <!--transform: translate(-37%, -136%);">If You are not Profiting from your investment <br> you need a true business ally</h6>-->
    <!--        <p>loading</p>-->
    <!--        <span></span>-->
    <!--    </div>-->
    <!--</div>-->

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
                    <a href="tel://+923365539931">+92 336 5539931</a> |
                    <a href="tel://+923314646143">+92 331 4646143</a>
                </div>

            </div>
        </div>
        <nav>
            <div class="nav-bar">
                <i class='fas fa-bars sidebarOpen'></i>
                <div class="logo navLogo"><a href="index.php"> <img src="assets/images/linear-logo.png" alt=""></a>
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
   
   $sql = "SELECT * FROM `projects`";
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
   
   $sql = "SELECT * FROM `societies`";
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


        <script src="assets/contact/js/jquery.min.js"></script>
        <script src="assets/contact/js/popper.js"></script>
        <script src="assets/contact/js/bootstrap.min.js"></script>
        <script src="assets/contact/js/jquery.validate.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
        </script>
        <script src="assets/contact/js/google-map.js"></script>
        <script src="assets/contact/js/main.js"></script>
        <?php include './assets/components/footer.php';?>