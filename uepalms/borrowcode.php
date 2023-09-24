<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection,'id19996439_librarydb');
date_default_timezone_set("Asia/Manila");
$timeSet = date('m-d-y | h:i:sa');
if(isset($_POST['borrowdata']))
{
    $book_id = $_POST['borrow_book_id'];
    $book_name = $_POST['borrow_book_name'];
    $book_author = $_POST['borrow_book_author'];
    $studnum = $_POST['studnum'];
    $studname = $_POST['studname'];
    $date_borrowed = $_POST['date_borrowed'];
    $date_returned = $_POST['date_returned'];


    $query = "INSERT INTO borrow (`borrow_book_id`,`borrow_book_name`,`borrow_book_author`,`studnum`,`studname`,`date_borrowed`,`date_returned`) VALUES ('$book_id','$book_name','$book_author','$studnum',
    '$studname','$date_borrowed','$date_returned')";
    $query_run = mysqli_query($connection, $query);


    $queryUpdate = "UPDATE books SET book_condition='Unavailable' WHERE book_id='$book_id'";
    $query_runUpdate = mysqli_query($connection, $queryUpdate);


    if($query_run && $query_runUpdate)
    {
        echo '<script> alert("Book Borrowed"); </script>';
        echo '<script> window.location.href="books.php";</script>';
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>