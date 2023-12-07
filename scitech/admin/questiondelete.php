<?php
include "header.php";
include "leftside.php";
 ?>
<?php
$comment = new comment();
if (!isset($_GET['question_id'])|| $_GET['question_id']==NULL){
    echo "<script>window.location = 'cartegorylist.php'</script>";
	}
else {$question_id = $_GET['question_id'];
    }
    $delete_question = $comment  -> delete_question($question_id);
    header('Location:questionlist.php');
?>