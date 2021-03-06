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

        public function allId($id){

            $category = new CategoryModel();

            $d['category'] = $this->repoCate->getAll($category);

            $this->set($d);
            $this->render("list_category");
        }


    }

?>