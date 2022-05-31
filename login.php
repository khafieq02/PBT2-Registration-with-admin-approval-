<!-- Session -->
<?php
  error_reporting(0);
  session_start();

  if($_SESSION['username']){
    echo '<script type="text/javascript">
            window.location = "./student.php"
        </script>';
  }
?>


<!DOCTYPE html>
<html>
<head>
    <title>LOG IN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action ="login_engine.php" name="Form" method="get">
        <h2>Login </h2>
     
         <label>Username</label>
          <input type="text" name="username" placeholder="Username" required="required"><br>
        
         <label>Password</label>
          <input type="password"  name="password"  placeholder="Password" required="required"><br>
            
                  
        <button type="submit" onsubmit="myButton()">LOG IN</button>
        <footer>Don't have an account? <a href="register.php">Register here</a></footer>
        
     </form>
     <script>

</script>
</body>
</html>