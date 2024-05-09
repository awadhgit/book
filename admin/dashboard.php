   <?php 

  include_once("header.php");
  $query="SELECT * FROM addfrontcover";
   $myrun=mysqli_query($dbcon , $query);
   $result= mysqli_fetch_assoc($myrun);
   $totalresult= mysqli_num_rows($myrun);
   ?>
   <div class="user-dashboard" id="pageid" align="center">
                    <h1 align="center">Welcome to book shop</h1>
                    <div class="row">
                      <button><li><a href="post.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add NEW COVER PAGE</span></a> </li></button>
                      <button><li><a href="addpage.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">ADD PAGE DETAILS</span></a> </li></button>
                        
                    
                    </div>
                      
                </div> 


 


           </div>
        </div>

    </div>

 <?php 
  include_once("footer.php");
 ?>