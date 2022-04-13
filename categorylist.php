<?php 
       $title = 'Category List' ;
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
<h3> Category List</h3>

<table class="table">
        <tr>
      
            <th>Category</th>
            <th>Category Name</th>
            
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['cat_id'] ?></td>
                <td><?php echo $r['cat_name'] ?></td>
             
                <td>
                 
                 
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['cat_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
           </tr> 
		   <?php }?>
        
        </table>

        <div class="text-center">
           <button type="button" class="btn btn-outline-dark me-2"  onclick="document.location='addcategory.php'"> Back to Category</button> 
           </div>
  

<div class="galleryfooter"></div>
<?php require_once 'includes/footer.php' ?>