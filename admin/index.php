<?php
                                    if(isset($_GET['login'])){
                                        require_once("connection.php");
                                        $username=$_GET['username'];
                                        $psw=$_GET['psw'];
                                        $table="admin";
                                        $sql="SELECT * FROM $table WHERE username LIKE '$username' AND psw LIKE '$psw'";
                                        $queryLogin=mysqli_query($con, $sql) or die ($sql);
                                        $total=mysqli_num_rows($queryLogin);
                                        if($total==1){
                                            //login
                                            if(!isset($_SESSION)){
                                                session_start();
                                            }
                                            $_SESSION['username']=$username;
                                            $fetchLogin=mysqli_fetch_assoc($queryLogin);
                                            $_SESSION['idUser']=$fetchLogin['id'];
                                            $_SESSION['username']=$fetchLogin['username'];
                                            $path="searchadmin.php";
                                        } else {
                                            //erro de login
                                            $path="?erroLogin";
                                        }
                                        header("Location:$path");
                                    }
                                    ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Hein Collective</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary" style="background: rgb(0,0,0);">
    <div class="container">
        <div class="row justify-content-center">
            <div style="padding: 70px 0; text-align: center;" class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(assets/img/hein_cover.jpg);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Staff Login</h4>
                                    </div>
                                    <form class="user">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Endereço de Email..." name="username"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="psw"></div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="login" style="background: rgb(0,0,0);">LOGIN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>