<?php
require("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 18%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


</style>


<body>


<h2>Login Form</h2>
<form  method="post">
  <div class="imgcontainer">
    <img src="shop.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container">
   <label for="cname"><b>Customer name</b></label>
    <input type="text" placeholder="Enter yourname" name="cname" required>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>   
    <button type="submit" name="signin">Login</button>
  </div>
</form>

<?php
if(isset($_POST['signin']))
{
  $customer_name=$_POST['cname'];
  $User_name=$_POST['uname'];
  $Password=$_POST['psw'];
 $query1= "INSERT INTO `admin_login`(`customer_name`, `username_name`, `password`) VALUES ('$customer_name','$User_name','$Password')";
 $result1=mysqli_query($con,$query1);
}
?>
</body>
</html>