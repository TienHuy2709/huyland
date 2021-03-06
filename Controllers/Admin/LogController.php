<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Admin\AdminModel;
    use HUYLAND\Models\Admin\AdminRepository;

    class LogController extends Controller
    {
        private $repoAdmin;
        private $reso;
        
        public function __construct()
        {
            $this->repoAdmin = new AdminRepository();
            $this->reso = new ResourceModel();
        }

        public function login()
        {

            $admin = new AdminModel();
            extract($_POST);

            if (isset($email))
            {
                $admin->email=$email;
                $matkhau = md5($matkhau);
                $admin->matkhau = $matkhau;
                $list = $this->repoAdmin->login($admin);

                 if (isset($list->id))
                 {
                 	$_SESSION["id_admin"] = $list->id;
                    header("Location: " . WEBROOT . "admin/home/index");
                 }

                 else{
                 	header("Location: " . WEBROOT . "admin/log/login");
                 }

            }

            $this->render("login");
        }

        public function logout(){
        	unset($_SESSION["id_admin"]);
        	header("Location: " . WEBROOT . "admin/log/login");
        }

      }

?>