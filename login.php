<?php
session_start();
error_reporting(0);
include('config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT id,name,email FROM users WHERE email=:email and password=:password";
    $query = $db->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['login'] = $results->name;
        $_SESSION['user'] = $results->id;
        echo "<script>alert('Login Success')</script>";
        echo "<script type='text/javascript'> document.location = 'gal.html'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <section>

    <div class="login-box">
                <form  method="post">
                <h2>Login</h2>

                <div class="user-box">
            <input type="text" name="email" required="">
            <label>email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
                    
          <div style='display:flex;justify-content:center; flex-direction:column;'>

              <input class="btn6 btn-6" name="submit" type="submit" value="Sign In">
              <p>Not a member?
                  <a href="register.php">Register</a>
                </p>
            </div>
                </form>
            </div>
      
    </section>



</body>

</html>