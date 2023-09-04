<?php 
$server = "localhost";
$username = "ally_ally";
$password = "ally_allyproperties";
$database = "ally_ally";
$conn = mysqli_connect($server, $username, $password, $database);


$id=$_GET['slug'];
$datashowquery="SELECT * FROM `blogs` WHERE slug='$id' ";
$data=mysqli_query($conn,$datashowquery);
$count=mysqli_num_rows($data);
$show=mysqli_fetch_array($data); 

// Query to retrieve comments

$blog_id = $show['id'];
$sql="SELECT * FROM `comments` WHERE blogid='$blog_id' ";

// Execute the query
$result = mysqli_query($conn, $sql);

// Store the results in an array
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php
$title = $show['meta_title'];
$description =$show['meta_desc'];
?>
<?php include './assets/components/header.php';?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  $blogid = mysqli_real_escape_string($conn, $_POST['blogid']);
  $save_info = isset($_POST['save-info']) ? 1 : 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Insert the data into the database
  $sql = "INSERT INTO comments ( name, email, website, comment, blogid) VALUES ('$name', '$email', '$website', '$comment', '$blogid')";
 $result= mysqli_query($conn, $sql);


 if($result){
          echo '<div class="bs-toast toast fade show bg-secondary" style="position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%); z-index:500;" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class="bx bx-bell me-2"></i>
                          <div class="me-auto fw-semibold">Status</div>
                          <small>Just Now</small>
                          <button type="button"  class="btn-close" id="closee" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                          Comment Added successfully.
                        </div>
                      </div>';
      
      }
    }
  else{
    echo "failed";
}

  // Set a cookie to save the user's info
  if ($save_info) {
    setcookie('name', $name, time() + (86400 * 30), "/");
    setcookie('email', $email, time() + (86400 * 30), "/");
    setcookie('website', $website, time() + (86400 * 30), "/");
  }


}

?>
<section class="breadcumb-section section-padding section-bg">
    <div class="sec-box">
<div class="section-title text-center">
    <h1>
  Blog
    </h1>
</div>
    </div>
</section>

<section class="section-padding">
<div class="sec-box">
  <div class="row">
    <div>
    <div class="blogfeatureimg">
          <img src="https://www.allyproperties.pk/admin-panel/pages/blog/<?php echo $show['featureimage'] ?>" alt="">
      </div>
      <div class="blogassets">
          <span class="calend"> <i class="fas fa-calendar"></i>     <?php echo $show['date'] ?>  </span> 
          <span> <i class="fas fa-tag"></i>     <?php echo $show['blogcat'] ?> </span>
    </div>

    <h2 class="blogtitle">
    <?php echo $show['blogtitle'] ?>     </h2>
         <div class="blogcontent">
         <?php echo $show['blogdesc'] ?>
         </div>
         
         
      <div id="comments">
  <h2>Leave a Comment:</h2>
  <p>Your email address will not be published. Required fields are marked *</p>
  <form id="comment-form"  enctype="multipart/form-data"  method="POST">
    <label for="comment">Comment *</label>
    <textarea id="comment" name="comment" required></textarea>
    <div class="form-row">
      <div class="form-column">
        <label for="name">Name *</label>
        <input type="hidden" name="blogid" value="<?php echo $show['id'] ?>">
        <input type="text" id="name" name="name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>" required>
      </div>
      <div class="form-column">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['email'] : ''; ?>" required>
      </div>
     
    </div>
    <div class="form-row">
      <div class="form-column" style="display:flex; align-items:center; gap:15px;width:100%;">
        <input type="checkbox" id="save-info" name="save-info" style="margin:0;">
        <label for="save-info" style="margin:0;">Save my entries in the browser for the next time I comment</label>
      </div>
    </div>
    <div class="form-row">
      <button type="submit" class="book">Post Comment</button>
    </div>
  </form>
  <div class="comments-list">
    <h3>Comments:</h3>
    <ul>
    <?php foreach ($comments as $comment): ?>
  <li>
    <div class="comment-header">
      <strong><?php echo $comment['name']; ?></strong>
      <span><?php echo $comment['created_at']; ?></span>
    </div>
    <p><?php echo $comment['comment']; ?></p>
  </li>
<?php endforeach; ?>
    </ul>
  </div>
</div>


    </div>
  </div>
</div>
</section>


<?php include './assets/components/footer.php';?>
<script>
    
    $("#closee").click(function(){
window.location.href=window.location.href
});
</script>
