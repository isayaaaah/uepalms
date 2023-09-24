<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

            <title>PALMS | Home</title>
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
                        <li class=""><a href="borrow.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-pass-fill"></i> Borrow</a></li>
                        <li class=""><a href="users.php" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-person-fill-gear"></i></i> Admin</a></li>
                        
                    </ul>
                    <div class="px-2 titleNav" width="100%">Others</div>
                    <!--<hr class="h-color mx-2">-->
                    <ul class="list-unstyled px-2 pt-3">
                        <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
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
                    <h2 class="fs-5">Email</h2>
                    <br>
                        <form action="send.php" method="post">
                            <input type="email" name="email" placeholder="Email" class="formForm mb-4" value="" required>
                            <input type="text" name="subject" placeholder="Subject" class="formForm mb-4" value="Book Overdue" required>
                            <div class="form-floating mb-4">
                                <textarea class="formForm" placeholder="Message" name="message" value="" id="floatingTextarea2" required style="height: 200px">
Hello,<br><br>

    Just a reminder, in case you've forgotten, you have not returned the book <b>INPUT BOOK NAME HERE</b> yet as of the day of this email and the book you have borrowed from the library is overdue. Please return the book as soon as possible as there may be other people that are looking to use or borrow the book.

<br><br>Sincerely yours,<br>
Librarian<br>
(do not reply)
                                </textarea>
                                
                            </div>
                            <div class="btnAdd align-content-center">
                                <button class="btn"style="color: white;"type="submit" name="send" > Send Notice</button>
                            </div>
                            
                        </form>
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