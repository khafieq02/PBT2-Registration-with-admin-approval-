<!-- Session pass value -->
<?php
error_reporting(0);
session_start();
if(!$_SESSION['username']){
  echo '<script type="text/javascript">
  window.location = "./login.php"
 </script>';
}

$username = $_SESSION['username'];

?>

<?php
  include 'conn/conn.php';   #call database
?>

<!DOCTYPE html>
<html>
<head>
   <!-- External CSS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	// create exit function after click log out button
  function exit(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "log_out.php";
        Swal.fire(
          'Deleted!',
          'Your data has been deleted.',
          'success'
        )
      }
    })
}


</script>
</head>
<style>
   /*style for page design page*/
  @keyframes color {
  0%   { background: #33CCCC; }
  20%  { background: #33CC36; }
  40%  { background: #B8CC33; }
  60%  { background: #FCCA00; }
  80%  { background: #33CC36; }
  100% { background: #33CCCC; }
}

body{
  background: #33CCCC; /* Fallback */
  animation: color 9s infinite linear;
  text-align: center;
  padding: 2em;
}
 
.t1{
  margin-top: 120px;
  font-size: 25px;
}
h1{
	font-size: 50px;
  margin-top: -30px;
  font-family: 'Fauna One', serif;
}
/*Table*/
table, th, td {
  border-radius: 12px;
  border-style: none;
  font-size: 18px;
  font-family: 'Fauna One', serif;
}
th, td {
  padding: 5px;
  text-align: center;
}
input {
  border: 1px solid SkyBlue;
  border-radius: 10px;
  font-size: 20px;
  color: rgba(102, 102, 102, 0.904);

}    
select {
  font-size: 20px;
  text-align: center;
  appearance: none;
  outline: 0;
  background: LightCyan;
  background-image: none;
  width: 100%;
  height: 30px;
  color: black;
  cursor: pointer;
  border: 1px solid black;
  border-radius: 10px;
}
  
/* button */
.button:hover {
  cursor: pointer;
  background-color: DeepSkyBlue
  }
</style>

<body>


<center>  <!-- call username value -->
<h1><?php echo "Welcome ".$username." to ADMIN PAGE.";?> </h1>

</center>



<form action="insert.php" name="Form" method="GET"> 
  <center>

<table style="width:100%" border="1">
  <tr bgcolor="gray">
    <th>No</th>
    <th>EMAIL</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th>PHONE NUMBER</th>
    <th>ROLE</th>
   
   
  </tr>

  

  <?php  //start looping
    $bilangan = 1;
    $query="Select * from admin";
    $result = mysqli_query($conn,$query);
    $notempty = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["id"];
      $email = $row["email"];
      $username = $row["username"];
      $password = $row["password"];
      $phoneNum = $row["phoneNum"];
      $role = $row["role"];
     

    
    
  ?>

  <tr>
    <td style="text-align: center" ><?php echo $id; ?></td>
    <td style="text-align: center"><?php echo $email; ?> </td>
    <td style="text-align: center"> <?php echo $username; ?> </td>
    <td style="text-align: center"><?php echo $password; ?> </td>
    <td style="text-align: center"><?php echo $phoneNum; ?> </td>
    <td style="text-align: center"><?php echo $role; ?> </td>
   
  </tr>


<?php
//end looping
$bilangan++;
}


if($notempty==0){
?>

	<tr>
    <td colspan="8" align="center">No data in database</td>
    </tr>

<?php
}?>


</table>
<br>
<!-- Button LOGOUT -->
<input style="font-size:20px" class="button" type="reset"  onclick = "exit()" value="LOG OUT">
</center>

</form>


</body>
</html>


