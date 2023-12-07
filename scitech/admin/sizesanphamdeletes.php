<?php
include "header.php";
include "leftside.php";
 ?>
<?php
$product = new product();
if (isset($_GET['sanpham_size_id'])|| $_GET['sanpham_size_id']!=NULL){
    $sanpham_size_id = $_GET['sanpham_size_id'];
    }
    $delete_size_sanpham = $product -> delete_size_sanphams($sanpham_size_id);
    header('Location:sizesanphamlists.php?');
?>
