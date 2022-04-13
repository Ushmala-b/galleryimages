<?php 
       $title = 'Add Category' ;
       require_once 'includes/galleryheader.php';
       require_once 'includes/header.php';
       require_once 'db/conn.php';
      require_once 'includes/auth_check.php';
     
       $results = $crud->getcategory();

       if(isset($_POST['submit'])){
      
        $cat_name = $_POST['cat_name'];
        $isSuccess = $crud->insertcategory($cat_name);
       }
        ?>

<div class="container">
    
<h3>Add category List</h3>


<form method="post" action="categorylist.php" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="lastname">Category</label>
            <input required type="text" class="form-control" id="cat_name" name="cat_name">
        </div>

        </div >
        <br>
        <div class="text-center">
<button type="submit" name="submit" class="btn btn-dark ">Submit</button>
        </div>
    </form>

<br><br>
    <button type="button" class="btn btn-outline-dark me-2"  onclick="document.location='categorylist.php'"> View Category List</button> 
    
  
    
	<div class="galleryfooter"></div>

<?php require_once 'includes/footer.php' ?>