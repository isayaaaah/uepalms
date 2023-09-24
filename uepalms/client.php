<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

            <title>PALMS | Client</title>
            <style>
                .instruc{
                    
                }
            </style>
        </head>

        <body>
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <img src="images/logo-white.png"class="img-fluid fa-2x me-3" style="height: 40px;" alt="Sample image">
                    <h3 style="color: white;" class="pt-2">University of the East | Practical Academic Library Management System</h3>
                    </div>
                </div>
                </nav>
                    <div class="dashboard-content px-3 pt-4">
                        

                        <h2 class="fs-5"></h2>
                            <div class="modal fade" id="addbooks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background-color: #eee;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
                                            
                                        </div>

                                        <form action="insertcode.php" method="POST">

                                            <div class="modal-body">

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book ID</label>
                                                        <input class="formForm" type=text maxlength="30" name=book_id style="text-transform:uppercase" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Name</label>
                                                        <input class="formForm" type=text name=book_name maxlength = "50" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Author</label>
                                                        <input class="formForm" type=text name=book_author required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Date Published</label>
                                                        <input class="formForm" type=date name=date_published required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Genre</label>
                                                            <select name=book_genre  class="formForm" required>
                                                                <option value="">--</option>
                                                                <option value="Textbook">Textbook</option>
                                                                <option value="Fiction">Fiction</option>
                                                                <option value="History">History</option>
                                                                <option value="Mythology">Mythology</option>
                                                                <option value="Poetry">Poetry</option>
                                                                <option value="Thriller">Thriller</option>
                                                                <option value="Romance">Romance</option>
                                                                <option value="Young Adult">Young Adult</option>
                                                                <option value="Fantasy">Fantasy</option>
                                                                <option value="Biography / Auto-biography">Biography / Auto-biography</option>
                                                                <option value="Action">Action</option>
                                                                <option value="Historical Fantasy">Historical Fantasy</option>
                                                            </select> 
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Condition</label>
                                                            <select name=book_condition  class="formForm" required>
                                                                <option value="">--</option>
                                                                <option value="Available">Available</option>
                                                                <option value="Not Available">Not Available</option>
                                                            </select> 
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="insertdata" class="btn btn-primary">Add Book</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- BORROW POP UP FORM (Bootstrap MODAL) -->
                            <div class="modal fade" id="borrowmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background-color: #eee;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Borrow Book </h5>
                                            
                                        </div>

                                        <form action="borrowcodeclient.php" method="POST">

                                            <div class="modal-body">

                                                    <input type="hidden" name="borrow_book_id" id="borrow_book_id">


                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Name</label>
                                                        <input class="formForm" type=text name="borrow_book_name" id="borrow_book_name" maxlength = "50" onkeydown="return false;" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Author</label>
                                                        <input class="formForm" type=text name="borrow_book_author" id="borrow_book_author" onkeydown="return false;" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Student Number</label>
                                                        <input class="formForm" type=number name="studnum" id="studnum" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Student Email</label>
                                                        <input class="formForm" type=email name="studname" id="studname" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Date Borrowed</label>
                                                        
                                                        <?php 
                                                        date_default_timezone_set("Asia/Manila");
                                                        $timeSetClient = date("Y-m-d");?>

                                                        <input class="formForm" type=date name="date_borrowed" id="date_borrowed" min="<?php print $timeSetClient?>" max="<?php print $timeSetClient?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Date Returned</label>
                                                        <?php $timeMaxClient = strtotime("+7 day"); ?>
                                                        <input class="formForm" type=date name="date_returned" id="date_returned" min="<?php print $timeSetClient?>" max="<?php print date("Y-m-d",$timeMaxClient);?>" required>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="borrowdata" class="btn btn-primary">Borrow Book</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background-color: #eee;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Edit Book Information </h5>
                                            
                                        </div>

                                        <form action="updatecode.php" method="POST">

                                            <div class="modal-body">

                                                    <input type="hidden" name="book_id" id="book_id">

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Name</label>
                                                        <input class="formForm" type=text name="book_name" id="book_name" maxlength = "50" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Author</label>
                                                        <input class="formForm" type=text name="book_author" id="book_author" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Date Published</label>
                                                        <input class="formForm" type=date name="date_published" id="date_published" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Book Genre</label>
                                                            <select name="book_genre" id="book_genre" class="formForm" required>
                                                                <option value="">--</option>
                                                                <option value="Textbook">Textbook</option>
                                                                <option value="Fiction">Fiction</option>
                                                                <option value="History">History</option>
                                                                <option value="Mythology">Mythology</option>
                                                                <option value="Poetry">Poetry</option>
                                                                <option value="Thriller">Thriller</option>
                                                                <option value="Romance">Romance</option>
                                                                <option value="Young Adult">Young Adult</option>
                                                                <option value="Fantasy">Fantasy</option>
                                                                <option value="Biography / Auto-biography">Biography / Auto-biography</option>
                                                                <option value="Action">Action</option>
                                                                <option value="Historical Fantasy">Historical Fantasy</option>
                                                            </select> 
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-form-label">Condition</label>
                                                            <select name="book_condition" id="book_condition" class="formForm" required>
                                                                <option value="">--</option>
                                                                <option value="Available">Available</option>
                                                                <option value="Not Available">Not Available</option>
                                                            </select> 
                                                    </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
                            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Delete Book </h5>
                                            
                                        </div>

                                        <form action="deletecode.php" method="POST">

                                            <div class="modal-body">

                                                <input type="hidden" name="delete_id" id="delete_id">

                                                <h4> Are you sure to delete this book? </h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancel </button>
                                                <button type="submit" name="deletedata" class="btn btn-primary"> Delete </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                             
                            <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="deletecode.php" method="POST">

                                            <div class="modal-body">

                                                <input type="text" name="view_id" id="view_id">

                                                 <!-- <p id="fname"> </p> -->
                                                <h4 id="fname">  <?php echo ''; ?></h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                                               <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div>
                                    <div>
                                        <?php
                                            $connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
                                            $db = mysqli_select_db($connection, 'id19996439_librarydb');

                                            $query = "SELECT * FROM books";
                                            $query_run = mysqli_query($connection, $query);
                                        ?>
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                        <?php

                                        if(isset($_POST['search']))
                                        {
                                            $valueToSearch = $_POST['valueToSearch'];
                                            // search in all table columns
                                            // using concat mysql function
                                            $query = "SELECT * FROM `books` WHERE book_condition='Available' AND CONCAT(`book_id`,`book_name`,`book_author`,`book_genre`,`book_condition`) LIKE '%".$valueToSearch."%'";
                                            $search_result = filterTable($query);
                                            
                                        }
                                        else {
                                            $query = "SELECT * FROM `books` WHERE book_condition='Available'";
                                            $search_result = filterTable($query);
                                        }
                                        
                                        // function to connect and execute the query
                                        function filterTable($query)
                                        {
                                            $connect = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!","id19996439_librarydb");
                                            $filter_Result = mysqli_query($connect, $query);
                                            return $filter_Result;
                                        }
                                        
                                        ?>
                                        
                                        <div>
                                        <br>

                        
                                        <div style="height: 10px;"></div>
                                        <div class="row">
                                        <p class="instruc">
                                            <b>BORROW A BOOK IN JUST 3 STEPS:</b> <i><br>(1) Pick your wanted book from the library.<br>
                                            (2) Search and borrow by clicking the icon in the right.<br>
                                            (3) Once you done filling up the form, go to the admin desk to confirm your borrow book.<br><br></i>
                                        </p>
                                        </div>
                                        <form action="client.php" method="post" class="d-flex"> 
                                            <input type="text" name="valueToSearch" placeholder="Search for Book ID, Book Title, Book Author, and Book Genre" class="searchForm">
                                            <button class="searchBtn shadow-none" type="submit" name="search" ><i class="bi bi-search"></i></button>
                                        </form>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">

                                    <table id="datatableid" class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Book ID</th>
                                                <th scope="col">Book Title</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Date Published</th>
                                                <th scope="col">Genre</th>
                                                <th scope="col">Condition</th>
                                                <th scope="col">Action</th>
                                            
                                                </tr>
                                            </thead>
                                            
                                            <?php
                                            /*if($query_run)
                                            {
                                                foreach($query_run as $row)
                                                {**/
                                            ?>
                                            <tbody>
                                                <?php while($row = mysqli_fetch_array($search_result)):?>
                                                <tr>
                                                    <td><?php echo $row['book_id'];?></td>
                                                    <td><?php echo $row['book_name'];?></td>
                                                    <td><?php echo $row['book_author'];?></td>
                                                    <td><?php echo $row['date_published'];?></td>
                                                    <td><?php echo $row['book_genre'];?></td>
                                                    <td><?php echo $row['book_condition'];?></td>
                                                    <td>
                                                        <a data-toggle="modal" class="mr-3 borrowbtn" title="Borrow Book" data-toggle="tooltip" ><i class="bi bi-clipboard2-plus-fill" style="color:blue"></i></a>
                                                        
                                                    </td>
                                                
                                                </tr>
                                                <?php endwhile;?>
                                            </tbody>
                                            
                                        </table>
                                        
                                        <br><br>
                                    </div>
                                </div>
                                        
                                    </div>
                                </div>

                        </div>
                        
                    </div>
                    
                </div>
            </div>


        

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

            <script>
                $(".sidebar ul li").on('click',function(){
                    $(".sidebar ul li.active").removeClass('active');
                    $(this).addClass("active");
                    
                });
                $('.open-btn').on('click', function(){
                        $('.sidebar').addClass('active');
                    });

                $('.close-btn').on('click', function(){
                        $('.sidebar').removeClass('active');
                    })
            </script>
            <script>
                $(document).ready(function () {

                    $('.viewbtn').on('click', function () {
                        $('#viewmodal').modal('show');
                        $.ajax({ //create an ajax request to display.php
                            type: "GET",
                            url: "display.php",
                            dataType: "html", //expect html to be returned                
                            success: function (response) {
                                $("#responsecontainer").html(response);
                                //alert(response);
                            }
                        });
                    });

                });
            </script>

            <script>
                $(document).ready(function () {

                    $('.deletebtn').on('click', function () {

                        $('#deletemodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);

                        $('#delete_id').val(data[0]);

                    });
                });
            </script>

            <script>
                $(document).ready(function () {

                    $('.editbtn').on('click', function () {

                        $('#editmodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);

                        $('#book_id').val(data[0]);
                        $('#book_name').val(data[1]);
                        $('#book_author').val(data[2]);
                        $('#date_published').val(data[3]);
                        $('#book_genre').val(data[4]);
                        $('#book_condition').val(data[5]);
                    
                    });
                });
            </script>

            <script>
                $(document).ready(function () {

                    $('.borrowbtn').on('click', function () {

                        $('#borrowmodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function () {
                            return $(this).text();
                        }).get();

                        console.log(data);

                        $('#borrow_book_id').val(data[0]);
                        $('#borrow_book_name').val(data[1]);
                        $('#borrow_book_author').val(data[2]);
                        
                    });
                });
            </script>
                    
        </body>
    </html>