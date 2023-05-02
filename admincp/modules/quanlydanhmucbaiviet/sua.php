<?php
  $sql_sua_danhmucbv ="SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
  $query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv ); 
?>
<p>Sửa danh mục bài viết</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <?php
  while($dong= mysqli_fetch_array($query_sua_danhmucbv)){
  ?>
 <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet= <?php  echo $_GET['idbaiviet']?>">
  <tr>
    <td>Tên  danh mục bài viết </td>
    <td><input type="text" value=" <?php  echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet" ></td>

  </tr>

  <tr>
    <td>Thứ tự</td>   
    <td><input type="text" value="<?php  echo $dong['thutu'] ?> "name="thutu"></td>
  </tr>

  <tr>
  <br>
    <td colspan="2"><input style="background-color: green; color: white; cursor: pointer;"type="submit" name="suadanhmucbaiviet" value ="Cập nhật danh mục bài viết "></td>
  </tr>
</form>
<?php
}
?>
</table>
