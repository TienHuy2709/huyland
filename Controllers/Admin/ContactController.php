<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers\Admin;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Contact\ContactModel;
    use HUYLAND\Models\Contact\ContactRepository;
    class ContactController extends Controller
    {
        private $repoContact;
        private $reso;
        
        public function __construct()
        {
            if(!isset($_SESSION["id_admin"])){
                header("Location: " . WEBROOT . "admin/log/login");
            }
            else {
            $this->repoContact = new ContactRepository();
            $this->reso = new ResourceModel();
            }
            
        }
        public function index()
        {
             $contact = new ContactModel();
            
            $d['contacts'] = $this->repoContact->getAll($contact);

            $this->set($d);
            $this->render("table_contact");
        }

        public function delete($id)
        {
            $contact = new ContactModel();
            
            $contact->id = $id;

            if ($this->repoContact->delete($contact))
            {
                 header("Location: " . WEBROOT . "admin/contact/index");
            }

        }

        public function deleteAll()
        {
            $contact = new ContactModel();
            
            if ($this->repoContact->deleteAll($contact))
            {
                 header("Location: " . WEBROOT . "admin/contact/index");
            }

        }
    }

?>