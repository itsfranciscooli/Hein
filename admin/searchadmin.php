<?php
require_once("connection.php");
require_once("auth_check.php");
$sql="SELECT * FROM projects";
$queryCat=mysqli_query($con, $sql) or die ($sql);

if(isset($_POST['registo'])){
    $name=$_POST['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sobre=$_POST['sobre'];
    $link_video==$_POST['link_vimeo'];
    $link_web==$_POST['link_web'];
    // transferir o ficheiro para uma pasta
    $sql = "INSERT INTO projects VALUES (NULL, '$name','$title','$description','$sobre', '$img', '$link_video', '$link_web')";
    mysqli_query($con, $sql)  or die ($sql);
    move_uploaded_file($tempFile,$img);
    $path="?sucesso";
    header("Location:$path");
    
}

$sql="SELECT * FROM projects";
$queryUsers=mysqli_query($con, $sql) or die ($sql);
$total=mysqli_num_rows($queryUsers);
if($total>0){
$fetch=mysqli_fetch_assoc($queryUsers);
}

if(isset($_GET['remover'])){
    $id=$_GET['id'];
    $table="projects";
    $sql="DELETE FROM $table WHERE id=$id LIMIT 1";
    mysqli_query($con, $sql)  or die ($sql);
    $path="?removido";
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

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(0,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-globe"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Hein Collective</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                       
                    <li class="nav-item"><a class="nav-link active" href="projetos.php"><i class="far fa-folder-open"></i><span>Adicionar Projetos</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="contactos.php"><i class="far fa-comment"></i><span>Contactos</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="searchadmin.php"><i class="fa fa-search"></i><span>Pesquisar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.heincollective.com"><i class="far fa-window-maximize"></i><span>Website</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background: rgb(17,17,17) !important;">
                    <div class="container-fluid"></div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Pesquisa</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-5">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold" style="color: rgb(0,0,0) !important;">Tabela</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                        <table class="table my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Imagem</th>
                                                    <th>Nome</th>
                                                    <th>Titulo</th>
                                                    <th>Descrição</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; do { $i++;?>
                                                <tr>
                                                    <td><a href="<?php echo $fetch['img'];?>"><img class="rounded img-fluid" width="200" height="200" src="<?php echo $fetch['img'];?>"></a></td>
                                                    <td><?php echo $fetch['name'];?></td>
                                                    <td><?php echo $fetch['title'];?></td>
                                                    <td><?php echo $fetch['description'];?></td>
                                                    <td><a style='color:Red' href="?remover&id=<?php echo $fetch['id'];?>">Remover</a></td>
                                                </tr>
                                                <?php } while($fetch=mysqli_fetch_assoc($queryUsers));?>
                                            </tbody>
                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Hein Collective 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>