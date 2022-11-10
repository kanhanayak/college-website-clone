
<?php
include "config.php";

// fetching data from registration.php file
if(isset($_POST['register'])){
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];






// database name - college
// database table name - clg_stud
$sql="  insert into clg_stud values('','$name','$username','$email','$password','$phone')" ;
if($con->query($sql)){


   //echo "data inserted successfully"
  // <script>
  //   alert("data inserted successfully");
  // </script>
  // header("location:login.php");

  header("location:login.php?msg=success");

}
else{
  echo "something wrong in insertion....try again";
}

}
//else{
  //echo "*******";
//}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="abit.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
  <div class = "imgha">
  <img src="image/logo.png" alt="not found" height = "80px" width = "80px">
  <h1>ABIT
  <span>Group of Institutions</span>
  <span>AICTE, NAAC Accredited, BPUT Affiliated</span>
  </h1>
 

</div>

    <div class= " regi">
    <form  action="" method="post">
      <div class="title">
        <h2>REGISTER</h2>
      </div>
      <div class="half">
        <div class="item">
          <label for="">Name</label>
          <input type="text" name="name" required value="">
        </div>
        <div class="item">
          <label for="">Username</label>
          <input type="text" name="username" required value="">
        </div>
      </div>
      <div class="half">
        <div class="item">
          <label for="">Email</label>
          <input type="text" name="email" required value="">
        </div>
        <div class="item">
          <label for="item">Password</label>
          <input type="password" name="password" required value="">
        </div>
      </div>
      <div class="full">
        <div class="item">
          <label for="">Phone</label>
          <input type="text" name="phone" required value="">
        </div>
      </div>
      <div class="action">
        <input type="submit" name = "register" value = "REGISTER">
        <br>
        <p> Have an account ?  : <a href = "login.php"> sign in </a> </p>
       
      </div>
</div>
    </form>
  </body>
</html>

    