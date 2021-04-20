<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    class LandController extends Controller
    {
        private $repoCate;
        private $repoLand;
        private $reso;
        
        public function __construct()
        {
            if(!isset($_SESSION["id_admin"])){
                header("Location: " . WEBROOT . "admin/log/login");
            }
            else{
                $this->repoCate = new CategoryRepository();
                $this->repoLand = new LandRepository();
                $this->reso = new ResourceModel();
            }
            
        }
        public function index($page)
        {
            /*require(ROOT . 'Models/Task.php');*/
            $_GET["page"] = $page;
            $p = 5;
            $count = $this->repoLand->countLand($p);
            $count = ceil($count/$p);

            $d["page"] = $count;
            
            $category = new CategoryModel();
            $land = new LandModel();

            $d['category'] = $this->repoCate->getAll($category);

            $d['lands'] = $this->repoLand->getAll($land);
            $d['namelands'] = $this->reso->getAddress();
            
            $this->set($d);

            $this->render("table_land");
        }

        public function delete($id){
            $land = new LandModel();
            
            $land->id = $id;

            if ($this->repoLand->delete($land))
            {
                 header("Location: " . WEBROOT . "admin/land/index/0");
            }
        }

        public function add(){
            $category = new CategoryModel();
          $d['category'] = $this->repoCate->getAll($category);
          $this->set($d);
          extract($_POST);
          $land = new LandModel();
          if (isset($_POST['submitLand'])){
           $land->tendat = $tendat;
           $land->thanhpho = $thanhpho;
           $land->diadiem = $diadiem;
           $land->toado = $toado;
           $land->gia = $gia;
           $land->dientich = $dientich;
           $land->mota = $mota;
           $land->thongtin = $thongtin;
           $land->sdt = $sdt;
           $land->nguoiban = $nguoiban;
           $land->thoigian = date('Y-m-d H:i:s');
           $land->hot = isset($_POST["hot"]) ? 1:0;
           $land->loai = $loai;
           $land->idloai = $idloai;
           $land->hinhanh = "";
           $land->iduser = "";
           $filename = "";
           $name = array();
            $tmp_name = array();
            $error = array();
            $ext = array();
            $size = array();
           if($this->repoLand->update($land)){
            $id=$this->reso->getNewID();
            mkdir(ROOT."asset/products/$id", 0700);

            foreach ($_FILES['file']['name'] as $file) {
              $name[] = $file;
            }
            foreach ($_FILES['file']['tmp_name'] as $file) {
              $tmp_name[] = $file;
            }
            foreach ($_FILES['file']['error'] as $file) {
              $error[] = $file;
            }
          //Phần này lấy giá trị ra từng mảng nhỏ
            for ($i = 0; $i < count($name); $i++) {
              if ($error[$i] < 0) {
                echo "Lỗi: " . $error[$i];
              } else
              {
                $temp = preg_split('/[\/\\\\]+/', $name[$i]);
                $filename = $temp[count($temp) - 1];
                $upload_dir = ROOT."asset/products/$id/";
                $upload_file = $upload_dir . $filename;
                if (file_exists($upload_file)) {
                  echo 'File đã tồn tại';
                } 
                else {
                  if (move_uploaded_file($tmp_name[$i], $upload_file)) {

                  } 
                  else echo 'loi';
                }
              } //End khoi cau lenh up file va them vao CSDL;
            } //End vong lap for cho tat ca cac file;
              $filename = implode(',',$name);
              $this->reso->uploadAnh($filename,$id);
            header("Location: " . WEBROOT . "admin/land/index/0");
          }
            else echo "Đã xảy ra lỗi !!!. <a href='".WEBROOT."admin/land/add'>Quay lại</a>";
          }
          
          $this->render("create-edit-land");
        }

        public function edit($id){

            $land = new LandModel();
            $category = new CategoryModel();
            extract($_POST);

            $d['category'] = $this->repoCate->getAll($category);
            $d['land'] = $this->repoLand->get($id);
            $this->set($d);
          $land = new LandModel();
          if (isset($_POST['submitLand'])){
            $land->id = $id;
           $land->tendat = $tendat;
           $land->thanhpho = $thanhpho;
           $land->diadiem = $diadiem;
           $land->toado = $toado;
           $land->gia = $gia;
           $land->dientich = $dientich;
           $land->mota = $mota;
           $land->thongtin = $thongtin;
           $land->sdt = $sdt;
           $land->nguoiban = $nguoiban;
           $land->thoigian = date('Y-m-d H:i:s');
           $land->hot = isset($_POST["hot"]) ? 1:0;
           $land->loai = $loai;
           $land->idloai = $idloai;
           $land->hinhanh = $d['land']->hinhanh;
           $land->iduser = "";
           $filename = "";
           $name = array();
            $tmp_name = array();
            $error = array();
            $ext = array();
            $size = array();
           if($this->repoLand->update($land)){
            foreach ($_FILES['file']['name'] as $file) {
              $name[] = $file;
            }
            foreach ($_FILES['file']['tmp_name'] as $file) {
              $tmp_name[] = $file;
            }
            foreach ($_FILES['file']['error'] as $file) {
              $error[] = $file;
            }
          //Phần này lấy giá trị ra từng mảng nhỏ
            for ($i = 0; $i < count($name); $i++) {
              if ($error[$i] < 0) {
                echo "Lỗi: " . $error[$i];
              } else
              {
                $temp = preg_split('/[\/\\\\]+/', $name[$i]);
                $filename = $temp[count($temp) - 1];
                $upload_dir = ROOT."asset/products/$id/";
                $upload_file = $upload_dir . $filename;
                if (file_exists($upload_file)) {
                  echo 'File đã tồn tại';
                } 
                else {
                  if (move_uploaded_file($tmp_name[$i], $upload_file)) {

                  } 
                  else echo 'loi';
                }
              } //End khoi cau lenh up file va them vao CSDL;
            } //End vong lap for cho tat ca cac file;
              $filename = implode(',',$name);
              if($filename!="") $this->reso->uploadAnh($filename,$id);
            header("Location: " . WEBROOT . "admin/land/index/0");
          }
            else echo "Đã xảy ra lỗi !!!. <a href='".WEBROOT."admin/land/eidt/$id'>Quay lại</a>";
          }
          
          $this->render("create-edit-land");
        }

    }

?>