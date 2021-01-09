<?php
include('../../includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload_product.php" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label> 
  <input type="text" name="name" id="name" required> <br><br>

  <label for="desc">Description:</label> 
  <input type="text" name="desc" id="desc" required><br><br>

  <label for="price">Price:</label> 
  <input type="number" name="price" id="price" required><br><br>

  <label for="cat">Category:</label> 
  <select name="cat" id="cat" required>

  <?php $sql = "SELECT * from category";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {	?>
                      

                      <option value="<?php echo htmlentities($result->category_name);?>"><?php echo htmlentities($result->category_name);?></option>



                <?php }} ?>



        


  </select><br><br>

  <label for="fileToUpload">Select image to upload:</label> 
  <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>

  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>