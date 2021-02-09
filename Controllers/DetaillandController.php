<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    class DetaillandController extends Controller
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
        public function index($id)
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            $land = new LandModel();

            $d['category'] = $this->repoCate->getAll($category);

            $d['detail'] = $this->repoLand->get($id);
            
            $this->set($d);
            $this->render("land_detail");
        }
    }

?>