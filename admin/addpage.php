   <?php 

  include_once("header.php");
   
$query="SELECT * FROM addfrontcover ";
 $run=mysqli_query($dbcon , $query);
 $result= mysqli_fetch_assoc($run);


   if(isset($_POST['addpage'])){
  $storyid=$_POST['storyid'];
  $description=$_POST['descriptiondata'];
  $postimg = $_FILES["pageimage"]["name"];
  $tempname = $_FILES["pageimage"]["tmp_name"];  
  $folder = "../image/".$postimg;   
 


  if ($storyid!=="" && $description!=="") {
   // if (move_uploaded_file($tempname, $folder)) {
    move_uploaded_file($tempname, $folder);

     $query="INSERT into  pagelist (storyid,description,pageimage) values('$storyid','$description','$postimg')";
      $run=mysqli_query($dbcon , $query);
    
      if ($run=true) {
        $msg="Successfully!  added Your record !";
      }else
      {
        $msg="Something Error";
      }
    // }
    // else{
    //  $msg = "Failed to upload image";
    // }
  }
  else{
    $msg="Please fill the mandatory field";
  }
  
   }
    

    

   ?>

   <div class="user-dashboard" id="pageid">
                    <h1 align="center">Add New page</h1> 
                    <div class="row">
                      
                        <div class="col-md-12 col-sm-7 col-xs-12 gutter">

                    </div>
                </div> 
              </div>
               

                  <div class="container">
                    <?php if (@$msg) {
                     ?>
                     <div class="alert">
                   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                     <strong><?php echo @$msg; ?></strong> 
                   </div>
                   <?php 
                    } 
                    ?>
             
                             <div class=" col-md-12  form-box">
                <form role="form" class="registration-form" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <!-- <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> Please Update Your Creds</h3> -->
                               
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                             
                            
                            </div>
                                
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">SELECT STORY</label>
                                   <select class="form-email form-control" name="storyid">
                                     <option value="<?php echo $result['id']; ?>"><?php echo $result['title']; ?></option>
                                   </select>
                                </div>
                                
                                  
                                </div>
                            </div>

                             <div class="form-group">
                                 <label class="seolable">Image</label>
                                <input type="file" name="pageimage" placeholder="" class="form-email form-control"   >
                            </div>

                            <div class="form-group">
                               <label class="seolable">DESCRIPTION</label>
                                <textarea id='long_desc' name='descriptiondata' ></textarea>
    
                            </div>

                        
                          <button type="submit" class="btn btn-primary" name="addpage">Add new</button>
                        </div>
                    </fieldset>
                   
                  </form>
                </div>
                          </div>

                      </div>
        </div>

    </div>
<script type="text/javascript">
        CKEDITOR.replace('long_desc',{
            height: "200px"
        }); 
    </script>
 <?php 
  include_once("footer.php");
 ?>