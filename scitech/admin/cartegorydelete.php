<?php
include "header.php";
include "leftside.php";
 ?>
<?php
$cartegory = new cartegoty();
if (!isset($_GET['danhmuc_id'])|| $_GET['danhmuc_id']==NULL){
    echo "<script>window.location = 'cartegorylist.php'</script>";
	 }
else {$danhmuc_id = $_GET['danhmuc_id'];
    }
    $delete_cartegory = $cartegory  -> delete_cartegory($danhmuc_id);
    header('Location:cartegorylist.php');
?>