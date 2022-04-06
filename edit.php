    
<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 



    if(!isset($_GET['id']))
    {
        include 'includes/errormessage.php';
        header("Location: viewprofile.php");
    }
    else{
        $id = $_GET['id'];
        $userprofile = $crud->getuserprofile();  
?>

<form method="post" action="editpost.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $userprofile['user_id'] ?>" />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control"value="<?php echo $userprofile['firstname'] ?>"  id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" value="<?php echo $userprofile['lastname'] ?>"  id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control" value="<?php echo $userprofile['firstname'] ?>"  id="dob" name="dob">
        </div>
        
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" value="<?php echo $userprofile['emailaddress'] ?>"  id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input required type="password" class="form-control" value="<?php echo $userprofile['password'] ?>" id="password"  name="password" aria-describedby="passwordHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $userprofile['contactnumber'] ?>"  id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
     

        <div class="mb-3">
  <label for="image" class="form-label" value="<?php echo $userprofile['profile_photo'] ?>"  for="image">Choose your Profile Picture</label>
  <input class="form-control form-control-sm" id="image" name="image" type="file">
</div>
        <button type="submit" name="submit" class="btn btn-dark btn-block">Submit</button>
    </form>


    <?php } ?>




<?php require_once 'includes/footer.php'; ?>