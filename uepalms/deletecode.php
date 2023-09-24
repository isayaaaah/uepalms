<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection, 'id19996439_librarydb');

if(isset($_POST['deletedata']))
{
    $book_id = $_POST['delete_id'];

    $query = "DELETE FROM books WHERE book_id='$book_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Book Deleted"); </script>';
        echo '<script> window.location.href="books.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>