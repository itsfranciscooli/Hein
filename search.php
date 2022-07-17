<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="https://use.typekit.net/bny3vma.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hein Collective</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"><a href="/"><img class="logo" src="assets/img/branding/hein_black.png" width="" style="margin-top: 8px;" alt="Hein"></a></div>
            <div class="col-md-6 align-self-center" style="text-align: right;"><i class="fa fa-search" style="color: black;"></i> 

<?php 
    include 'php_functions.php';
    echo search_bar();
?>
<a class="about-black" href="/about-us"><h1 style="font-size: 30px;">ABOUT US</h1></a>
</div>

<?php
    require_once("connection.php");
    $sql="SELECT * FROM projects";

    if (isset($_GET["search_box"])) {
        $field = "\"" . $_GET["search_box"]. "\"";
        $sql = "SELECT * From projects WHERE (language LIKE ".$field." OR year LIKE ".$field." OR name LIKE ".$field.")";
        $query=mysqli_query($con, $sql) or die($sql);
        while ($row = mysqli_fetch_assoc($query))
        {
            $name = $row['name'];
            $year = $row['year'];
            $duration = $row['duration'];
            $director = $row['director'];
            $operator = $row['operator'];
            $language = $row['language'];
            $category = $row['category'];
            $image = $row['thumbnail'];
        ?>
            <div class="container" style="margin-top: 35px;">
            <div class="row">
                <div class="col-md-6 text-end align-self-center"><img src=<?php echo $image ?> width="50%" style="border-radius: 114px;"></div>
                <div class="col-md-6 align-self-center">
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;font-weight: 400;font-weight: 400;">Title: <?php echo $name ?><br></h1>
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;">Duration: <?php echo $duration ?></h1>
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;">Director: <?php echo $director ?></h1>
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;">Year: <?php echo $year ?></h1>
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;">Language: <?php echo $language ?></h1>
                    <h1 class="fw-bold" style="font-size: 19.88px;font-family: aktiv-grotesk, sans-serif;">Category: <?php echo $category ?></h1>
                </div>
            </div>
            </div>
        <?php
        }      
    }
?>



  



    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>