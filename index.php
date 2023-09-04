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
$title = "Ally Properties - Your Trusted Real Estate Partner in Pakistan";
$description = "At Ally Properties, we're committed to helping you find the perfect property in Pakistan. Whether you're buying, our experienced team is here to guide you through every step of the process. Contact us today.";
?>
<?php include './assets/components/header.php';?>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Contact Style-->
<section class="hero">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
     
        <?php
   
   $sql = "SELECT * FROM `slider`";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
        $slider= $row['slider_img'];
        $link= $row['link'];
     
     echo ' 

            <div class="swiper-slide"> <a href="'.$link.'" style="width: 100%; height: 100%;"><img src="https://www.allyproperties.pk/admin-panel/pages/slider/'.$slider.'" alt=""></a> </div>
            
               ';

                  } 
                  
                  }
                  
                  
                  ?>
           
        </div>


        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->


    </div>
</section>
<!--<section class="looking-section section-padding ">-->
<!--    <div class="sec-box">-->
<!--        <div class="section-title">-->
<!--            <h2>-->
<!--                WHAT ARE YOU LOOKING FOR?-->
<!--            </h2>-->
<!--        </div>-->
<!--        <div class="row justify-content-center mt-5">-->
<!--            <div class="col-lg-5 col-md-5">-->
<!--                <div class="item text-center">-->
<!--                    <div class="img">-->
<!--                        <img src="assets/images/modern-house.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <h2 class="mt-4 mb-2">-->
<!--                            Commercial Projects-->
<!--                        </h2>-->
<!--                        <p class="">-->
<!--                           A commercial project is a for-profit venture that is intended to generate revenue and make a profit for its owners. The main focus of a commercial project is to maximize financial return for investors.-->
<!--                        </p>-->
<!--                        <a href="" class="view-all">view all</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-5 col-md-5">-->
<!--                <div class="item text-center">-->
<!--                    <div class="img">-->
<!--                        <img src="assets/images/house.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <h2 class="mt-4 mb-2">-->
<!--                            Societies-->
<!--                        </h2>-->
<!--                        <p class="">-->
<!--                            We went down the lane, by the body of the man in black, sodden now from the overnight hail,-->
<!--                            and broke into the woods at the foot of the hill.-->
<!--                        </p>-->
<!--                        <a href="" class="view-all">view all</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="about-section">
    <div class="row">
        <div class="col-lg-6 about-bg-image"></div>
        <div class="col-lg-6">
            <div class="column-padding">
                <h2 class="heading-md">
                    About Allyproperties
                </h2>
                <p>
                  Ally Properties is a well-established real estate firm in Islamabad with over 5 years of experience. The company is known for its commitment to providing top-notch services to its clients and has a reputation for delivering outstanding results. With a team of highly skilled and knowledgeable professionals, Ally Properties is dedicated to helping clients make informed decisions about their real estate investments. Whether you're looking to buy, sell, or rent a property, Ally Properties is the ideal choice for anyone seeking a trusted and reliable real estate partner in Islamabad.

                </p>
               
                <a href="https://allyproperties.pk/about.php" class="view-all">Read More</a>
            </div>
        </div>
    </div>
</section>
    <section class="section-padding listings">
      <div class="sec-box">
        <div class="section-title">
          <h2 class="">Listings</h2>
        </div>
      </div>
      <div class="container" style="margin-top: 50px">
        <div class="list-wrap">
          <div class="list-box">
            <div class="list-box-top">
              <img
                class="list-box-image"
                src="./assets/images/elanza-creeks-apt.png"
                alt="Girl Eating Pizza" />
              <div class="list-title-flex">
                <h3 class="list-box-title">10 Marla</h3>
                <p class="list-user-follow-info">Elanza Creeks Apartments</p>
                <h3 class="list-box-title">3,750,000</h3>
              </div>
              <p class="list-description">
                10 Marla residential plot available on minimum down.
              </p>
            </div>
            <a
              href="https://wa.me/923365539931"
              target="_blank"
              class="list-button"
              >WhatsApp</a
            >
          </div>
          <div class="list-box">
            <div class="list-box-top">
              <img
                class="list-box-image"
                src="./assets/images/j-block-listing.jpg"
                alt="Girl Eating Pizza" />
              <div class="list-title-flex">
                <h3 class="list-box-title">J-Block</h3>
                <p class="list-user-follow-info">Park View City</p>
                <h3 class="list-box-title">9,000,000</h3>
              </div>
              <p class="list-description">
                ParkView City J Block Booking with a 25% and Possession on 50%  Payment....
              </p>
            </div>
            <a
              href="https://wa.me/923365539931"
              target="_blank"
              class="list-button"
              >WhatsApp</a
            >
          </div>
          <div class="list-box">
            <div class="list-box-top">
              <img
                class="list-box-image"
                src="./assets/images/overseas-block-listing.jpg"
                alt="Girl Eating Pizza" />
              <div class="list-title-flex">
                <h3 class="list-box-title">Overseas Block</h3>
                <p class="list-user-follow-info">Parkview City</p>
                <h3 class="list-box-title">7,000,000</h3>
              </div>
              <p class="list-description">
                  Overseas Block at Park View City! With a unique two-year payment plan.
              </p>
            </div>
            <a
              href="https://wa.me/923365539931"
              target="_blank"
              class="list-button"
              >WhatsApp</a
            >
          </div>
          <div class="list-box">
            <div class="list-box-top">
              <img
                class="list-box-image"
                src="./assets/images/silver-city-commercial-listing.jpg"
                alt="Girl Eating Pizza" />
              <div class="list-title-flex">
                <h3 class="list-box-title">10 Marla</h3>
                <p class="list-user-follow-info">Silver City Commercial</p>
                <h3 class="list-box-title">13,500,000</h3>
              </div>
              <p class="list-description">
                Silver City has revealed investment opportunities for high returns.
              </p>
            </div>
            <a
              href="https://wa.me/923365539931"
              target="_blank"
              class="list-button"
              >WhatsApp</a
            >
          </div>
                    <div class="list-box">
            <div class="list-box-top">
              <img
                class="list-box-image"
                src="./assets/images/silver-city-residential-listing.jpg"
                alt="Girl Eating Pizza" />
              <div class="list-title-flex">
                <h3 class="list-box-title">10 Marla</h3>
                <p class="list-user-follow-info">Silver City Residential</p>
                <h3 class="list-box-title">2,500,000</h3>
              </div>
              <p class="list-description">
                Silver City brings you the opportunity to own a house at 5 & 10 Marla and...
              </p>
            </div>
            <a
              href="https://wa.me/923365539931"
              target="_blank"
              class="list-button"
              >WhatsApp</a
            >
          </div>
        </div>
      </div>
    </section>

