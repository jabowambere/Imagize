<!DOCTYPE html>
<html>
    <head>
        <title>Imagize</title>
        <link rel="stylesheet" href="image.css">
    </head>
    <body>
        <form action="database.php" method="POST">
        <div class="insert">
            <h1>Add Your Image</h1>
            <input type="text" name="img" placeholder="Image Link Address" required><br><br>
            <textarea name="de" id="de" placeholder="Image Description"></textarea><br><br>
            <input type="text" name="director" id="director" placeholder="Photographer" required>
            <input type="submit" name="submit" value="Upload">
        </div>
        </form>
       <div class="gallery">
<?php
$connection = mysqli_connect("localhost", "root", "", "image");
$query = "SELECT * FROM imaged";
$media = mysqli_query($connection, $query);
while($card = mysqli_fetch_assoc($media)){
    $ID = $card['id'];
    $image = $card['img'];
    $description = $card['de'];
    $director = $card['director'];
?>
    <div class="output">
        <div class="img">
            <img src="<?php echo mysqli_real_escape_string($connection, $image); ?>" alt="Image">
        </div>
        <div class="desc">
            <p><?php echo mysqli_real_escape_string($connection, $description); ?></p>
        </div>
        <div class="dir">
            <p><?php echo mysqli_real_escape_string($connection, $director); ?></p>
        </div>
        <div class="button">
            <a class="buttons" href="edit.php?id=<?php echo $ID?>"><button>Edit</button></a>
             <a class="buttons" href="delete.php?id=<?php echo $ID?>" onclick="return confirm('Are you sure you want to delete this person?');"><button>Delete</button></a>
        </div>
    </div>
<?php
}
?>
</div>

    </body>
</html>
