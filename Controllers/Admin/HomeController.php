<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    class HomeController extends Controller
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
                $_COOKIE["dat"] = array();
            }
            
        }
        public function index()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            $land = new LandModel();

            $d['category'] = $this->repoCate->getAll($category);
            $d['city'] = $this->reso->getCity();
            $d['landhot'] = $this->repoLand->allIf($land,'');
            
            $this->set($d);
            $this->render("index");
        }
    }

?>
