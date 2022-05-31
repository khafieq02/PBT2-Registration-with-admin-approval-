<?php
//CONNECTION TO DB
include 'conn/conn.php';


echo $username=$_REQUEST['username'];
echo '<br>';
echo $password=$_REQUEST['password'];
echo '<br>';


    $query = "SELECT * FROM admin 
    WHERE username ='$username'
    AND password = '$password'";

        
   $result = mysqli_query($conn, $query);

    //if(mysqli_num_rows($result)>0){

        
        //fetch password from db
      //  $row = mysqli_fetch_assoc($result);
       // $passDatabase = $row['password'];

        //Verifies that a password matches a hash
        //ref: https://www.php.net/manual/en/function.password-hash.php
        if(mysqli_num_rows($result)>0){
            header('location:statusApprove.php?username=' .$username);
     }
     else 
     {
        ?>
        <script>
            alert("Your account has not been registered. Please register an account first.");
            window.location = "register.php";
        </script>
        <?php
    }


?>