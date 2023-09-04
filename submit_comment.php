<?php

$server = "localhost";
$username = "waqar_ally";
$password = "waqar_ally";
$database = "waqar_ally";
$conn = mysqli_connect($server, $username, $password, $database);
  $submitted = false;
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $website = mysqli_real_escape_string($conn, $_POST['website']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  $save_info = isset($_POST['save-info']) ? 1 : 0;

  // Insert the data into the database
  $sql = "INSERT INTO comments (name, email, website, comment) VALUES ('$name', '$email', '$website', '$comment')";
  mysqli_query($conn, $sql);
     $submitted = true;
  // Set a cookie to save the user's info
  if ($save_info) {
    setcookie('name', $name, time() + (86400 * 30), "/");
    setcookie('email', $email, time() + (86400 * 30), "/");
    setcookie('website', $website, time() + (86400 * 30), "/");
  }

  // Redirect the user back to the page

  echo "<script>
  // Redirect back to the previous page
  window.history.back();
</script>";
  exit();
}
?>