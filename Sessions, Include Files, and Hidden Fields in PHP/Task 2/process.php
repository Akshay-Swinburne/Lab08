<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
</head>
<body>

      <?php
          session_start();
          $username = $_POST['username'];
          $password = $_POST['password'];

          if ($username == 'Akshay' && $password == 'AK106728654') {
            $_SESSION['user'] = $username;
            header('Location: ../Task%203/welcome.php');
            exit;
          } else {
            echo "Invalid login. <a href='../Task%201/login.php'>Try again</a>";
          }
      ?>

</body>
</html>