<?php require("establish_conn.php");        
    // 2. Perform database query
    $name=$_POST["name"];

    $summary=$_POST["summary"];

    $year=$_POST["year"];
    $actor1=$_POST["actor1"];
    $actor2=$_POST["actor2"];
    $director=$_POST["director"];
    $producer=$_POST["producer"];
    $rating=$_POST["rating"];
   // echo $year;
    $query = "INSERT INTO movie_para (name,summary,year,actor1,actor2,director,producer,ratings) VALUES ('{$name}','{$summary}','{$year}','{$actor1}','{$actor2}','{$director}','{$producer}','{$rating}')";


    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        // redirect_to("somepage.php");
        //echo "Success!";
    } else {
        // Failure
        // $message = "Subject creation failed";
        die("Database query failed. " . mysqli_error($connection));
    }
?>
<?php
$target_dir = "uploads/";
$string = str_replace(' ', '', $name);
$jpg=".jpg";
$target_file = $target_dir . $string . $jpg;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . print_r($check) . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error*/
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header("home.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Databases</title>
        <h1 style="margin-top:300;margin-left:150"><?php echo $name ?> movie is succesfully added.</h1>
        <a href="home.php"><strong>Go to Home</strong></a>

    </head>
    <body>
        
    </body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>



