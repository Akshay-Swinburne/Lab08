<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
</head>
<body>

       <?php
       include(__DIR__ . '/../Task 4/header.inc');   

       session_start();
       if (isset($_SESSION['user'])) {
        echo "Welcome, " .$_SESSION['user'];
       } else {
         header('Location: ../Task%201/login.php');
         exit;
       }

       include(__DIR__ . '/../Task 4/footer.inc'); 
       ?>

</body>
</html>