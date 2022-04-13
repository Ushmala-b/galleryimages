<?php 
  $title = 'newimage' ;
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  require_once 'includes/auth_check.php';

  $results1 = $crud->getcategory();

?>
 <h3>Add new images</h3>

   <form method="post" action="gallery.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="image" class="form-label" for="image">Add image for Category</label>
        <input class="form-control form-control-sm" id="cat_image" name="cat_image" type="file">
      </div>
      <div class="form-group">
        <label for="image_title">Image Title</label>
        <input required type="text" class="form-control" id="image_title" name="image_title">
      </div>
      <div class="form-group">
         <label for="exampleFormControlTextarea1">Image Description</label>
         <textarea class="form-control" id="image_desc" name="image_desc" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="specialty">Select category</label>
        <select class="form-control" id="cat_id" name="cat_id">
            <?php while($r = $results1->fetch(PDO::FETCH_ASSOC)) {?>
              <option value="<?php echo $r['cat_id'] ?>   "><?php echo $r['cat_name'] ?></option>
            <?php }?>
        </select>
      </div>
      <br>
      <div class="text-center">
          <button type="submit" name="submit2" class="btn btn-dark btn-block">Submit</button>
      </div>
   </form>
 
<div class="galleryfooter"></div>
<?php require_once 'includes/footer.php' ?>