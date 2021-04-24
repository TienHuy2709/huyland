<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    class GetRelatedLandController extends Controller
    {
        private $repoCate;
        private $repoLand;
        private $reso;
        
        public function __construct()
        {
            $this->repoLand = new LandRepository();
            $this->reso = new ResourceModel();
        }
        public function index($id)
        {
            /*require(ROOT . 'Models/Task.php');*/
            extract($_POST);
            
            $land = new LandModel();

            $d['namelands'] = $this->reso->getAddress();

            $d['detail'] = $this->repoLand->get($id);

            $d['lands'] = $this->repoLand->getAll($land);

            $landRelated = '<div class="related-land owl-carousel">';

            $dat=(explode(' ',$d['detail']->toado));
            if(count($dat) <= 1){
                return $landRelated .= "</div>";
            }
            $dem = 0;
            foreach (array_reverse($d['lands']) as $value) {
                $anh = explode(",", $value->hinhanh);
                if(!empty($value->toado) && $value->thanhpho == $d['detail']->thanhpho && $value->id != $d['detail']->id ){
                $dat1=(explode(' ',$value->toado));
                $km1 = $this->countKM($dat[0],$dat1[0],$dat[1],$dat1[1]);
                if($km1 <= $km){
                    $dem++;
                    $landRelated .= "<div class='item'>
                          <div class='properties'>
                            <a href='";
                    $landRelated .="/huyland/detailland/index/";
                    $landRelated .=  $value->id."'";
                    $landRelated .=" class='img d-flex justify-content-center align-items-center' style='background-image: url(";
                    $landRelated .= "/huyland/asset/products/";
                    $landRelated .=  $value->id . "/";
                    $landRelated .=  $anh[0]. ");'>\n";
                    $landRelated .= '<div class="icon d-flex justify-content-center align-items-center ">';
                    $landRelated .= '<span class="icon-search2"></span>';
                    $landRelated .= "</div>"."</a>";
                    $landRelated .= "<div class='text p-3'><div class='d-flex'><div class='one'>";
                    $landRelated .= "<h3><a href='";
                    $landRelated .= "/huyland/detailland/index/";
                    $landRelated .=   $value->id ."'";
                    $landRelated .= "title='". $value->tendat."'>";
                    $landRelated .=  $value->tendat . "</a></h3>";
                    $landRelated .= "<p>";
                    foreach ($d['namelands'] as $valueAddress) {
                      if($valueAddress->id == $value->thanhpho)
                        $landRelated .= $valueAddress->name;
                    }
                    $landRelated .= "</p>";
                    $landRelated .= "<div class='two'><span class='price'>";
                    $landRelated .= $value->gia."tỷ</span>";
                    $landRelated .= "</div></div></div></div></div></div>";
                }
           }
        }
        $landRelated .= "</div>";
        $landRelated .="<p>Số mảnh đất trong bán kính $km : $dem</p>";
        echo $landRelated;
        
    }
    function countKM($x1,$x2,$y1,$y2){
            $longi1 = deg2rad($y1); 
            $longi2 = deg2rad($y2); 
            $lati1 = deg2rad($x1); 
            $lati2 = deg2rad($x2);
            $difflong = $longi2 - $longi1; 
            $difflat = $lati2 - $lati1; 
            $val = pow(sin($difflat/2),2)+cos($lati1)*cos($lati2)*pow(sin($difflong/2),2);
            return 6378.8 * (2 * asin(sqrt($val))); //for kilometers
        }
}

?>