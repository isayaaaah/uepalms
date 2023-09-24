<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico">
            <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
            <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
            <link rel="manifest" href="/site.webmanifest">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

            <title>PALMS | Home</title>
            <style>
                .amountBooks{
    margin-bottom: 5px;
    font-size: 55px;
    font-weight: bold;
}
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
                        <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door-fill"></i> Dashboard</a></li>
                    </ul>
                    <div class="px-2 titleNav" width="100%">Manage</div>
                    <ul class="list-unstyled px-2 pt-3">
                        <li class=""><a href="books.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-book-half"></i> Books</a></li>
                        <li class=""><a href="borrow.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-pass-fill"></i> Borrow</a></li>
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
                        <h2 class="fs-5">Dashboard</h2>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="dashboardBooks" >
                                    <div class="">Total Books</div>
                                    <?php
                                        try{
                                            $pdoConnect = new PDO("mysql:host=localhost;dbname=id19996439_librarydb","id19996439_uepalmsdb","Password123456!");
                                        }catch(PDOException $ex){
                                            echo $ex->getMessage();
                                            exit();
                                        }

                                        $pdoQuery = "SELECT * from books";
                                        $pdoResult = $pdoConnect->query($pdoQuery);
                                        $pdoRowCount = $pdoResult->rowCount();

                                        $pdoQueryBorrow = "SELECT * from borrow";
                                        $pdoResultBorrow = $pdoConnect->query($pdoQueryBorrow);
                                        $pdoRowCountBorrow = $pdoResultBorrow->rowCount();

                                        $pdoQueryAvail = "SELECT * from books WHERE book_condition='Available' ";
                                        $pdoResultAvail = $pdoConnect->query($pdoQueryAvail);
                                        $pdoRowCountAvail = $pdoResultAvail->rowCount();

                                        $pdoQueryNotAvail = "SELECT * from books WHERE book_condition='Unavailable' ";
                                        $pdoResultNotAvail  = $pdoConnect->query($pdoQueryNotAvail );
                                        $pdoRowCountNotAvail  = $pdoResultNotAvail ->rowCount();

                                    ?> 
                                    <div class="amountBooks"><?php echo $pdoRowCount?></div> 
                                    <div class="updatedBooks"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="dashboardBooks">
                                    <div>Borrowed Books</div>
                                    <div class="amountBooks"><?php echo $pdoRowCountBorrow?></div> 
                                    <div class="updatedBooks"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="dashboardBooks">
                                    <div>Available Books</div>
                                    <div class="amountBooks"><?php echo $pdoRowCountAvail?></div> 
                                    <div class="updatedBooks"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="dashboardBooks">
                                    <div>Unavailable Books</div>
                                    <div class="amountBooks"><?php echo $pdoRowCountNotAvail?></div> 
                                    <div class="updatedBooks"></div>
                                </div>
                            </div>
                        </div>


                        
                        <div class="row">
                        <div class="container">
                                <div>
                                    <div>
                                        <?php
                                            $connection = mysqli_connect("localhost","id19996439_uepalmsdb","Password123456!");
                                            $db = mysqli_select_db($connection, 'id19996439_librarydb');

                                            $query = "SELECT borrow_book_name, studname, date_returned FROM borrow";
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
                                            $query = "SELECT * FROM `borrow` WHERE CONCAT(`book_id`,`book_name`,`book_author`,`book_genre`,`book_condition`) LIKE '%".$valueToSearch."%'";
                                            $search_result = filterTable($query);
                                            
                                        }
                                        else {
                                            $query = "SELECT borrow_book_name, studname, date_returned FROM borrow";
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
                                            <h5 class="">Due Books</h5>

                                        
                                        <div style="height: 10px;"></div>
                                        
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">
                                    <table id="datatableid" class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Book Title</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Return Date</th>

                                                
                                            
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
                                                    <td><?php echo $row['borrow_book_name'];?></td>
                                                    <td><?php echo $row['studname'];?></td>
                                                    <td><?php echo $row['date_returned'];?></td>

                                                    
                                                
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

        </body>
    </html>