<section class="projects-section section-padding section-bg">
    <div class="sec-box">
        <div class="section-title ">
            <h2 class="">
                Commercial Projects
            </h2>
        </div>
        <div class="row">
            <div class="projectsslider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <?php
   
   $sql = "SELECT * FROM `projects`  ORDER BY `position` ASC ";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $slug= $row['slug'];
       $feature_image= $row['feature_image'];
       $project_title= $row['project_title'];
       $short_desc= $row['short_desc'];
       $project_slogan= $row['project_slogan'];
       $project_offer= $row['project_offer'];
       $project_value= $row['project_value'];
        $slider1= $row['slider1'];
        $slider2= $row['slider2'];
        $slider3= $row['slider3'];
   
     echo ' 
                    <div class="swiper-slide">
                        <div class="project-box ">

                            <div class="project-content">
                                <h2 class="project-name">
                                    '.$project_title.'
                                </h2>

                                <p class="project-desc">

                                    <strong> '.$project_slogan.'</strong> <br>

                                    '.$short_desc.'
                                </p>
                                <div class="starting-value">
                                    Offering: <span class="gold-color"> '.$project_offer.'</span>
                                </div>
                                <div class="starting-value">
                                    Starting Value : <span class="gold-color">'.$project_value.' PKR</span>
                                </div>
                                <div class="housing-btns">
                                    <a href="https://api.whatsapp.com/send/?phone=+923365539931&text&type=phone_number&app_absent=0" class="book">Book Now</a>
                                    <a href="https://allyproperties.pk/projects/'.$slug.'" class="read">Read More</a>
                                </div>

                            </div>
                            <div class="project-image">
                                <div class="projectimageslider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://www.allyproperties.pk/admin-panel/pages/project/'.$slider1.'" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://www.allyproperties.pk/admin-panel/pages/project/'.$slider2.'" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="https://www.allyproperties.pk/admin-panel/pages/project/'.$slider3.'" alt="">
                                        </div>


                                    </div>
                                        

                                </div>


                            </div>
                        </div>
                    </div>
                    ';

                  } 
                  
                  }
                  
                  
                  ?>
                </div>
            </div>
        </div>
</section>

<section class="societies-section section-padding">
    <div class="sec-box">
        <div class="section-title">
            <h2>
                Societies
            </h2>
        </div>
        <div class="row">
            <?php
   
$sql = "SELECT * FROM `societies` ORDER BY CASE WHEN `position` < 10 THEN CONCAT('0', `position`) ELSE `position` END ASC,  `id` ASC";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $slug= $row['slug'];
       $feature_image= $row['feature_image'];
       $society_title= $row['society_title'];
       $short_desc= $row['short_desc'];
      
   
     echo ' 
<div class="col-lg-4 col-md-6 col-12">
  <a href="https://allyproperties.pk/societies/'.$slug.'"><div class="society">
    <div class="society-image">
      <img src="https://www.allyproperties.pk/admin-panel/pages/society/'.$feature_image.'" alt="">
    </div>
    <div class="society-content">
      <h2 class="society-name">
      '.$society_title.'
      </h2>
      <p class="society-desc">
      '.$short_desc.'
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

