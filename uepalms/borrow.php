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

            <title>PALMS | Borrow</title>
            <style>
                
            </style>
        </head>

        <body>
            <div class="main-container d-flex">
                <div class="sidebar" id="side_nav">
                    <div class="header-box px-3 pt-3 pb-4 d-flex justify-content-between">
                        <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">UE</span><span class="text-white">PALMS</span></h1>
                        <button class="btn d-md-none d-block close-btn px-1 py-8 text-white"><i class="bi bi-list"></i></button>
                    </div>
                    <div class="px-2 titleNav" width="100%">Reports</div>
                    <ul class="list-unstyled px-2 pt-3">
                        <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                    </ul>
                    <div class="px-2 titleNav" width="100%">Manage</div>
                    <ul class="list-unstyled px-2 pt-3">
                        <li class=""><a href="books.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-book-half"></i> Books</a></li>
                        <li class="active"><a href="borrow.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-pass-fill"></i> Borrow</a></li>
                        <li class=""><a href="users.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person-fill-gear"></i></i> Admin</a></li>
                    </ul>
                    <div class="px-2 titleNav" width="100%">Others</div>
                    <!--<hr class="h-color mx-2">-->
                    <ul class="list-unstyled px-2 pt-3">
                        <li class=""><a href="email.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                            <span><i class="bi bi-envelope-at-fill"></i> Email</span>
                            
                        </a></li>
                        <!--<li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-gear-fill"></i> Settings</a></li>-->
                    </ul>
                </div>
                <div class="content">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between d-md-none d-block">
                            <a class="navbar-brand fs-4" href="#">PALMS</a>
                                <button class="btn px-1 py-0 open-btn"><i class="bi bi-list"></i></button>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="justify-content-start">
                            <?php 
                                date_default_timezone_set("Asia/Manila");
                                print "<center>Today is " . date('F d Y | h:i:s a ');
                            ?>
                            </div>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="logout.php" style="color: red"><i class="bi bi-power" style="color: red"></i> Logout</a>
                                </li>
                                
                            </ul>
                            
                            </div>
                        </div>
                    </nav>

                    <div class="dashboard-content px-3 pt-4">
                        <h2 class="fs-5">Borrowed Books</h2>
                            <div class="modal fade" id="addbooks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background-color: #eee;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Borrow Books</h5>
                                            
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
                                                                <option value="Borrowed">Borrowed</option>
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

                                        <form action="borrowdeletecode.php" method="POST">

                                            <div class="modal-body">

                                                <input type="hidden" name="borrow_delete_id" id="borrow_delete_id">

                                                <h4> Are you sure to delete this book? </h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancel </button>
                                                <button type="submit" name="borrowdeletedata" class="btn btn-primary"> Delete </button>
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

                                            $query = "SELECT * FROM borrow";
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
                                            $query = "SELECT * FROM `borrow` WHERE CONCAT(`borrow_book_id`,`borrow_book_name`,`borrow_book_author`,`studnum`,`studname`) LIKE '%".$valueToSearch."%'";
                                            $search_result = filterTable($query);
                                            
                                        }
                                        else {
                                            $query = "SELECT * FROM `borrow`";
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
                                        <form action="borrow.php" method="post" class="d-flex"> 
                                            <input type="text" name="valueToSearch" placeholder="Search for Book ID, Book Title, Book Author, Student Number, Student Email" class="searchForm">
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
                                                <th scope="col">Student Number</th>
                                                <th scope="col">Student Email</th>
                                                <th scope="col">Date Borrowed</th>
                                                <th scope="col">Return Date</th>
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
                                                    <td><?php echo $row['borrow_book_id'];?></td>
                                                    <td><?php echo $row['borrow_book_name'];?></td>
                                                    <td><?php echo $row['borrow_book_author'];?></td>
                                                    <td><?php echo $row['studnum'];?></td>
                                                    <td><?php echo $row['studname'];?></td>
                                                    <td><?php echo $row['date_borrowed'];?></td>
                                                    <td><?php echo $row['date_returned'];?></td>
                                                    <td>
                                                        <a class="mr-3 deletebtn" title="Delete Record" data-toggle="tooltip"><i class="bi bi-trash-fill" style="color:red"></i></a>
                                                    </td>
                                                    
                                                
                                                </tr>
                                                <?php endwhile;?>
                                            </tbody>
                                            <?php           
                                        /*}
                                    }
                                    else 
                                    {
                                        echo "No Record Found";
                                    }*/
                                ?>
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

            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

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

                        $('#borrow_delete_id').val(data[0]);

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

        </body>
    </html>