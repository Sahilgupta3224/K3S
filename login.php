<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
         html{
        font-family:'Arial','sans-serif';
        
      }
      body{
        background-color: #4158D0;
        background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
        height:100vh;

      }
      h2{
        margin:auto;
        text-align:center;
        margin-top:100px;
        margin-bottom:50px;
      }
      form{
        margin:auto;
        text-align:center;
        
        width:50%;
        

      }
      label {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  text-align: right;
  width: 200px;
  line-height: 26px;
  margin-bottom: 0px;
}

input {
  height: 20px;
  flex: 0 0 200px;
  margin-left: 5px;
  transform:translateY(-20px);
  border-radius:8px;
  border:none;
}
button{
  margin-top:30px;
  border-radius:8px;
  padding:10px;
  width:100px;
  border:none;
  background-color:white;
  color:black;

}
button:hover{
  background-color:rgba(111, 54, 209,0.5);
  color:white;
}
#reg{
  text-align:center;

}
    </style>
  </head>
  <body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br><div id="reg">
    Not signed up?<a href="registration.php">Register</a></div>
  </body>
</html>