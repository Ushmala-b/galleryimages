
<?php 
       $title = 'Category' ;
       require_once 'includes/galleryheader.php';
       require_once 'includes/header.php';
       require_once 'db/conn.php';
      
	 
	  
     $results3 = $crud->getimgdata3();
    
     $results1 = $crud->getcategory();


     ?>

 
<div class="search">
	<h2 class="text-center text-secondary d-2">	Search you needs</h2>
  <ul class="navbar nav ml-auto"	style="color:white;background-color:black">
		
    <li><a class="nav-link dropdown-toggle" 	data-toggle="dropdown" href="#" 	role="button" aria-haspopup="true"	aria-expanded="false"	style="color:white;">Category	</a>
    <div class="dropdown-menu">
      <?php while($r1 = $results1->fetch(PDO::FETCH_ASSOC)) { ?>
				<a class="dropdown-item"href=""><?php echo $r1['cat_name'] ?> </a>
			  <?php }?> 
      </div>

      <li>
      <button type="button" class="btn btn-outline-light me-2"  onclick="document.location='outfit.php'"> Outfit</button> 
      </li>
      <li>
      <button type="button" class="btn btn-outline-light me-2"  onclick="document.location='decor.php'"> Home Decor</button> 
      </li>
      <li>
      <button type="button" class="btn btn-outline-light  me-2"  onclick="document.location='gaden.php'"> Garden</button> 
      </li>
      <li>
      <button type="button" class="btn btn-outline-light me-2"  onclick="document.location='gadget.php'">Gadget</button> 
      </li>
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
<?php while($r = $results3->fetch(PDO::FETCH_ASSOC)) { ?>
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