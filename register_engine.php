<?php
//CONNECTION TO DB
include 'conn/conn.php';



//retrive data
echo $email=$_REQUEST['email'];
echo '<br>';
echo $username=$_REQUEST['username'];
echo '<br>';
echo $password=$_REQUEST['password'];
echo '<br>';
echo $phoneNum=$_REQUEST['phoneNum'];
echo '<br>';
echo $role=$_REQUEST['role'];
echo '<br>';

// find/select email to check either email already used or not  
$select = mysqli_query($conn, "SELECT * FROM admin WHERE email = '".$_REQUEST['email']."'");
if(mysqli_num_rows($select)) 
{
    ?>
     <script>
     	alert('Email already used');
      window.location='register.php';
     </script>
     <?php
     
     exit('This email already exists');
}

// find/select username to check either email already used or not  
$select = mysqli_query($conn, "SELECT * FROM admin WHERE username = '".$_REQUEST['username']."'");
if(mysqli_num_rows($select)) 
{
    ?>
     <script>
     	alert('Username already used');
      window.location='register.php';
     </script>
     <?php

     exit('This username already exists');
    
}



//SIMPAN DALAM DB
$sql = " INSERT INTO admin 
(`email`,`username`,`password`,`phoneNum`,`role`) 
VALUES ('$email' ,'$username' ,'$password','$phoneNum','$role')";


//if the process success then will display alert box and go to login.php
   if ($conn->query($sql) === TRUE)
   {
     ?>
     <script>
     	alert('Your Registration has sucessfull');
      window.location='login.php';
     </script>
     <?php
   }

$conn->close();



?>