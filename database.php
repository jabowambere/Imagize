<?php
$server="localhost";
$username="root";
$password= "";
$database= "image";
$connection=mysqli_connect($server, $username, $password, $database);
if(isset($_POST["submit"])){
    $image=$_POST["img"];
    $description=$_POST["de"];
    $photographer=$_POST["director"];
    $query="INSERT  INTO imaged(img, de, director)VALUES('$image', '$description', '$photographer')";
    mysqli_query($connection, $query);
    header("location:index.php");
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $image=$_POST['img'];
    $description=$_POST['de'];
    $director=$_POST['director'];
    $query="UPDATE authentication SET img='$image', de='$description',director='$director' WHERE id=$id";
    mysqli_query($connection, $query);
    header("location: index.php");
}
 ?> 
