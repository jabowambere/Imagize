<?php
$server="localhost";
$username="root";
$password="";
$database="first project";
$connection=mysqli_connect($server, $username, $password, $database);
$id=$_GET['id'];
$query="SELECT * FROM authentication WHERE id='$id'";
$go=mysqli_query($connection, $query);
$r=mysqli_fetch_assoc($go);
if(!isset($_GET['id'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="image.css">
    </head>
    <body>
        <form action="database.php" method="POST">
        <div class="insert">
            <h1>Add Your Image</h1>
            <input type="text" value=<?=$r['img']?> name="img" placeholder="Image Link Address" required><br><br>
            <textarea name="de" value=<?=$r['de']?> id="de" placeholder="Image Description"></textarea><br><br>
            <input type="text" value=<?=$r['dir']?> name="director" id="director" placeholder="Photographer" required>
            <input type="submit" name="update" value="Update">
        </div>
        </form>
    </body>
</html>
