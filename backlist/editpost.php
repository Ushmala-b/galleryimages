<?php 
    require_once 'db/conn.php';
    require_once 'includes/header.php';


    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['phone'];
        $profile_photo = $_POST['profile_photo'];

        $user_type = 'user';

        //Call Crud function
        $result = $crud->edituserprofile($fname, $lname, $dob, $email,$password,$contact,$profile_photo,$user_type);
        // Redirect to index.php
        if($result){
            header("Location: viewprofile.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }
?>