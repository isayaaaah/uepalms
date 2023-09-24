<?php
$connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
$db = mysqli_select_db($connection, 'id19996439_librarydb');

    if(isset($_POST['updatedata']))
    {   
        $book_id = $_POST['book_id'];

        $book_name = $_POST['book_name'];
        $book_author = $_POST['book_author'];
        $date_published = $_POST['date_published'];
        $book_genre = $_POST['book_genre'];
        $book_condition= $_POST['book_condition'];


        $query = "UPDATE books SET book_name='$book_name', book_author='$book_author', date_published='$date_published', book_genre='$book_genre', 
                                    book_condition='$book_condition' WHERE book_id='$book_id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Book Information Updated"); </script>';
            echo '<script> window.location.href="books.php";</script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
