<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\News\NewsModel;
    use HUYLAND\Models\News\NewsRepository;

    class NewController extends Controller
    {
        private $repoNew;
        private $reso;
        private $repoCate;

        public function __construct()
        {
            if(!isset($_SESSION["id_admin"])){
                header("Location: " . WEBROOT . "admin/log/login");
            }
            else {
                $this->repoNew = new NewsRepository();
                $this->reso = new ResourceModel(); 
            }
            
        }
        public function index()
        {

            $new = new NewsModel();
            $d['news'] = $this->repoNew->getAll($new);
            $this->set($d);
            $this->render("table_new");
        }

        public function add()
        {
            $new = new NewsModel();

            extract($_POST);

            if (isset($ten))
            {
                $new->hinhanh = $_FILES['hinhanh']['name'];
                $new->ten = $ten;
                $new->noidung = $noidung;
                $new->ngaydang = date('Y-m-d H:i:s');
                $new->luotxem = 0;
                if ($this->repoNew->update($new))
                {
                    move_uploaded_file($_FILES['hinhanh']["tmp_name"], ROOT."asset/news/".$new->hinhanh);
                    header("Location: " . WEBROOT . "admin/new/index");
                }

            }

            $this->render("create-edit-new");
        }

        public function delete($id){

           /*require(ROOT . 'Models/Task.php');*/
            $new = new NewsModel();
            
            $new->id = $id;

            if ($this->repoNew->delete($new))
            {
                 header("Location: " . WEBROOT . "admin/new/index");
            }
        }

        public function edit($id){

             /*require(ROOT . 'Models/Task.php');*/
            $new = new NewsModel();

            extract($_POST);

            $d['new'] = $this->repoNew->get($id);
            
            if (isset($ten))
            {
                $new->id = $id;
                if($_FILES['hinhanh']['name']=="") $new->hinhanh=$d['new']->hinhanh;
                else$new->hinhanh = $_FILES['hinhanh']['name'];
                $new->ten = $ten;
                $new->noidung = $noidung;
                $new->ngaydang = date('Y-m-d H:i:s');
                $new->luotxem = 0;

                if ($this->repoNew->update($new))
                {
                    move_uploaded_file($_FILES['hinhanh']["tmp_name"], ROOT."asset/news/".$new->hinhanh);
                   header("Location: " . WEBROOT . "admin/new/index");
                }

            }

            $this->set($d);
            $this->render("create-edit-new");
        }

    }

?>