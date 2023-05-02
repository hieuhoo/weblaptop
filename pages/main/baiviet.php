<script src="https://kit.fontawesome.com/e30bada3ef.js" crossorigin="anonymous"></script>

<?php
	  $sql_bv="SELECT * FROM   tbl_baiviet WHERE tbl_baiviet.id = '$_GET[id]' LIMIT 1";
       $query_bv = mysqli_query($mysqli, $sql_bv);      
       	$query_bv_all = mysqli_query($mysqli, $sql_bv); 
       	$row_bv_title= mysqli_fetch_array( $query_bv);
?>
<h3>Bài viết : <span style="text-align:center;text-transform: uppercase;color: red;"><?php  echo $row_bv_title['tenbaiviet']?></span> </h3>
				<ul class="baiviet">
					<?php
						while($row_bv= mysqli_fetch_array($query_bv_all)){
					?>
					<li>
							<h4><?php  echo $row_bv['tenbaiviet']?> </h4>
							<img src="admincp/modules/quanlybaiviet/uploads/<?php  echo $row_bv['hinhanh']?>">
							
								<p class="title-product"><?php  echo $row_bv['tomtat']?> </p>
								
						
						<p style="margin:10px" class="title-product"> <?php  echo $row_bv['noidung']?> </p>
					</li>
					<?php
					}
					?>
				</ul>
<div id="backtop">
            <i class="fa-sharp fa-solid fa-chevron-up"></i>
        </div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>

        //backtop
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('#backtop').fadeIn();
                }
                else {
                    $('#backtop').fadeOut();
                }
            });
            $("#backtop").click(function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 1000);
            });
        });
    </script>
    <style >
    	#backtop{
    		/*position: absolute;
/*    		right: 0;*/*/
    	}
    </style>