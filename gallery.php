<?php 
       $title = 'Serach' ;
       require_once 'includes/galleryheader.php';
       require_once 'includes/header.php';
       require_once 'db/conn.php';
	   $results = $crud->getcategory();

       if(isset($_POST['submit'])){
      
        $cat_name = $_POST['cat_name'];
        $isSuccess = $crud->insertcategory($cat_name);
       }
        ?>
	
<h1 class="text-center text-secondary">Search you needs</h1>

<table class="table">
        <tr>
      
            <th>Category</th>
            <th>Category Name</th>
            
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['cat_id'] ?></td>
                <td><?php echo $r['cat_name'] ?></td>
             
               
           </tr> 
		   <?php }?>
    </table>

    <button type="button" class="btn btn-outline-dark me-2"  onclick="document.location='admin.php'"> Back to admin page</button> 
  

<div class="galleryfooter"></div>
<?php require_once 'includes/footer.php' ?>