<?php
include "db_conn.php";

if (isset($_POST["submit"])) {


   $Fullname = $_POST['Fullname'];

   $Experience = $_POST['Experience'];

   $number = $_POST['number'];

   $DOB = $_POST['DOB'];

   $Qualification = $_POST['Qualification'];

   $Pincode = $_POST['Pincode'];
   $City = $_POST['City'];

   $Address = $_POST['Address'];
   $Email = $_POST['Email'];

   $job= $_POST['job'];
   $Skill = $_POST['Skill'];

   $Gender = $_POST['Gender'];
   $company = $_POST['company'];

   
   $sql = "INSERT INTO `form`(`id`, `Fullname`, `Experience`,`number`,`DOB`,`Qualification`,`Pincode`,`City`,`Address`,`Email`,`job`,`Skill`,`Gender`,`company`) VALUES (NULL,'$Fullname','$Experience','$number','$DOB','$Qualification','$Pincode','$City','$Address','$Email','$job','$Skill','$Gender','$company')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: uplodfile.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
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

   <title>IT COMPANY </title>
 
      
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
   

   a{
    text-decoration: none;

}
</style>
<body>

<header>
        <h3> JOBVISTA.IN</h3>
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
         <h3> User information
</h3>
         <p class="text-muted">Complete the form below to profile a User information
</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="POST" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Full name:</label>
                  <input type="text" class="form-control" name="Fullname" placeholder="Full name">
               </div>

               <div class="col">
                  <label class="form-label">Experience:</label>
                  <input type="text" class="form-control" name="Experience" placeholder="Experience">
               </div>
               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Mobile :</label>
                  <input type="number" class="form-control" name="number" placeholder="Mobile number">
               </div>

               <div class="col">
                  <label class="form-label">DOB:</label>
                  <input type="date" class="form-control" name="DOB" placeholder="DOB">
               </div>
               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Qualification:</labelrequired>
                  <input type="text" class="form-control" name="Qualification" placeholder="Qualification">
               </div>

               <div class="col">
                  <label class="form-label">Pincode:</label>
                  <input type="number" class="form-control" name="Pincode" placeholder="Pincode">
               </div>
               
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">City:</label>
                  <input type="text" class="form-control" name="City" placeholder="City">
               </div>

               <div class="col">
                  <label class="form-label">Address:</label>
                  <input type="text" class="form-control" name="Address" placeholder="Address">
               </div>
               
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="Email" class="form-control" name="Email" placeholder="Email">
               </div>

               <div class="col">
                  <label class="form-label">Full/part/time/job:</label>
                  <input type="text" class="form-control" name="job" placeholder="full,part,time">
               </div>
              
               
            </div>

           
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Skill:</label>
                  <input type="text" class="form-control" name="Skill" placeholder="one Language">
               </div>

               <div class="col">
                  <label class="form-label">Gender:</label>
                  <input type="text" class="form-control" name="Gender" placeholder="Gender">
               </div>

               <div class="col">
                  <label class="form-label">company name:</label>
                  <input type="text" class="form-control" name="company" placeholder="Company name">
               </div>

               
            </div>
               <button type="submit" class="btn btn-success" name="submit">Submit</button>
               <button onclick="window-print()" class="btn btn-primary">print</button>

               <a href="add-new.php" class="btn btn-danger">Cancel</a>
            
            </div>
         </form>
      </div>
   </div>



  
   <!-- Bootstrap --> 
   <script>

    
let saveBtn=document.querySelector("button")
  saveBtn.addEventListener("click",showMsg);

  function showMsg(){
   alert(" Register")
   
    alert(" Successful")

  
  }



      </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>