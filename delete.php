<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: categorylist.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
       $result = $crud->deletecategory($id);
        //Redirect to list
        if($result)
        {
            header("Location: categorylist.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>

