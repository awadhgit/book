   <?php 

  include_once("header.php");
   
   if(isset($_POST['add_story'])){
  $title=$_POST['title'];
  $author=$_POST['author'];
   $authorreview=$_POST['authordisc'];
   $weburl=$_POST['weburl'];
   $description=$_POST['description'];
   
   

     $logo = $_FILES["logo"]["name"];
     $tempname1 = $_FILES["logo"]["tmp_name"];  
     $folder4 = "../image/".$logo; 

      $barcode = $_FILES["barcode"]["name"];
      $tempname2 = $_FILES["barcode"]["tmp_name"];  
      $folder3 = "../image/".$barcode;  
  
       $authorimg = $_FILES["authorimg"]["name"];
       $tempname3 = $_FILES["authorimg"]["tmp_name"];  
       $folder2 = "../image/".$authorimg;  

       $postimg = $_FILES["avtar_img"]["name"];
       $tempname = $_FILES["avtar_img"]["tmp_name"];  
       $folder = "../image/".$postimg;   
 
      move_uploaded_file($tempname1, $folder4);
      move_uploaded_file($tempname2, $folder3);
      move_uploaded_file($tempname3, $folder2);
      
  if ($title!=="" && $description!=="") {
   if (move_uploaded_file($tempname, $folder)) {

    echo $query="UPDATE addfrontcover SET title='$title', 
                                     autor='$author',
                                     avtar_img='$postimg',
                                     authorreview='$authorreview',
                                     barcode='$barcode',
                                     logo='$logo',
                                     weburl='$weburl',
                                     description='$description',
                                     author_img='$authorimg'

                                      where id =5";

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
                    <h1 align="center">Add NEW COOVER PAGE</h1> 
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
                                <p>Add New fornt cover page </p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                             
                            
                            </div>
                                 <div class="form-group">
                                 <label class="seolable">Cover Image</label>
                                <input type="file" name="avtar_img" placeholder="" class="form-email form-control"   >
                            </div>
                          
                                 <div class="form-group">
                                 <label class="seolable">Author Image</label>
                                <input type="file" name="authorimg" placeholder="" class="form-email form-control"   >
                            </div>
                              
                                
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">Story name</label>
                                    <input type="text" class="form-control" placeholder="Story name" name="title" >
                                </div>
                                
                                  
                                </div>
                            </div>
                              <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">Author name</label>
                                    <input type="text" class="form-control" placeholder="Blog title" name="author" >
                                </div>
                                
                                  
                                </div>
                            </div>
                                 <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">Author self review</label>
                                    <textarea class="form-control" placeholder="Authorsays" name="authordisc" ></textarea>
                                </div>
                                
                                  
                                </div>
                            </div>
                               

                          
                             <div class="form-group">
                                 <label class="seolable">logo Image</label>
                                <input type="file" name="logo" placeholder="" class="form-email form-control"   >
                            </div>
                               <div class="form-group">
                                 <label class="seolable">barcode Image</label>
                                <input type="file" name="barcode" placeholder="" class="form-email form-control"   >
                            </div>
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                     <div class="form-group col-md-12 col-sm-12">
                                  <label class="seolable">web url</label>
                                    <input type="text" class="form-control" placeholder="weburl" name="weburl" >
                                </div>
                                
                                  
                                </div>
                            </div>
                              <div class="form-group">
                               <label class="seolable">Story conclusion</label>
                                <textarea id='long_desc' name='description' ></textarea>
    
                            </div>
                               


                        
                          <button type="submit" class="btn btn-primary" name="add_story">Add story</button>
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