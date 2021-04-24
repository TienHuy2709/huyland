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

            $d['name'] = "Chi tiết";

            $d['namelands'] = $this->reso->getAddress();

            $d['category'] = $this->repoCate->getAll($category);

            $d['detail'] = $this->repoLand->get($id);

            $d['lands'] = $this->repoLand->getAll($land);
            $dat=(explode(' ',$d['detail']->toado));
            /*foreach ($d['lands'] as $value) {
                if(!empty($value->toado) && $value->thanhpho == $d['detail']->thanhpho ){
                $dat1=(explode(' ',$value->toado));
                $km = $this->countKM($dat[0],$dat1[0],$dat[1],$dat1[1]);
                if($km <= 10){
                    $d['lands'][] = array_filter($d['lands'], function ($value, $key) {
                        return !empty($value->toado) && $key == 'id'; // value có giá trị và key không phải password
                    }, ARRAY_FILTER_USE_BOTH);
                }
           }
        }*/
       /* echo "<pre>";
        var_dump($d['lands']);die;*/
        $this->set($d);
        $this->render("land_detail");
    }
}

?>