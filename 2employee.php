


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

  <title>Jobvista.in </title>
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

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

   
  </style>
</head>

<body>
  
<header>
        <h3> JOBVISTA.IN</h3>
        <nav>
            <ul>
                <li><a href="check.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="jobs.php">Jobs</a></li>
            
            </ul>
        </nav>
    </header>

           




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

    

    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
         
          <th scope="col">name</th>
          <th scope="col">file</th>
          <th scope="col">description</th>
          <th scope="col">Action</th>



          

        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `employee`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
    

          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["img"] ?></td>
            <td><?php echo $row["description"] ?></td>

            <td>
              
              <a href="2employee.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
           
            </td>
          </tr>

        
        <?php
        }
        ?>
      </tbody>
    </table>

  </div>

  <footer>
        <p>&copy;  JOBVISTA IT COMPANY JOB</p>
    </footer>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>




<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `employee` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: 2employee.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}




