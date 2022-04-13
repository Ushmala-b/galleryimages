
<?php
include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       
    <link rel="stylesheet" href="css/style.css" />
     <!-- Custom styles for this template -->
     <link href="headers.css" rel="stylesheet">

<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Gallery <?php echo $title ?></title>

  </head>
  <body>
  
  <header class="p-3 bg-dark text-white">
  
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
        <a  href="gallery.php" class="navbar-brand text-warning px-5 ">Gallery</a>
         <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
         
         <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
       


        
         <li>       
        <?php 
              if(isset( $_SESSION['usertype']) && $_SESSION['usertype']=='admin'){
          ?>
      <a class="nav-link px-2 text-white" href="addcategory.php">Category</a>
      <?php } ?>  
         </li>
         <li>       
        <?php 
              if(isset( $_SESSION['usertype']) && $_SESSION['usertype']=='admin'){
          ?>
      <a class="nav-link px-2 text-white" href="userprofile.php">User Profile </a>
      <?php } ?>  
         </li>
         <li>       
        <?php 
              if(isset( $_SESSION['usertype']) && $_SESSION['usertype']=='admin'){
          ?>
      <a class="nav-link px-2 text-white" href="newimage.php">Add Image </a>
      <?php } ?>  
         </li>
</ul>
  

      <div  class="navbar-nav  ml-auto">
         

      <?php 
              if(!isset($_SESSION['userid'])){
          ?>
           <button type="button" class="btn btn-outline-light me-2"  onclick="document.location='login.php'"> Login </button> 
          <?php } else { ?>
           
            <button type="button" class="btn btn-outline-light me-2"  onclick="document.location='logout.php'"> Logout </button>
          <?php } ?>

          </div>
   
      </div>
      

         
    
  </header>
  <div class="container  main-content">