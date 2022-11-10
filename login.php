<?php 
session_start();
?>
<?php
// database name - college
// database table name - clg_stud
include "config.php";
if(isset($_POST['login'])){
  // fetch the data
  $email=$_POST['email'];
  $password=md5($_POST['password']);

    
//  sql command
$sql="select * from clg_stud  where email='$email' and password='$password'";

$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
echo $num;

if($num>0){

  $data=$result->fetch_assoc();
  $user_email=$data['email'];
  $user_name=$data['username'];
  $user_id=$data['id'];

  // add data in session--------------
  session_start();
  $_SESSION['session_email']=$user_email;
  $_SESSION['session_name']=$user_name;
  $_SESSION['session_id']=$user_id;

  header("location:index.php");

}
else{
  echo "wrong";
}


}

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

    <div class= "">
    <form class="" action=" <?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="post">
      <div class="title">
        <h2>login </h2>
      </div>
      <div class="half">
        
        <div class="item">
          <label for="">Email</label>
          <input type="text" name="email" required value="">
        </div>
      </div>

       <div class="half">
        <div class="item">
          <label for="item">Password</label>
          <input type="password" name="password" required value="">
        </div>
        
        
      </div>
  
        <div class="action">
        <input type="submit" name = "login" value = "Login">
        
</div>
      
      </div>
      
    </form>
  </body>
</html>