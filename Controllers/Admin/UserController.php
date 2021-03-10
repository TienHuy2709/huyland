<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\User\UserModel;
    use HUYLAND\Models\User\UserRepository;

    class UserController extends Controller
    {

        private $repoUser;
        private $reso;
        
        public function __construct()
        {
            if(!isset($_SESSION["id_admin"])){
                header("Location: " . WEBROOT . "admin/log/login");
            }
            else{
              $this->repoUser= new UserRepository();
              $this->reso = new ResourceModel();
            }
            
        }
        public function index()
        {
            $user = new UserModel();
            
            $d['users'] = $this->repoUser->getAll($user);

            $this->set($d);
            $this->render("table_user");
        }
        public function delete($id)
        {
            $user = new UserModel();
            
            $user->id = $id;

            if ($this->repoUser->delete($user))
            {
                 header("Location: " . WEBROOT . "admin/user/index");
            }

        }

        public function edit($id)
        {
            $user = new UserModel();

            extract($_POST);

            $d['user'] = $this->repoUser->get($id);
            
            if (isset($email))
            {
                $user->id = $id;
                $user->ten = $ten;
                $user->email = $email;
                $user->sdt = $sdt;
                $matkhau = md5($matkhau);
                $user->matkhau = $matkhau;

                if ($this->repoUser->update($user))
                {
                   header("Location: " . WEBROOT . "admin/user/index");
                }

            }

            $this->set($d);
            $this->render("edit_user");

        }
         
    }

?>