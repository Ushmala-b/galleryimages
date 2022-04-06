<?php
    $title = 'Signup'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
?>
    
    <div class="px-5 ms-xl-4 text-center">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Create an account</span>
        </div>

    <form method="post" action="success.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Password</label>
            <input required type="password" class="form-control" id="password"  name="password" aria-describedby="passwordHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            
        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
     <div class="mb-3">
            <label for="image" class="form-label" for="image">Choose your Profile Picture</label>
             <input class="form-control form-control-sm" id="image" name="image" type="file">
        </div>
        <button type="submit" name="submit" class="btn btn-dark btn-block">Submit</button>
    </form>

    <div class="galleryfooter"></div>

<?php require_once 'includes/footer.php'; ?>