<?php
include 'config.php';
$query = "SELECT * FROM addfrontcover ";
$run = mysqli_query($dbcon, $query);
$result = mysqli_fetch_assoc($run);

$sqlquery = "SELECT * FROM `pagelist`";
$runres = mysqli_query($dbcon, $sqlquery);
$rowcount = mysqli_num_rows($runres);

?>

<!DOCTYPE html>

<html>
	<title></title>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

</head>
<body>
<button id="download">downlaod Pdf</button>
<div id="book" > 
<div class="bookcontent" style="padding:15px;">
<div class="col-md-12">
	 <h1 class="storytitle"><?php echo $result['title']; ?> </h1>
	 <p  class="storyauthor">Author: <?php echo $result['autor']; ?> </p>
     <img src="image/<?php echo $result['avtar_img']; ?>" class="img-responsive" >
</div>
<div style='page-break-after: always;'> </div>
<div class="col-md-12 backcover"  >
	 <h1 class=""><?php echo $result['title']; ?></h1>
	 <p  class="authorname">Author: <?php echo $result['autor']; ?></p>
	 <hr>
    <div class="col-md-4 autorimg" > 
    	<img src="image/<?php echo $result['author_img']; ?>" class="img-responsive">
     <p  class="authorname">Author: <?php echo $result['autor']; ?></p>
    </div>
    <div class="col-md-8">
     <p  class="authorname">Author: <?php echo $result['authorreview']; ?></p>
 </div>
 <div class="col-md-12" >
 	 <hr>
  <h4>Publishers by <?php echo $result['title']; ?> </h4>
  <p><?php echo $result['description']; ?></p>
  <hr>
</div>
<div class="col-md-12">
	<div class="col-md-6">
		<img src="image/<?php echo $result['logo']; ?>" class="img-responsive" width="100px">
		<p  class="authorname"><?php echo $result['weburl']; ?></p>
		<p class="authorname">Preview copy for limited distribution</p>
     </div>
  	<div class="col-md-6">
			<img src="image/<?php echo $result['barcode']; ?>"  width="100px" style="float: right;">
	</div>
</div>
    </div>
<div style='page-break-after:always;' > </div>
    <div class="col-md-12  pagedesign open-book" >
    <?php
$count = 1;
while ($output = mysqli_fetch_assoc($runres))
{
    // $countrow==
    if (($rowcount % 2) == 0)
    {

?>
	<div class="col-md-6" style="padding:15px">
		<img src="image/<?php echo $output['pageimage']; ?>"  width="100%";>
	 <?php echo $output['description']; ?>
	  <?php echo $count++; ?>
	  <hr>
    
    </div>
   <?php
    }
    else
    { ?>
   	<div class="col-md-6 " style="padding-right:15px; padding-left:15px">
	 <img src="image/<?php echo $output['pageimage']; ?>" width="100%";>
	 <?php echo $output['description']; ?>
	 <br>
	 <?php echo $count++; ?>
    </div>
<?php
    }
} ?>
</div>
  </div> 
</div>	
</body>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById("download").addEventListener("click",()=> {
			const book = this.document.getElementById("book");
			console.log(book);
			var opt = {
			margin:       1,
			filename:     'storybook.pdf',
			image:        { type: 'jpeg', quality: 0.98 },
			html2canvas:  { scale: 2 },
			jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
		};
		 html2pdf().from(book).set(opt).save();
		})
	}
</script>
</html>
