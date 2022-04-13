<?php 
  $title = 'USerProfile' ;
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';

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
        </tr> 
        <?php }?>
    </table>

<div class="galleryfooter"></div>
<div class="galleryfooter"></div>

<?php require_once 'includes/footer.php' ?>