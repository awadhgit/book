<?php
// login validation
session_start();
include 'config.php';

if (isset($_POST['login'])){
  $admname=$_POST['uname'];
  $password=$_POST['password'];
   $securedpassword=md5($password);
  if ($admname!=="" &&  $password!=="")
  {

   $query="SELECT * FROM user_data where username ='$admname' and password='$securedpassword'";
    $run=mysqli_query($dbcon, $query);
    $result= mysqli_fetch_assoc($run);
    echo $admuser=$result['username'];
    echo  $userpassword=$result['password'];
 
   
   if ($securedpassword==$userpassword && $admuser==$admname ) {
     $_SESSION['username']=$admuser;
     header('Location:admin/dashboard.php');
   }else{
    header('Location:login.php?status=validcredential');
   
   }

}
  else{
     header('Location:login.php?status=required');
      
  }
}

?>