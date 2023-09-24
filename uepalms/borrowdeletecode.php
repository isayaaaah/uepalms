<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection, 'id19996439_librarydb');

if(isset($_POST['borrowdeletedata']))
{
    $book_id = $_POST['borrow_delete_id'];

    $query = "DELETE FROM borrow WHERE borrow_book_id='$book_id'";
    $query_run = mysqli_query($connection, $query);

    $queryUpdate = "UPDATE books SET book_condition='Available' WHERE book_id='$book_id'";
    $query_runUpdate = mysqli_query($connection, $queryUpdate);

    if($query_run && $query_runUpdate)
    {
        echo '<script> alert("Student Borrowed Book Deleted"); </script>';
        echo '<script> window.location.href="borrow.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>