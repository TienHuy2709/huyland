<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    class CategoryController extends Controller
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
                 $this->reso = new ResourceModel(); 
            }
            
        }
        public function index()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            
            $d['category'] = $this->repoCate->getAll($category);

            $this->set($d);
            $this->render("table_category");
        }

        public function add(){

            $category = new CategoryModel();

            extract($_POST);

            if (isset($tenloai))
            {
                $category->tenloai = $tenloai;
                $category->trangthai = $trangthai;

                if ($this->repoCate->update($category))
                {
                    header("Location: " . WEBROOT . "admin/category/index");
                }

            }

            $this->render("create-edit-category");
        }


        public function edit($id){

             /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();

            extract($_POST);

            $d["cate"] = $this->repoCate->get($id);

            if (isset($tenloai))
            {
                $category->id = $id;
                $category->tenloai = $tenloai;
                $category->trangthai = $trangthai;

                if ($this->repoCate->update($category))
                {
                   header("Location: " . WEBROOT . "admin/category/index");
                }

            }

            $this->set($d);
            $this->render("create-edit-category");
        }

        public function delete($id){

           /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            
            $category->id = $id;

            if ($this->repoCate->delete($category))
            {
                 header("Location: " . WEBROOT . "admin/category/index");
            }
        }


    }

?>