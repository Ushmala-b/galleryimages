
<?php 
 $title = 'Gallery' ;
  require_once 'includes/galleryheader.php';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  
  $catId= isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
	$results = $crud->getimgdata($catId);
  $results1 = $crud->getcategory();

   if(isset($_POST['submit2'])){
      $image_title = $_POST['image_title'];
      $image_desc = $_POST['image_desc'];
	    $cat_id= $_POST['cat_id'];
    
      $orig_file = $_FILES["cat_image"]["tmp_name"];
      $ext = pathinfo($_FILES["cat_image"]["name"], PATHINFO_EXTENSION);
      $target_dir = 'uploads/';
      $destination = "$target_dir$image_title.$ext";
	 
      move_uploaded_file($orig_file,$destination);

      $isSuccess = $crud->insertimgdata($destination,$image_title,$image_desc,$cat_id);
}
   

   

?>
    <div class="search">
	    <h2 class="text-center text-secondary d-2">	Search you needs</h2>
        <ul class="navbar nav ml-auto"	style="color:white;background-color:black">
	        <li><a class="nav-link dropdown-toggle" 	data-toggle="dropdown" href="" 	role="button" aria-haspopup="true"	aria-expanded="false"	style="color:white;">Category	</a>
            <div class="dropdown-menu">
               <?php while($r1 = $results1->fetch(PDO::FETCH_ASSOC)) { ?>
				         <a class="dropdown-item"href="gallery.php?id=<?php echo $r1['cat_id'] ?>"> <?php echo $r1['cat_name'] ?>   </a>
               <?php }?> 
            </div>
            <!--
                <li>
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" 
                            aria-label="Search"    >
                </li>
               -->
               
  </li>
		      </ul>
     </div>

    

<h1 class="text-center text-secondary"></h1>
<div class="row ">
<br>
<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
<div class="col-lg-3">
<div class="card " style="width: 18rem;">
    <img src="<?php echo $r['cat_image'] ?> " class="card-img-top" > 
<div class="card-body">
    <h5 class="card-title"><?php echo $r['image_title'] ?></h5>
    <p class="card-text"><?php echo $r['image_desc']; ?></p>
</div>
  <?php 
    if(isset( $_SESSION['usertype']) && ($_SESSION['usertype']=='admin' or $_SESSION['usertype']=='user')) {
  ?>
 <div class="card-footer">
  <a download="<?php echo $r['cat_image']?>" href="gallery.php?image=?<?php echo $r['cat_image']?>" class="btn btn-light">
    <i class="fa fa-download"></i>   Download  </a>
</div>
 <?php }?>
</div>
</div>
<br>
<?php }?> 
</div>
<div class="container">
	<div class="field">
	
		<div class="scroll"></div>
	
	</div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
<div class="galleryfooter"></div>

<?php require_once 'includes/footer.php' ?>






