


<?php
include "db_conn.php";
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

  <title>IT COMPANY</title>
  <style>
   
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
   width: 110%;

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



.container{
  margin-top:5%;
}

table{

margin-left:-110px ; 
border:5px solid red;

}
  </style>
</head>

<body>



<header>
        <h3> JOBVISTA.IN</h3>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="jobs.html">Jobs</a></li>
            
            </ul>
        </nav>
    </header>
    
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    
          <a href="check.php" class="btn btn-dark mb-3">Back</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full name</th>
          <th scope="col">Experience</th>
         
          <th scope="col">Mobile</th>
          <th scope="col">DOB</th>
          <th scope="col">Qualification</th>
          <th scope="col">Pincode</th>
          <th scope="col">City</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">job</th>
          <th scope="col">Skill</th>
          <th scope="col">Gender</th>
          <th scope="col">company</th>


          <th scope="col">Action</th>
          

        </tr>
      </thead>
      <tbody>

      
        <?php
        $sql = "SELECT * FROM `form`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
    

          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["Fullname"] ?></td>
            <td><?php echo $row["Experience"] ?></td>
            <td><?php echo $row["number"] ?></td>

            <td><?php echo $row["DOB"] ?></td>
            <td><?php echo $row["Qualification"] ?></td>
            <td><?php echo $row["Pincode"] ?></td>
            <td><?php echo $row["City"] ?></td>
            <td><?php echo $row["Address"] ?></td>
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["job"] ?></td>
            <td><?php echo $row["Skill"] ?></td>
            <td><?php echo $row["Gender"] ?></td>
            <td><?php echo $row["company"] ?></td>

            


            
           
            <td>
              <a href="contact.php">Pending..</a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
      

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>

</html>