


      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
  
    
</head>

<style>
body{
    padding:50px;
    background-image: url('IT home/hedrabadu.png');
    background-size: cover;
    background-repeat: no-repeat;
    height:800px;
}
body{
    padding:50px;
   
}
.container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(13, 13, 224, 0.2) 0px 7px 29px 0px;



}

.form-group{
    margin-bottom:30px;
}
.container{
    max-width: 600px;
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(13, 13, 224, 0.2) 0px 7px 29px 0px;
    background-color: white;
    border-top: 3px solid red;
    border-bottom: 3px solid rgba(0, 4, 255, 0.87);
    border-right: 3px solid rgb(230, 0, 191);
    border-left: 3px solid rgb(246, 250, 6);
    border-radius: 12px;
   box-shadow: 0 0 50px rgb(253, 16, 182);
    

}
.container:hover{
   box-shadow: 0 0 50px rgb(245, 21, 21);


}
a{
    text-decoration: none;

}
h4{
    text-align: center;

}
</style>
<body>
    <div class="container">
               <h4>employee biodata</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="img" placeholder="employee biodata:">
            </div>
            <div class="form-group">
                <label for="Description">Description</label> <br>
        <textarea name="description" id="" cols="60" rows="6"  > </textarea>
            
            </div>
          
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="submit" name="submit">
               <button onclick="window-print()" class="btn btn-primary">print</button>
    <a href="index.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">home</a>

                
            </div>
</div>
        </form>
        <div>
        

        

      </div>
    </div>


    <script>

    
let SubmitBtn=document.querySelector("button")
SubmitBtn.addEventListener("click",showMsg);

  function showMsg(){
   alert(" Massage Send")
   
    alert(" Successful")

  
  }



      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>




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
    //$sql="INSERT INTO `employee` ( `name`, `img`, `description`) VALUES ( '$name', '$file_name', '$description')";
   
 //  $sql="INSERT INTO `employee` (`id`, `name`, `img`, `description`) VALUES (NULL, '$name', '$file_name', '$description')";
   $sql="INSERT INTO `employee` (`id`, `name`, `img`, `description`) VALUES (NULL, '$name', '$file_name', '$description')";
   
   $result = mysqli_query($conn,$sql);
  }

?>