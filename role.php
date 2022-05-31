<?php
session_start();
include 'conn/conn.php';

//retrieve username
$username = $_REQUEST['username'];

//performquery
$query = "SELECT * FROM admin
WHERE username = '$username'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

$role = $row['role'];

//set data into session
$_SESSION['id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$_SESSION['email'] = $row['email'];
$_SESSION['phoneNum'] = $row['phoneNum'];
$_SESSION['role'] = $row['role'];

if($role == 'Admin'){

    header('location:admin.php');

} else if ($role == 'Lecturer') {

    header('location:lecturer.php');

} else if ($role == 'Student'){

    header('location:student.php');

} else {
    ?>
    session_destroy();
    <script>
        alert("Invalid Request");
        location = 'role.php';
    </script>
    <?php
}
?>