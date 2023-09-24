<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection,'id19996439_librarydb');
date_default_timezone_set("Asia/Manila");
$timeSet = date('m-d-y | h:i:sa');
if(isset($_POST['insertdata']))
{
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $date_published = $_POST['date_published'];
    $book_genre = $_POST['book_genre'];
    $book_condition= $_POST['book_condition'];

    $query = "INSERT INTO books (`book_id`,`book_name`,`book_author`,`date_published`,`book_genre`,`book_condition`) VALUES ('$book_id','$book_name','$book_author','$date_published','$book_genre','$book_condition')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Book Added"); </script>';
        echo '<script> window.location.href="books.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>