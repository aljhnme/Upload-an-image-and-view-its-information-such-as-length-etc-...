<?php
$ImageName= $_FILES['imge']['name'];
$new='/update/';
$path = getcwd().$new; 
$location = $path .$ImageName; 
move_uploaded_file($_FILES['imge']['tmp_name'],$location);
$get='update/';
$imge=$get.$ImageName;
$infrm_img=getimagesize($imge);
list($w,$h)=$infrm_img;
$type_img=pathinfo($ImageName,PATHINFO_EXTENSION);
?>
<div class="center">
		<div class="bar"></div>
		<div class="title">Image information</div>
		<div class="dropzone">
			<div class="content">
				<span class="filename">
					<h3>width=<?php echo $w ?></h3>
			     	<h3>hight=<?php echo $h ?></h3>
			     	<h5>type_img=<?php echo $type_img ?></h5>
				</span>
			</div>
       </div>
  </div>
  <?php
  unlink($location);
  ?>