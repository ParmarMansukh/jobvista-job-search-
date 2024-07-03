
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
   
</head>
<body>
   


  <?php
  



if(isset($_POST['name'])){
  $name = $_POST['name'];
}

if(isset($_FILES['img'])){
  $file_name=$_FILES['img']['name'];
  $file_size=$_FILES['img']['size'];
  $file_tmp=$_FILES['img']['tmp_name'];
  $file_type=$_FILES['img']['type'];
 
 (move_uploaded_file($file_tmp,"countrys/".$file_name));
}


if(isset($_POST['description'])){
    $description = $_POST['description'];
  }


$sn = "localhost";
$un = "root";
$ps = "";
$dbname = "database";

 $conn = mysqli_connect($sn,$un,$ps,$dbname);



  if(!$conn){
   die("something want wrong".mysqli_connect_error());
   }
   else{
   // $sql = "INSERT INTO `satish` (`name`,`title`,`img`) VALUES ('$name','$title','$file_name')";
    $sql="INSERT INTO `employee` ( `name`, `img`, `description`) VALUES ( '$name', '$file_name', '$description')";
    $result = mysqli_query($conn,$sql);
  }

?>





      <form action="employee.php" method="post" enctype="multipart/form-data">
      
      <input type="text" name="name" required> <br>
      <input type="file" name="img" required> <br>
       <textarea name="description" id="" cols="30" rows="10" required></textarea> <br>
       <input type="submit" value="submit">
</form>

<!-- <form action="" method="post" enctype="multipart/form-data">
  <div class="inbox">
    select video to upload
  <label class="in" for="intag">
    brows
      <input class="ins" type="file" name="" id="intag">
  </label>
    <input class="sub" type="submit" value="upload">
  </div>
</form>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="inbox">
    select audieo to upload
  <label class="in" for="intag">
    brows
      <input class="ins" type="file" name="" id="intag">
  </label>
    <input class="sub" type="submit" value="upload">
  </div>
</form> -->
     
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>