<?php
require_once "../model/pdo.php";
require_once "../model/danhmuc.php";
require_once "../model/sanpham.php";
require_once "../model/taikhoan.php";
require_once "../model/binhluan.php";
include "header.php";
//Controller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        //THEM DANH MUC
        case 'adddm':
            //kiem tra xem nguoi dung co click vao nut add  hay khong
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
               $tenloai=$_POST['tenloai'];
               insert_danhmuc($tenloai);
               $thongbao="Thêm mới thành công";
            }
            include "danhmuc/add.php";
            break;
            // DANH SACH DANH MUC
            case 'lisdm':
                $sql="select * from danhmuc order by  id desc";
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                //XOÁ DANH MUC
                case 'xoadm':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                    break;
                    // SUA DANH MUC
                    case 'suadm':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $dm=loadone_danhmuc($_GET['id']);
                        }
                        include "danhmuc/update.php";
                        break;
                        // UPDATE DANH MUC
                        case 'updatedm':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $tenloai=$_POST['tenloai'];
                            $id=$_POST['id'];
                            update_danhmuc($id,$tenloai);
                            $thongbao="Cập nhật thành công";
                            }
                            $thongbao="Cập nhật thành công";
                            $sql="select * from danhmuc order by id desc";
                            $listdanhmuc=loadall_danhmuc();
                            include "danhmuc/list.php";
                            break;


                            /* CONTROLLER SAN PHẨM */
                            case 'addsp':
                                //kiem tra xem nguoi dung co click vao nut add  hay khong
                                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                                $iddm=$_POST['iddm'];
                                $tensp=$_POST['tensp'];
                                $giasp=$_POST['giasp'];
                                $mota=$_POST['mota'];
                                $hinh=$_FILES['hinh']['name'];  
                                $target_dir="../upload/";
                                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                  } else {
                                // echo "Sorry, there was an error uploading your file.";
                                  }
                                  insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                                   $thongbao="Thêm mới thành công";
                                }
                                $listdanhmuc=loadall_danhmuc();
                                include "sanpham/add.php";
                                break;

                            case 'listsp':
                                if(isset($_POST['listok']) && $_POST['listok']){
                                    $kyw=$_POST['kyw'];
                                    $iddm=$_POST['iddm'];
                                }else{
                                    $kyw="";
                                    $iddm=0;
                                }
                                $listdanhmuc=loadall_danhmuc();
                            
                                $listsanpham=loadall_sanpham($kyw,$iddm);
                                include "sanpham/list.php";
                                break;
                                //XOÁ SAN PHẨM
                                case 'xoasp':
                                    if(isset($_GET['id']) && ($_GET['id']>0)){
                                        delete_sanpham($_GET['id']);
                                    }
                                $listsanpham=loadall_sanpham("",0);
                                include "sanpham/list.php";
                                    break;
                                    // SUA SAN PHAM
                                    case 'suasp':
                                        if(isset($_GET['id']) && ($_GET['id']>0)){
                                            $sanpham=loadone_sanpham($_GET['id']);
                                        }
                                        $listdanhmuc=loadall_danhmuc();
                                        include "sanpham/update.php";
                                        break;
                                        // UPDATE SAN PHAM
                                        case 'updatesp':
                                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                                $id=$_POST['id'];
                                                $iddm=$_POST['iddm'];
                                                $tensp=$_POST['tensp'];
                                               $giasp=$_POST['giasp'];
                                                $mota=$_POST['mota'];
                                               $hinh=$_FILES['hinh']['name'];  
                                               $target_dir="../upload/";
                                               $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                               if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                               //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                                 } else {
                                               // echo "Sorry, there was an error uploading your file.";
                                                 }
                                            update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                                            $thongbao="Cập nhật thành công";
                                            }
                                            $listdanhmuc=loadall_danhmuc();
                                            $listsanpham=loadall_sanpham("",0);
                                            include "sanpham/list.php";
                                            break;
                                            case 'dskh':
                                             $listtaikhoan=loadall_taikhoan();
                                             include "taikhoan/list.php";
                                             break;
                                            case 'dsbl':
                                                    $listbinhluan=loadall_binhluan(0);
                                                    include "binhluan/list.php";
                                                    break;
                                                    case 'xoabl':
                                                        if(isset($_GET['id']) && ($_GET['id']>0)){
                                                            delete_binhluan($_GET['id']);
                                                        }
                                                        $listbinhluan= loadall_binhluan(0);
                                                    include "binhluan/list.php";
                                                        break;
                                     
                     
    

        default:
        include "home.php";
            break;

    }
}else{
    include "home.php";
}

include "footer.php";

?>