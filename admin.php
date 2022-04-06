<?php 
       $title = 'Serach' ;
    
       require_once 'includes/header.php';
       require_once 'db/conn.php';

        // Get all attendees
    $results = $crud->getuserprofile();
    
    $results1 = $crud->getcategory();



  ?>

    

<h3>User Profile List</h3>

    <table class="table">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['user_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
               <!--
                <td>
                    <a href="viewprofile.php?id=<?php echo $r['user_id'] ?>" class="btn btn-dark">View</a>
                    <a href="edit.php?id=<?php echo $r['user_id'] ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['user_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
        -->
           </tr> 
        <?php }?>
    </table>


    
<h3>Add category List</h3>


<form method="post" action="gallery.php" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="lastname">Category</label>
            <input required type="text" class="form-control" id="cat_name" name="cat_name">
        </div>

        </div >
        <br>
        <div class="text-center">
<button type="submit" name="submit" class="btn btn-dark btn-block">Submit</button>
        </div>
    </form>

    <div class="categoryimage container">

    <h3>Add images</h3>


<form method="post" action="category.php" enctype="multipart/form-data">
        
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
    </div>
    
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>



























<div class="galleryfooter"></div>


<?php require_once 'includes/footer.php' ?>