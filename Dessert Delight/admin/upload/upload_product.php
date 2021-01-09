<?php
include('../../includes/config.php');
?>


<?php
$target_dir = "../../assets/product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

  $name=$_POST['name'];
  $price=$_POST['price'];
  $desc=$_POST['desc'];
  $cat=$_POST['cat'];
  $purchase=0;
  

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }



















// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" && $imageFileType != "jfif") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $img = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    echo "The file ". $img. " has been uploaded.";


    $sql="INSERT INTO `product`(`name`, `img`, `price`, `description`, `purchases`, `category_name`) VALUES (:name,:img,:price,:desc,:purchase,:cat)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':img',$img,PDO::PARAM_STR);
    $query->bindParam(':price',$price,PDO::PARAM_STR);
    $query->bindParam(':desc',$desc,PDO::PARAM_STR);
    $query->bindParam(':purchase',$purchase,PDO::PARAM_STR);
    $query->bindParam(':cat',$cat,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();



  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}




}
?>