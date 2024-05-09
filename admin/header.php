<?php 
session_start();
include "../config.php";
 $activeuser=$_SESSION['username'];
 $query="SELECT * FROM user_data where username ='$activeuser'";
    $run=mysqli_query($dbcon, $query);
    $result= mysqli_fetch_assoc($run);
      $activeuserid=$result['id'];
      $uname=$result['username'];
      $password=$result['password'];
       $email=$result['email'];
       $usertype=$result['useraccess'];
      

      

 if (empty($activeuser)) {
 include("logout.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
          <link rel="stylesheet" type="text/css" href="../css/style.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js" integrity="sha512-woYV6V3QV/oH8txWu19WqPPEtGu+dXM87N9YXP6ocsbCAH1Au9WDZ15cnk62n6/tVOmOo0rIYwx05raKdA4qyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

          <!-- script5 -->
           


    <script type="text/javascript">
        $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});




    </script>
   <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
    <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure want to delete this record ?');
}
</script>
    <title></title>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="nameplate">
                    <h4>Welcome Mr <?= ucfirst( $uname); ?></h4>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active" id="pageid"><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                        <!-- <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li> -->
                       
                <li data-toggle="collapse" data-target="#blogpost" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Story<span class="arrow"></span></a>
                </li>
                 <ul class="sub-menu collapse" id="blogpost">
                    <li><a href="post.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add NEW COVER PAGE</span></a> </li>
                    <li><a href="addpage.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">ADD PAGE DETAILS</span></a> </li>
                  
                </ul>
                          

                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align" style="float: right;">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row" id="topheader">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <div class="logo">
                                        <img src="../image/Swastik-Logo.png" height="55px">
                                    </div>
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                <!--     <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add user</a></li> -->
                                    <li class="hidden-xs"><a href="logout.php" class="btn btn-danger">Logout</a></li>
                                   <!--  <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li> -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../image/Swastik-Logo.png" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>Mr <?= $uname; ?></span>
                                                    <p class="text-muted small">
                                                        <?= $email; ?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <?php


                ?>

               <!--  <div class="user-dashboard">
                    <h1>Hello, JS</h1>
                    <div class="row">
                      
                        <div class="col-md-12 col-sm-7 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Report</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
      
    <!-- Modal -->
    