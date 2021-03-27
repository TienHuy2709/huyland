<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Land\LandModel;
    use HUYLAND\Models\Land\LandRepository;
    use HUYLAND\Models\News\NewsModel;
    use HUYLAND\Models\News\NewsRepository;
    class HomeController extends Controller
    {
        private $repoCate;
        private $repoLand;
        private $repoNew;
        private $reso;
        
        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->repoLand = new LandRepository();
            $this->repoNew = new NewsRepository();
            $this->reso = new ResourceModel();
            $_COOKIE["dat"] = array();
        }
        public function index()
        {
            /*require(ROOT . 'Models/Task.php');*/
            $category = new CategoryModel();
            $land = new LandModel();
            $new = new NewsModel();
            $d['category'] = $this->repoCate->getAll($category);
            $d['city'] = $this->reso->getCity();
            $d['landhot'] = $this->repoLand->allIf($land,'hot');
            $d['news'] = $this->repoNew->getAll($new);

            $this->set($d);
            $this->render("index");
        }
        public function search()
        {
             /*require(ROOT . 'Models/Task.php');*/
            extract($_POST);
            $category = new CategoryModel();
            $land = new LandModel();
            
            $land->tendat = $tendat;
            $land->loai = $loai;
            $land->thanhpho = $thanhpho;
            $land->idloai = $idloai;
            $land->dientich = $dientich;
            $land->gia = $gia;

            $d['category'] = $this->repoCate->getAll($category);

            $d['city'] = $this->reso->getCity();

            $d['lands'] = $this->repoLand->findByKey($land);
            
            $this->set($d);
            $this->render("search_land");
        }

        public function addHeart($id){
            $land = $this->repoLand->findName($id);
            $land = array("id"=>$id,"tendat"=>$land->tendat);
            
            setcookie('dat_'.$id, serialize($land), time() + (86400 * 7), "/"); // 86400 = 
            
        }

        public function deleteHeart(){
            $id = isset($_POST["id"]) ? $_POST["id"] : "";
            setcookie('dat_'.$id, "", time() - (86400 * 7), "/"); // 86400 = 
            
        }

        public function listCookie(){

            $data = array();
            for($i =1;$i<1000;$i++){
                if(isset($_COOKIE['dat_'.$i])){
                    $data[$i] = unserialize($_COOKIE['dat_'.$i], ["allowed_classes" => false]);
                }
            }
            $output= '';
            $id_delete ='';
            foreach ($data as $key => $value) {
                foreach ($value as $key1=>$value1) {
                    if($key1=="id"){
                        $output .= "<li><div style='width: 83%; float:left'><a href=".WEBROOT."detailland/index/".$value1." ><p>";
                        $id_delete =$value1;
                    }
                    if($key1=="tendat"){
                       $output .= $value1."</p></a>";
                       $output .= "</div>
                       <button class='btn btn-outline-danger btn-sm deleteCookie' style='max-width: 13%; float:left; text-align: center'  data-id_delete ='$id_delete'><i class='oi oi-circle-x'></i></button></li> ";
                       $output .= "";
                    }
                    // if($key1=="id") echo "id_dat :".$value1."<br>";
                    //  if($key1=="tendat") echo "ten_dat :".$value1."<br>";
                }
            }
            echo $output;                           
        }

         public function countCookie(){
            $count = 0;
             for($i =1;$i<1000;$i++){
                if(isset($_COOKIE['dat_'.$i])){
                    $count ++;
                }
            }
            echo $count;
         }
    }

?>
