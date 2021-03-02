<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\News\NewsModel;
    use HUYLAND\Models\News\NewsRepository;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;

    class NewsController extends Controller
    {
        private $repoNew;
        private $reso;
        private $repoCate;

        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->repoNew = new NewsRepository();
            $this->reso = new ResourceModel();
        }
        public function list()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $new = new NewsModel();
            $category = new CategoryModel();
            $d['category'] = $this->repoCate->getAll($category);
            $d['news'] = $this->repoNew->getAll($new);
            $this->set($d);
            $this->render("list_blog");
        }
        public function detail($id)
        {
            /*require(ROOT . 'Models/Task.php');*/
            $new = new NewsModel();
            $category = new CategoryModel();
            
            $d['detail'] = $this->repoNew->get($id);
            $d['category'] = $this->repoCate->getAll($category);

            $this->set($d);
            $this->render("blog_detail");
        }

    }

?>