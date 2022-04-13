<?php
    $title = 'GalleryList'; 
    session_start();
    error_reporting(0);
    require_once 'includes/galleryheader.php';
    require_once 'includes/header.php'; 
 
    require_once 'db/conn.php'; 

    // Get gallery by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
        $result = $crud-> getimgdataDetails($id);
        //$results = $crud->getimgdata();
        echo "<pre>";
    print_r($result); die;
?>

<div class="row ">
<br>

<div class="col-lg-3">
<div class="card " style="width: 18rem;">
<img src="<?php echo $result['cat_image'] ?> " class="card-img-top" > 
<div class="card-body">

<h5 class="card-title"><?php echo $result['image_title'] ?></h5>
  <p class="card-text"><?php echo $result['image_desc']; ?></p>
 
</div>
<div class="card-footer">
          <a download="<?php echo $result['cat_image']?>" href="gallery.php?image=<?php echo $result['cat_image']?>" class="btn btn-light">
          <i class="fa fa-download"></i>   Download  </a>
        </div>
      </div>
    </div>
	
    <br>
	   
	  </div>
<br/>
     
        
    <?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>