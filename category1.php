
<?php 
       $title = 'Serach' ;
       require_once 'includes/galleryheader.php';
       require_once 'includes/header.php';
       require_once 'db/conn.php';
       require_once 'db/config.php';
	 
	   $results = $crud->getimgdata();
     $results1 = $crud->getcategory();

     $cat_id = $_request2[$cat_id] ;
	  $results2 =$crud->getimgdatas( $cat_id);

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
		
    <li><a class="nav-link dropdown-toggle" 	data-toggle="dropdown" href="#" 	role="button" aria-haspopup="true"	aria-expanded="false"	style="color:white;">Category	</a>
    <div class="dropdown-menu">
    <?php while($r2 = $results2->fetch(PDO::FETCH_ASSOC)) { ?>
    <a href="category1.phpid=?<?php echo $r1['cat_id'] ?> ">
    <?php }?>
      <?php while($r1 = $results1->fetch(PDO::FETCH_ASSOC)) { ?>
				<?php echo $r1['cat_name'] ?> 
			  <?php }?> </a>
      </div>

      
     <li>
			<input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"	aria-label="Search">
		</li>
		</li>
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
     
    </div>
    </div>
	
    <br>
	  <?php }?> 
	  </div>
<div class="galleryfooter"></div>


<?php require_once 'includes/footer.php' ?>