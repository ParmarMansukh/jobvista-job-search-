<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {

  $file_name = $_POST['img'];
  $job_title = $_POST['job_title'];

  $C_name= $_POST['C_name'];
  $jobtype= $_POST['jobtype'];

  $employees= $_POST['employees'];
  $salary = $_POST['salary'];

  $education = $_POST['education'];
  $experience = $_POST['experience'];
  
  $L_skill= $_POST['L_skill'];
  $Qualification = $_POST['Qualification'];
  $website = $_POST['website'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $Headquarters = $_POST['Headquarters'];

  $Founded = $_POST['Founded'];
  $Locations = $_POST['Locations'];



 

 // $sql = "UPDATE `new1` SET `name`='$name',`lastname`='$lastname', WHERE id = $id";
  $sql="UPDATE `addjob` SET  `img` = '$file_name', `job_title` = '$job_title', `C_name` = '$C_name', `jobtype` = '$jobtype', `employees` = '$employees', `salary` = '$salary', `education` = '$education', `experience` = '$experience', `L_skill` = '$L_skill', `Qualification` = '$Qualification', `website` = '$website', `phone` = '$phone', `email` = '$email' , `Headquarters` = '$Headquarters', `Founded` = '$Founded', `Locations` = '$Locations'WHERE `addjob`.`id` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: jobbedit.php?msg=Data updated successfully");
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

  <title>IT COMPANY edit</title>
</head>
<style>

 
</style>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    IT Company Job Edit
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit JOB</h3>
      <p class="text-muted">Click update after changing any Job Update</p>
    </div>

    <?php
    $sql = "SELECT * FROM `addjob` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">logo:</label>
            <input type="file" class="form-control" name="img" value="<?php echo $row['img'] ?>">
          </div>

          <div class="col">
            <label class="form-label">job_title:</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $row['job_title'] ?>">
          </div>
        </div>


        
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">C_name:</label>
            <input type="text" class="form-control" name="C_name" value="<?php echo $row['C_name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">jobtype:</label>
            <input type="text" class="form-control" name="jobtype" value="<?php echo $row['jobtype'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">employees:</label>
            <input type="text" class="form-control" name="employees" value="<?php echo $row['employees'] ?>">
          </div>

          <div class="col">
            <label class="form-label">salary:</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $row['salary'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">education:</label>
            <input type="text" class="form-control" name="education" value="<?php echo $row['education'] ?>">
          </div>

          <div class="col">
            <label class="form-label">experience:</label>
            <input type="text" class="form-control" name="experience" value="<?php echo $row['experience'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">L_skill:</label>
            <input type="text" class="form-control" name="L_skill" value="<?php echo $row['L_skill'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Qualification:</label>
            <input type="text" class="form-control" name="Qualification" value="<?php echo $row['Qualification'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">website:</label>
            <input type="text" class="form-control" name="website" value="<?php echo $row['website'] ?>">
          </div>

          <div class="col">
            <label class="form-label">phone:</label>
            <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
          </div>
        </div>

        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
          </div>
        <div>



        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Headquarters:</label>
            <input type="text" class="form-control" name="Headquarters" value="<?php echo $row['Headquarters'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Founded:</label>
            <input type="text" class="form-control" name="Founded" value="<?php echo $row['Founded'] ?>">
          </div>
        </div>



        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Locations:</label>
            <input type="text" class="form-control" name="Locations" value="<?php echo $row['Locations'] ?>">
          </div>

      

          
        </div>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="jobbedit.php" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>