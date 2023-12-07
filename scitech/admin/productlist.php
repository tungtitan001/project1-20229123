<?php
include "header.php";
include "leftside.php";
include_once "../helper/format.php";
?>
<?php
$product = new product();
$fm = new Format();
?>
        <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Mã</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Màu</th>   
                        <th>Giá</th> 
                        <th>Chi tiết</th> 
                        <th>Công dụng</th>   
                        <th>Ảnh</th>   
                        <th>Ảnh sản phẩm</th>     
                        <th>Kích thước</th>                
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    $show_product = $product ->show_product();
                    if($show_product){$i=0; while($result = $show_product ->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['sanpham_id'] ?></td>
                        <td> <?php echo $fm -> textShorten($result['sanpham_tieude'],$limit = 30) ;?></td>
                        <td> <?php echo $result['sanpham_ma'] ?></td>
                        <td> <?php echo $result['danhmuc_ten']  ?></td>
                        <td> <?php echo $result['loaisanpham_ten']  ?></td>
                        <td> <?php echo $result['color_ten']  ?></td>
                        <td> <?php echo $result['sanpham_gia']  ?></td>
                        <td> <?php echo $fm -> textShorten($result['sanpham_chitiet'],$limit = 30) ; ?></td>
                        <td> <?php echo $fm -> textShorten($result['sanpham_baoquan'],$limit = 30) ; ?></td>                  
                        <td> <img style="width: 100px; height: 50px" src="uploads/<?php echo $result['sanpham_anh'] ?>" alt=""></td>                
                        <td><a href="anhsanphamlist.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xem</a></td>
                        <td><a href="sizesanphamlist.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xem</a></td>
                        <td><a href="productedit.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Sửa</a>|
                        <a href="productdelete.php?sanpham_id=<?php echo $result['sanpham_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                    }}
                    ?>
                </table>
            </div>        
        </div>
    </section>
    <section>
    </section>
    <script src="js/script.js"></script>
</body>
</html>  