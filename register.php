<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action ="register_engine.php" name="Form" method="get">
        <h2>Admin Registration </h2>

        <label>Email</label>
          <input type="text" name="email" placeholder="Enter Email" required="required"><br>
     
         <label>Username</label>
          <input type="text" name="username" placeholder="Enter Username" required="required"><br>
        
         <label>Password</label>
          <input type="password"  name="password"  placeholder="Enter Password" required="required"><br>

          <label>Phone Number</label>
          <input type="text"  name="phoneNum"  placeholder="Enter Phone Number" required="required"><br>

          <label>Role</label>
          <br>
            <select id="role" name="role">
            <option value="Select Role">Select Role</option>
            <option value="Admin">Admmin</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Student">Student</option>
            </select>    
        <button type="sumbit">Register</button>
        
     </form>
     <script>

</script>
</body>
</html>