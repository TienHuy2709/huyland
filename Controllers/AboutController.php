<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    class AboutController extends Controller
    {
        private $repoCate;
        private $reso;
        
        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->reso = new ResourceModel();
        }
        public function index()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();

            $d['category'] = $this->repoCate->getAll($category);

            $this->set($d);
            $this->render("about");
        }
    }

?>