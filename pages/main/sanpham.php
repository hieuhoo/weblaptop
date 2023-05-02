<p></p>
<?php
	  $sql_chitiet="SELECT * FROM   tbl_sanpham ,tbl_danhmuc  WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]'  LIMIT 1";
       $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
  		while($row_chitiet= mysqli_fetch_array(  $query_chitiet)){
      
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="100%" height="300px"  src="admincp/modules/quanlysp/uploads/<?php  echo $row_chitiet['hinhanh']?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham= <?php echo $row_chitiet['id_sanpham']?>">
		<div class="chitiet_sanpham">
			<h3 style="margin: 0;">Tên sản phẩm :<span style="color:red;"> <?php  echo $row_chitiet ['tensanpham']?></span></h3>
			<br>
			<!-- <p>Mã sản phẩm : <?php  echo $row_chitiet ['masp']?></p> -->
			<p>Giá sản phẩm :<span style="color:red;font-size: 20px;"> <?php  echo number_format( $row_chitiet ['giasp'],0,',','.') . 'đ'?></span></p>
			<p>Số lượng: <span style="color:red;font-size: 20px;"><?php  echo $row_chitiet ['soluong']?></span></p>
		
			<p>Danh mục sản phẩm :<span style="color:red;font-size: 20px;"> <?php  echo $row_chitiet ['tendanhmuc']?></span></p>
			
			<p><input class="addtocart" name="themgiohang" type="submit" value="Thêm vào giỏ" name=""></p>
			
		</div>
	</form>
</div>
<div class="clear"></div>
<br>
<div class="tabs">
	  <ul id="tabs-nav">
	    <li><a href="#tab1">Thông số kĩ thuật</a></li>
	    <li><a href="#tab2">Thông tin sản phẩm</a></li>
	   
	  
	  </ul> 
	  <div id="tabs-content">
	    <div id="tab1" class="tab-content">
	      	<?php  echo $row_chitiet ['tomtat']?>
	    </div>
	    <div id="tab2" class="tab-content">
	     	 <?php  echo $row_chitiet ['noidung']?>
	    </div>
	   
	  
	  </div> 
</div> 

<?php
	}
?>