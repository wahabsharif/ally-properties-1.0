<?php
$server = "localhost";
$username = "ally_ally";
$password = "ally_allyproperties";
$database = "ally_ally";

$conn = mysqli_connect($server, $username, $password, $database);
$id=$_GET['id'];
$del = "DELETE FROM `projects` WHERE `id` = '$id'";
$data=mysqli_query($conn,$del);
if ($del)
{
    echo "<script type='text/javascript'>window.top.location='https://allyproperties.pk/admin-panel/pages/project/project.php';</script>";
}
else
{
echo "not deleted";

}
?>
