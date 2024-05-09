   <?php 

  include_once("header.php");
   
   if(isset($_POST['add_bog'])){
  $title=$_POST['title'];
  $description=$_POST['description'];
  $postimg = $_FILES["avtar_img"]["name"];
  $tempname = $_FILES["avtar_img"]["tmp_name"];  
  $folder = "../image/blog/".$postimg;   
 
echo $title ;
 echo $description ;

  if ($title!=="" && $description!=="") {
   if (move_uploaded_file($tempname, $folder)) {

    echo $query="INSERT into  blog_post (title,description,avtar_img) values('$title','$description','$postimg')";
      $run=mysqli_query($dbcon , $query);
    
      if ($run=true) {
        $msg="Successfully!  added Your record !";
      }else
      {
        $msg="Something Error";
      }
    }
    else{
     $msg = "Failed to upload image";
    }
  }
  else{
    $msg="Please fill the mandatory field";
  }
  
   }
    

    

   ?>

   <div class="user-dashboard" id="pageid">
                    <h1 align="center">Add New Blog</h1> 
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
                                <p>Add New Post</p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                             
                            
                            </div>
                                 <div class="form-group">
                                 <label class="seolable">Avtar Image</label>
                                <input type="file" name="avtar_img" placeholder="" class="form-email form-control"   >
                            </div>
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">BLOG TITLE</label>
                                    <input type="text" class="form-control" placeholder="Blog title" name="title" >
                                </div>
                                
                                  
                                </div>
                            </div>

                            <div class="form-group">
                               <label class="seolable">DESCRIPTION</label>
                                <textarea id='long_desc' name='description' ></textarea>
    
                            </div>

                        
                          <button type="submit" class="btn btn-primary" name="add_bog">Add new</button>
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