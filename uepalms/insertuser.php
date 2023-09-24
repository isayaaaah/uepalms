<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection,'id19996439_librarydb');
date_default_timezone_set("Asia/Manila");
$timeSet = date('m-d-y');
if(isset($_POST['insertuser']))
{
    $username= $_POST['username'];
    $passwords= $_POST['passwords'];
    $time_added = $timeSet;
    

    $query = "INSERT INTO user (`username`,`passwords`,`time_added`) VALUES ('$username','$passwords','$time_added')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Admin Added"); </script>';
        echo '<script> window.location.href="users.php";</script>';
    }
    else
    {
        echo '<script> alert("Admin Unable to Add"); </script>';
    }
}
?>