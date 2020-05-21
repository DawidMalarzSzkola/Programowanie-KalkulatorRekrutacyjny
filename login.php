<?php
   include("backend/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM administrators WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
    
      if($count == 1) {
         $_SESSION['login_user'] = $username;        
         header("location: dashboard.php");
      }else {
         $error = "Błędny login lub hasło";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lo-Niepolomice</title>
</head>
<body>
    <form method="POST">
        <label for="login" name="login">
            <input type="text" name="username" placeholder="Użytkownik">
        </label>
        <label for="password" name="password">
            <input type="password" name="password" placeholder="Hasło">
        </label>
        <input type="submit" value="Zaloguj">
    </form>
</body>
</html>