<div class="row2">
         <div class="row2 font_title mb">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=listsp" method="post">
              <input type="text" name="kyw">
              <select name="iddm" id="">
                <option value="0" slected>Tất cả </option>
              <?php 
                 foreach ($listdanhmuc as $danhmuc) {
                 extract($danhmuc);
                 echo '<option value="'.$id.'">'.$name.'</option>';
                   }
              ?>
            </select>
            <input type="submit" name="listok" value="tim kiem">
            </form>
           <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN Sản Phẩm</th>
                <th>GIÁ</th>
                <th>HÌNH</th>
                <th>LƯỢT XEM</th>

                <th></th>
            </tr>
            <?php
foreach ($listsanpham as $sanpham) {
extract($sanpham);
$suasp="index.php?act=suasp&id=".$id;
$xoasp="index.php?act=xoasp&id=".$id;
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
$hinh="<img src='".$hinhpath."' width='80'height='80'>";
}else{
  $hinh="no photo";
}

echo '<tr>
<td><input type="checkbox" name=" id=""></td>
<td>'.$id.'</td>
<td>'.$name. '</td>
<td>'.$hinh. '</td>
<td>'.$price. '</td>
<td>'.$luotxem. '</td>
<td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
</tr>';
}
?>
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>