<h3 style="text-align:center;text-transform: uppercase;">Tin tức mới nhất</h3>
<br>
<?php
	  $sql_bv="SELECT * FROM   tbl_baiviet WHERE tinhtrang = 1 ORDER BY id DESC";
       $query_bv = mysqli_query($mysqli, $sql_bv);      
       
?>
<div class="row">
				
					<?php
						while($row_bv= mysqli_fetch_array($query_bv)){
					?>
					<div class="col-md-3 ">
						<a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
							<img  class="img img-responsive" width="100%" height="180px"src="admincp/modules/quanlybaiviet/uploads/<?php  echo $row_bv['hinhanh']?>">
							
								<p class="title-product"><?php  echo $row_bv['tenbaiviet']?> </p>
								
						</a>
						<p style="margin:10px" class="title-product"> <?php  echo $row_bv['tomtat']?> </p>
					</div>
					<?php
					}
					?>
			
</div>