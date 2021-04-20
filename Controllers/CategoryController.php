<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    class CategoryController extends Controller
    {
        private $repoCate;
        private $repoLand;
        private $reso;
        
        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->repoLand = new LandRepository();
            $this->reso = new ResourceModel();
        }
        public function index()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            $land = new LandModel();
            
            $d['category'] = $this->repoCate->getAll($category);


            $d['name'] = "Tất cả";

            $d['lands'] = $this->repoLand->getAll($land);

            $this->set($d);
            $this->render("list_category");
        }

        public function allId($id){

            $category = new CategoryModel();
            $land = new LandModel();

            $d['category'] = $this->repoCate->getAll($category);

            $d['name'] = $this->repoCate->get($id)->tenloai;
            $d['namelands'] = $this->reso->getAddress();

            $d['lands'] = $this->repoLand->getAllByCategoryId($land,$id);

            $this->set($d);
            $this->render("list_category");
        }


    }

?>