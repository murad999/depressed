<?php 
  session_start();

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/style.css">
</head>
  <body class="align">

  <div class="grid">

    <form action="login.php" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input type="password" name="pass" placeholder="Password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" name="login" value="Login">

        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>

  </div>

</body>
</html>


<?php 

include_once ("../libs/config.php");
include_once ("../libs/Database.php");
$db = new Database();

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";

    $user= $db->select($query);
    $check = $user->num_rows;

    if($check>0){
      $_SESSION['email']=$email;
      header('location:index.php');
    }else{
      echo "<script>alert('incrroct email or passowrd')</script>";
    }

  }



?>