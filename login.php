<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
    <style type="text/css">
        body {
  margin: 0;
  padding: 0;
  background-color: #fff;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
.error_msg{
color: red;
text-align: center;
}


    </style>
</head>
<body>
    <div id="login">
        <!-- <h3 class="text-center text-white pt-5">Login form</h3> -->
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-push-3 col-md-6">
                    <div id="login-box" class="col-md-12" >
                      
                        <form id="login-form" class="form" action="verify.php" method="post">
                            <h3 class="text-center text-info"> <img src="image/Swastik-Logo.png" height="55px"></h3>
                             <?php if (isset($_GET["status"]))
      if( $_GET["status"]=="required"){
        ?><p class="error_msg"><?php 
        echo "Sorry Please filled the Required Data !";?></p><?php 
      }elseif ($_GET["status"]=="validcredential") {
          ?><p class="error_msg"> <?php echo "Please fill valid credential";?></p><?php
      }
      
   ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="uname" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">

                                <button put type="submit" name="login" class="btn" value="submit">Login</button>
                            </div>
                            <div id="register-link" class="text-right">
                                <!-- <a href="#" class="text-info">Register here</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>