

<?php
  


  
  if(isset($_FILES['img'])){
    $file_name=$_FILES['img']['name'];
    $file_size=$_FILES['img']['size'];
    $file_tmp=$_FILES['img']['tmp_name'];
    $file_type=$_FILES['img']['type'];
   
   (move_uploaded_file($file_tmp,"uplod/".$file_name));
  }
  
  
  if(isset($_POST['job_title'])){
   $job_title = $_POST['job_title'];
 }
  

 if(isset($_POST['C_name'])){
   $C_name = $_POST['C_name'];
 }
 if(isset($_POST['jobtype'])){
   $jobtype = $_POST['jobtype'];
 }
 if(isset($_POST['employees'])){
   $employees = $_POST['employees'];
 }
 if(isset($_POST['salary'])){
   $salary = $_POST['salary'];
 }
 if(isset($_POST['education'])){
   $education = $_POST['education'];
 }

 if(isset($_POST['experience'])){
   $experience = $_POST['experience'];
 }

 if(isset($_POST['L_skill'])){
   $L_skill = $_POST['L_skill'];
 }

 if(isset($_POST['Qualification'])){
   $Qualification = $_POST['Qualification'];
 }

 if(isset($_POST['website'])){
   $website = $_POST['website'];
 }

 if(isset($_POST['phone'])){
   $phone = $_POST['phone'];
 }

 if(isset($_POST['email'])){
   $email = $_POST['email'];
 }

 if(isset($_POST['Headquarters'])){
   $Headquarters = $_POST['Headquarters'];
 }

 if(isset($_POST['Founded'])){
   $Founded = $_POST['Founded'];
 }
 if(isset($_POST['Locations'])){
   $Locations = $_POST['Locations'];
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
      // $sql="INSERT INTO `employee` ( `img`, `description`) VALUES ( '$name', '$file_name', '$description')";
     
     
     $sql="INSERT INTO `addjob` ( `img`, `job_title`, `C_name`, `jobtype`, `employees`, `salary`, `education`, `experience`, `L_skill`, `Qualification`, `website`, `phone`, `email`, `Headquarters`, `Founded`, `Locations`) VALUES ( '$file_name', '$job_title', '$C_name', '$jobtype', '$employees', '$salary', '$education', '$experience', '$L_skill', '$Qualification', '$website', '$phone', '$email', '$Headquarters', '$Founded', '$Locations')";
      $result = mysqli_query($conn,$sql);
    }
  
  ?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Jobvista.in </title>
 
      
</head>
 <style>

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
   width: 100%;

}

h1{

  margin-left:-175px ; 
  
}

nav {
    display: flex;
    justify-content: center;
    background-color: #710202b5;
  
    padding: 10px 0;

}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 100px;
  
    
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffcc00;
}
   table{

    margin-left:25px ; 
    margin-top:30px;
    border:5px solid red;

   }

   a{
    text-decoration: none;

}


 </style>
<body>
   
<header>
        <h3> Company information</h3>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="index.php">Jobs</a></li>
            
            </ul>
        </nav>
    </header>

   <div class="container">
      <div class="text-center mb-4">
         <h3> Company information
</h3>
         <p class="text-muted">Complete the form below to Company information
</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;"  enctype="multipart/form-data">
            <div class="row mb-3">


            <div class="col">
                  <label class="form-label">logo:</label>
                  <input type="file" class="form-control" name="img" >
               </div>




               <div class="col">
                  <label class="form-label">job_title:</label>
                  <input type="text" class="form-control" name="job_title" placeholder="job_title">
               </div>

               <div class="col">
                  <label class="form-label">C_name:</label>
                  <input type="text" class="form-control" name="C_name" placeholder="C_name">
               </div>
               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">jobtype :</label>
                  <input type="text" class="form-control" name="jobtype" placeholder="jobtype">
               </div>

               <div class="col">
                  <label class="form-label">employees:</label>
                  <input type="text" class="form-control" name="employees" placeholder="employees">
               </div>
               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">salary:</label>
                  <input type="text" class="form-control" name="salary" placeholder="salary">
               </div>

               <div class="col">
                  <label class="form-label">education:</label>
                  <input type="text" class="form-control" name="education" placeholder="education">
               </div>
               
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">experience:</label>
                  <input type="text" class="form-control" name="experience" placeholder="experience">
               </div>

               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">L_skill:</label>
                  <input type="text" class="form-control" name="L_skill" placeholder="L_skill">
               </div>

               <div class="col">
                  <label class="form-label">Qualification:</label>
                  <input type="text" class="form-control" name="Qualification" placeholder="Qualification">
               </div>
              
               
            </div>

           
            <div class="row mb-3">
           

               <div class="col">
                  <label class="form-label">website:</label>
                  <input type="text" class="form-control" name="website" placeholder="website:">
               </div>

               <div class="row mb-3">
               <div class="col">
                  <label class="form-label">phone:</label>
                  <input type="number" class="form-control" name="phone" placeholder="phone">
               </div>

               <div class="col">
                  <label class="form-label">email:</label>
                  <input type="email" class="form-control" name="email" placeholder="email">
               </div>
               
            </div>


            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Headquarters:</label>
                  <input type="text" class="form-control" name="Headquarters" placeholder="Headquarters">
               </div>

               <div class="col">
                  <label class="form-label">Founded:</label>
                  <input type="text" class="form-control" name="Founded" placeholder="Founded">
               </div>

               
             
               
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Locations:</label>
                  <input type="text" class="form-control" name="Locations" placeholder="Locations">
               </div>

             
               
            </div>
               
               
            </div>
               <button type="submit" class="btn btn-success" name="submit">Submit</button>
              
              <!-- <button onclick="window-print()" class="btn btn-primary">print</button> -->

               <a href="add-new.php" class="btn btn-danger">Cancel</a>
               <a href="check.php" class="btn btn-danger">Back</a>

            
            </div>
         </form>
      </div>
   </div>



  
   <!-- Bootstrap -->
 

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>