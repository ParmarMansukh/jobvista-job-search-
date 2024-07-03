<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>


<style>
body{
    padding:50px;
    background-image: url('hedrabadu.png');
    background-size: cover;
    background-repeat: no-repeat;
    height:600px;
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

h3{
    color:purple;
    text-align: center;
}
</style>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
           $sql = "SELECT * FROM `users` WHERE email = '$email'";
           // $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <h3>User Login</h3>
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
        
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
     <div><p>Login page <a href="jobvista.php">Back</a></p></div> 

    </div>
</body>
</html>