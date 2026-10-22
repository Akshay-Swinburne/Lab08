<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
</head>
<body>

    <?php
       include(__DIR__ . '/../Task 4/header.inc');   
    ?>

      <form method="post" action="../Task%202/process.php">   
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="hidden" name="token" value="AK106728654">
        <input type="submit" value="Login"><br>
      </form>

    <?php
       include(__DIR__ . '/../Task 4/footer.inc');   
    ?>

</body>
</html>