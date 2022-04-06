<?php
    $title = 'Login'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username = strtolower(trim($_POST['username']));
  $password = $_POST['password'];
  //$new_password = md5($password.$username);

  $result = $user->getuser($username,$password);

  $_SESSION['usertype'] = $result['user_type'];
    if($result['user_type']=='admin'){
        $_SESSION['username'] = $result['email'];
        $_SESSION['userid'] = $result['user_id'];
       header("Location: admin.php");
    }
    elseif($result['user_type']=='user'){
        $_SESSION['username'] = $result['email'];
        $_SESSION['userid'] = $result['user_id'];
        header("Location: category.php");
    }
    else{
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    }
  }
?>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Gallery</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;"    action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"     >

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <table class="table table-sm">
            <tr>
                <td><label for="username">Username:  </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password:  </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
        </table><br/><br/>

            <div class="pt-1 mb-4">
              <!--<button class="btn btn-dark btn-lg btn-block" type="submitt" value="Login"> Login</button>-->
              <input type="submit" value="Login" class="btn btn-dark btn-block">
            </div>
            <p>Don't have an account? <a href="signup.php" class="link-info">Register here</a></p>
          </form>
         </div>
       </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://i.pinimg.com/736x/e9/18/bc/e918bcf8707a0015bb472be2a0395cc3.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

<div class="galleryfooter"></div>

<?php include_once 'includes/footer.php'?>