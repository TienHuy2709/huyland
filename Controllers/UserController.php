<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    use HUYLAND\Models\User\UserModel;
    use HUYLAND\Models\User\UserRepository;

    class UserController extends Controller
    {
        private $repoCate;
        private $repoLan;
        private $repoUser;
        private $reso;
        
        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->repoUser= new UserRepository();
            $this->repoLan= new LandRepository();
            $this->reso = new ResourceModel();
        }

        public function login()
        {
            $category = new CategoryModel();
            $d['category'] = $this->repoCate->getAll($category);
            $this->set($d);
            $user = new UserModel();
            extract($_POST);

            if (isset($email))
            {
                $user->email=$email;
                $matkhau = md5($matkhau);
                $user->matkhau = $matkhau;
                $list = $this->repoUser->login($user);

                 if (isset($list->id))
                 {
                 	$_SESSION["id_user"] = $list->id;
                    header("Location: " . WEBROOT . "home/index");
                 }

                 else{
                 	header("Location: " . WEBROOT . "user/login");
                 }

            }

            $this->render("login");
        }

        public function logout(){
        	unset($_SESSION["id_user"]);
        	header("Location: " . WEBROOT . "home/index");
        }

         public function create(){
        	$category = new CategoryModel();
            $d['category'] = $this->repoCate->getAll($category);
            $this->set($d);
            $user = new UserModel();
            extract($_POST);

            if (isset($email))
            {
                $user->email=$email;
                $user->ten=$ten;
                $user->sdt=$sdt;
                $matkhau = md5($matkhau);
                $user->matkhau = $matkhau;
                 if ($this->repoUser->update($user))
                 {
                 	$_SESSION["id_user"] = $this->reso->getNewID();
                  	header("Location: " . WEBROOT . "home/index");
                 }

                else{
                  	header("Location: " . WEBROOT . "user/create");
                 }

            }

            $this->render("createUser");
        }

        public function createLand(){
          if(!isset($_SESSION["id_user"])){
              echo "Bạn chưa đăng nhập. <a href='".WEBROOT."user/login'>Đăng nhập ngay</a>";
          }
          else{
          $category = new CategoryModel();
          $d['category'] = $this->repoCate->getAll($category);
          $this->set($d);
          extract($_POST);
          $land = new LandModel();
          if (isset($_POST['submitLand'])){
           $land->tendat = $tendat;
           $land->thanhpho = $thanhpho;
           $land->diadiem = $diadiem;
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
           $land->iduser = $_SESSION["id_user"];
           $filename = "";
           $name = array();
            $tmp_name = array();
            $error = array();
            $ext = array();
            $size = array();
           if($this->repoLan->update($land)){
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
            header("Location: " . WEBROOT . "detailland/index/$id");
          }
            else echo "Đã xảy ra lỗi !!!. <a href='".WEBROOT."user/createLand/'>Quay lại</a>";
          }
          
          $this->render("postLand");
          }
        }
      }

?>