<section class="agent-section section-padding section-bg" style="display:none">
    <div class="sec-box">
        <div class="section-title">
            <h2>
                Our Expert Agents
            </h2>
        </div>
        <div class="row">
            <?php
   
   $sql = "SELECT * FROM `agent`";
   $res = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($res);
   if ($res) {
   while ($row = mysqli_fetch_assoc($res)){
     $id= $row['id'];
     $agent_name= $row['agent_name'];
       $agent_desc= $row['agent_desc'];
       $email= $row['email'];
       $contact= $row['contact'];
       $facebook= $row['facebook'];
       $linkedin= $row['linkedin'];
       $whatsapp= $row['whatsapp'];
       $agent_image= $row['agent_image'];
      
   
     echo ' 
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="agent-box">
                    <div class="agent-image">
                        <img src="https://www.allyproperties.pk/admin-panel/pages/agent/'.$agent_image.'" alt="">
                    </div>
                    <div class="agent-content">
                        <h2 class="agent-name">
                            '.$agent_name.'
                        </h2>
                        <p class="my-2">
                        '.$agent_desc.'
                        </p>
                        <a href="#" class="icon-and-text"><strong>Email:</strong>  '.$email.' </a> <br>
                        <a href="#" class="icon-and-text"> <strong>Phone:</strong>  '.$contact.'</a>
                        <div class="agent-footer mt-3 mb-2">
                            <div class="agent-links ">
                                <a href="'.$facebook.'"><i class="fab fa-facebook"></i></a>
                                <a href="'.$linkedin.'"> <i class="fab fa-linkedin"></i></a>
                                <a href="'.$whatsapp.'"> <i class="fab fa-whatsapp"></i></a>
                            </div>
                            <div class="agent-btn"><a href="tel://'.$contact.'"><i class="fas fa-phone-alt"></i> Call Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            ';

          } 
          
          }
          
          
          ?>
        </div>
    </div>
</section>
<section class="review-section section-padding section-bg">
    <div class="sec-box">
          <div class="section-title">
            <h2>
                What Our Clients Says
            </h2>
        </div>
        
        <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="assets/images/mk.jpg" alt="avatar"
        style="    width: 150px;
    height: 150px;
    object-fit: cover;
    object-position: center center; margin:auto;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3" style="
    color: #fff;
">Manan Kakar</h5>
          <!--<p>Photographer</p>-->
          <p class="" style="
    color: #fff;
">
            <i class="fas fa-quote-left pe-2"></i>
            I have been in the real estate business for several years, and I can confidently say that Ally Properties is the best real estate company in Islamabad. Their team is knowledgeable, professional, and always goes above and beyond for their clients. Whether you're looking to buy or rent, they have a wide range of properties to choose from, and their rates are always competitive. I highly recommend Ally Properties to anyone looking for a top-tier real estate experience.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="assets/images/ra.jpg" alt="avatar"
        style="    width: 150px;
    height: 150px;
    object-fit: cover;
    object-position: center center; margin:auto;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3" style="
    color: #fff;
">Raja Atif</h5>
          <!--<p>Web Developer</p>-->
          <p class="" style="
    color: #fff;
">
            <i class="fas fa-quote-left pe-2"></i>
            I recently worked with Ally Properties to find a rental property in Islamabad, and I couldn't be happier with the level of service I received. Their team was friendly, helpful, and really took the time to understand what I was looking for in a home. They showed me several great options, and ultimately helped me find the perfect place to call my own. I highly recommend Ally Properties for anyone in the market for a new home.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="assets/images/ss.jpg" alt="avatar" style="    width: 150px;
    height: 150px;
    object-fit: cover;
    object-position: center center; margin:auto;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3" style="
    color: #fff;
">Sheikh Asghar</h5>
          <!--<p>UX Designer</p>-->
          <p class="" style="
    color: #fff;
">
            <i class="fas fa-quote-left pe-2"></i>
            As a property investor, I have worked with several real estate companies in Islamabad, but none have come close to the level of service provided by Ally Properties. Their team is highly experienced and has an in-depth knowledge of the local market, which has been invaluable to me in making informed investment decisions. They have helped me secure some of the best deals in the city, and I trust them implicitly with all of my real estate needs.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="assets/images/sa.jpg" alt="avatar" style="    width: 150px;
    height: 150px;
    object-fit: cover;
    object-position: center center; margin:auto;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3" style="
    color: #fff;
">Sohail Safdar</h5>
          <!--<p>UX Designer</p>-->
          <p class="" style="
    color: #fff;
">
            <i class="fas fa-quote-left pe-2"></i>
         I have worked with Ally Properties on several occasions, both for buying and renting properties, and I can confidently say that they are the best real estate company in Islamabad. Their team is highly professional and really takes the time to understand their clients' needs. They have an extensive network of properties and can always find something that meets your criteria. I highly recommend Ally Properties for anyone looking for a seamless real estate experience.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
    data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
    data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</section>

<section class="blog-section section-padding">
    <div class="sec-box">
        <div class="section-title">
            <h2>
                Latest Blogs
            </h2>
        </div>
        <div class="row">

        <?php
   
   $sql = "SELECT * FROM `blogs`  ORDER BY id DESC LIMIT 3";
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
             <a href="https://allyproperties.pk/blog/'.$slug.'">    <div class="blog-item">
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
                </div></a>
            </div>
  
            ';

          } 
          
          }
          
          
          ?>

        </div>
    </div>
</section>

<?php include './assets/components/footer.php';?>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>