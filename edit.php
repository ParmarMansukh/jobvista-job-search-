<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {

  $Fullname = $_POST['Fullname'];
  $Experience = $_POST['Experience'];

  $number= $_POST['number'];
  $DOB = $_POST['DOB'];

  $Qualification= $_POST['Qualification'];
  $Pincode = $_POST['Pincode'];

  $City = $_POST['City'];
  $Address = $_POST['Address'];
  
  $Email= $_POST['Email'];
  $job = $_POST['job'];
  $Skill = $_POST['Skill'];
  $Gender = $_POST['Gender'];

 

 // $sql = "UPDATE `new1` SET `name`='$name',`lastname`='$lastname', WHERE id = $id";
  $sql="UPDATE `form` SET  `Fullname` = '$Fullname', `Experience` = '$Experience', `number` = '$number', `DOB` = '$DOB', `Qualification` = '$Qualification', `Pincode` = '$Pincode', `City` = '$City', `Address` = '$Address', `Email` = '$Email', `job` = '$job', `Skill` = '$Skill', `Gender` = '$Gender' WHERE `form`.`id` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: admin.php?msg=Data updated successfully");
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

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    online IT Company job Search 
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `form` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Full name:</label>
            <input type="text" class="form-control" name="Fullname" value="<?php echo $row['Fullname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Experience:</label>
            <input type="text" class="form-control" name="Experience" value="<?php echo $row['Experience'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Mobile:</label>
            <input type="number" class="form-control" name="number" value="<?php echo $row['number'] ?>">
          </div>

          <div class="col">
            <label class="form-label">DOB:</label>
            <input type="date" class="form-control" name="DOB" value="<?php echo $row['DOB'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Qualification:</label>
            <input type="text" class="form-control" name="Qualification" value="<?php echo $row['Qualification'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Pincode:</label>
            <input type="number" class="form-control" name="Pincode" value="<?php echo $row['Pincode'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">City:</label>
            <input type="text" class="form-control" name="City" value="<?php echo $row['City'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Address:</label>
            <input type="text" class="form-control" name="Address" value="<?php echo $row['Address'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Email:</label>
            <input type="Email" class="form-control" name="Email" value="<?php echo $row['Email'] ?>">
          </div>

          <div class="col">
            <label class="form-label">job:</label>
            <input type="text" class="form-control" name="job" value="<?php echo $row['job'] ?>">
          </div>
        </div>


        <div>
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Skill:</label>
            <input type="text" class="form-control" name="Skill" value="<?php echo $row['Skill'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Gender:</label>
            <input type="text" class="form-control" name="Gender" value="<?php echo $row['Gender'] ?>">
          </div>
        </div>


        <div>

          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="admin.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>