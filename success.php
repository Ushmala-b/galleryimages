<?php
    $title = 'Success'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
     
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password= $_POST['password'];
       // $password = md5($_POST['password']);
        $contact = $_POST['phone'];
        $user_type = 'user';
     
        $orig_file = $_FILES["image"]["tmp_name"];
        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);

        $isSuccess = $crud->insertuserprofile($fname, $lname, $dob, $email,$password,$contact,$destination,'user');

        if($isSuccess){
          include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?>
    <div class="d-flex justify-content-center">
    <img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
    <div class="card " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <p class="card-text">
                Date of Birth: <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Address: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Password <?php echo $_POST['password'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
        </div>
    </div>
    </div>
    

    <div class="d-flex justify-content-center">
        <div class="pt-3 mb-4">
          <button class="btn btn-dark btn-lg btn-block" type="button" onclick="document.location='Login.php'">Login</button>
        </div>
    </div>

<div class="galleryfooter"></div>
<?php require_once 'includes/footer.php'; ?>