<?php
            session_start();
                $conn = mysqli_connect('localhost','id19996439_uepalmsdb','Password123456!','id19996439_librarydb') or die ('Unable to Connect');
                    if(isset($_POST['login'])){
                        $username = $_POST['username'];
                        $passwords = $_POST['passwords'];
                    $select = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND passwords='$passwords'");
                    $row = mysqli_fetch_array($select);
                    if(is_array($row)){
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["passwords"] = $row["passwords"];
                    } else {
                        echo '<script type = "text/javascript">';
                        echo 'alert("Invalid Username or Password");';
                        echo 'window.location.href = "login.php"';
                        echo '</script>';
                    }
                    }
                    if(isset($_SESSION["username"])){
                        header("location:index.php");}?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="shortcut icon" href="images/favicon.ico">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
>
            

            <title>PALMS | Login</title>
            <style>
                .marginBot{
                    margin-bottom: 50px;
                }
                .divider:after,
                .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
                }
                .h-custom {
                height: calc(100% - 72px);
                }
                @media (max-width: 450px) {
                .h-custom {
                height: 100%;
                }
                }
            </style>
        </head>

        <body>
        <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 d-none d-sm-block">
                <img src="images/bg.jpg"class="img-fluid " alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="login.php" method="post" >
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="images/logo.png"class="img-fluid fa-2x me-3" style="height: 40px;" alt="Sample image">
                        
                        <span class="h1 fw-bold mb-0">PALMS</span>
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-group mb-3">
                    <label class="col-form-label">Username</label>
                    <input class="formForm" type=text maxlength="30" name=username  autofocus required >
                 </div>
                
                 <!-- Password input -->
                 <div class="form-group mb-3">
                    <label class="col-form-label">Password</label>
                    <input class="formForm" type=password maxlength="30" name=passwords  required>
                 </div>


                <div class="d-flex justify-content-between align-items-center">
                    
                </div>

            
                <button class="btn mt-4 btnAdd" style="color: white;" name="login" value="Login" >Login</button>        
                

                </form>
                
            </div>

            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 " style="background-color:#212121">
            <!-- Copyright -->
            <div class="text-white">
            Copyright © 2022 by Practical Academic Library Management System. All rights reserved.
            </div>
            <!-- Copyright -->
        </div>
        </section>   
        </body>
    </html>