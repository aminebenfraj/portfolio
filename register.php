<?php
session_start();
error_reporting(0);
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO users(name, email, mobile, password) VALUES(:name,:email, :mobile, :password)";
    $query = $db->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $db->lastInsertId();
    if ($lastInsertId) {
        $_SESSION['login']=$_POST['username'];
        echo "<script>alert('Thanks For Register')</script>";
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    } else {
        echo "<script>alert('Please Fill All Valid Details')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <link rel="stylesheet" href="./css/register.css">

</head>

<body>

    <section>

        <div class="login-box">
        <h2>sign up</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" name="name" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="email" required>
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="text" name="mobile" required>
            <label>email</label>
          </div>
          <div class="user-box">
            <input type="mobile" name="password" required>
            <label>phone number</label>
          </div>
          <div class="user-box">
            <h5>Birth day</h2>
            <input type="date" name="" required>
            
          </div>
          <div class="container6">
            <div class="buttons6">
              <input class="btn6 btn-6" name="submit" type="submit" value="Register">

            </div>
          </div>
        </form>
      </div>

    </section>
</body>

</html>