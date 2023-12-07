<?php
include "header.php";
include "leftside.php";
 ?>
<?php
$comment = new comment();
if (isset($_GET['user_id'])|| $_GET['user_id']!=NULL){
    $userA_id = $_GET['user_id'];
    }
    $delete_member = $comment  -> delete_member($userA_id);
    header('Location:memberlist.php');
?>