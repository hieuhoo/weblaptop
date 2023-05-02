<?php
	// if (isset($_GET['trang'])){
	// 		$page = $_GET['trang'];
	// 	}else{
	// 		$page ='1';
	// 	}
	// 	if($page ==''|| $page ==1){
	// 		$begin = 0;
	// 	}else{
	// 		$begin =($page * 5) - 5;
	// 	}
	  $sql_pro="SELECT * FROM   tbl_sanpham  WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham  DESC ";
       $query_pro = mysqli_query($mysqli, $sql_pro);      
       	//get tên danh mục 
       	 $sql_cate="SELECT * FROM   tbl_danhmuc  WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
       $query_cate = mysqli_query($mysqli, $sql_cate);      
       	$row_title= mysqli_fetch_array( $query_cate);
?>

<h3>Danh mục sản phẩm :<span style="text-transform:uppercase;color: red;text-align: center;"> <?php  echo $row_title['tendanhmuc']?></span></h3>
<br>
				<div class="row">
					<?php
						  while($row = mysqli_fetch_array($query_pro))  {
					?>
					
					<div class="col-md-2">
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img class="img img-responsive" width="100%" height="200px" src="admincp/modules/quanlysp/uploads/<?php  echo $row['hinhanh']?>">
							<br>
								<p class="title-product"><?php  echo $row['tensanpham']?> </p>
								<p class="price"><?php  echo number_format($row['giasp'],0,',','.') .'đ' ?> </p>	
								
						</a>
					</div>
					
					<?php
					}
					?>
			</div>
			<!-- <?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);
				 $trang = ceil($row_count/5) ;
				?> -->
			<!-- <ul class="list_trang">
					<?php 
					
					for($i=1;$i<= $trang;$i++){
					 ?>
					 	<li <?php if($i==$page) {echo  'style="background:brown"';}else{ echo '';} ?>> <a   href="index.php?trang=<?php  echo $i ?>"><?php echo $i ?></a></li>
					<?php
					}
					?>
				

				</ul> -->