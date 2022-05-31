
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
// $_SESSION['mobileno'] = $mobileno;
// $_SESSION['telco'] = $telco;
// $_SESSION['credit'] = $credit;
?>


<html>
<head>
   <!-- External CSS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
<style>

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
  margin-top: 150px;
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
</head>
<body>
<center>
<main>

<h1><?php echo "Welcome ".$username." to STUDENT PAGE.";?> </h1>

<!-- Table -->
<table bgcolor="SkyBlue" border="0" width="30%" >

<!-- Mobile number -->
<tr style="height:140px">
<td>No Matric</td>  <td>:</td>
<td><input type="text" id="mobileno" name="mobileno" required="required"> <br> 
</tr>
    
<!-- Telco -->
<div class="Option">

<tr style="height: 150px">
    <td>Department</td> <td>:</td>
    <td colspan="2" align="center"><select name="telco" width="" id="telco" required="required">
      <option value="">--- Select Department --- </option>
      <option value="DDT">DDT</option>
      <option value="DIB">DIB</option>
      <option value="DEP">DEP</option>
      </select><br>
    </td>
</tr>

<!-- Reload Credit -->
<tr style="height:150px" >
<td>Name Lecterur</td>  <td>:</td>
<td colspan="2" align="center"><select name="credit" id="credit" required="required">
    <option value="" >--- Select Lecterur --- </option>
    <option value="">Puan Suaidah</option>
    <option value="">Puan Akmar</option>
    <option value="">Sir Azrol</option>
    <option value="">Sir Hisham</option></select>
</td>
</tr>


</table><br>
<!-- Button LOGOUT -->
<input style="font-size:20px" class="button" type="reset"  onclick = "exit()" value="LOG OUT">
</div>
</form>
</center>
</main>
</body>
</html>