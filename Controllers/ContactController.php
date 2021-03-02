<?php

    //Kế thừa Controller 
    namespace HUYLAND\Controllers;
    
    use HUYLAND\Core\Controller;
    use HUYLAND\Core\ResourceModel;
    use HUYLAND\Models\Category\CategoryModel;
    use HUYLAND\Models\Category\CategoryRepository;
    use HUYLAND\Models\Contact\ContactModel;
    use HUYLAND\Models\Contact\ContactRepository;
    class ContactController extends Controller
    {
        private $repoCate;
        private $reso;
        
        public function __construct()
        {
            $this->repoCate = new CategoryRepository();
            $this->repoCon = new ContactRepository();
            $this->reso = new ResourceModel();
        }
        public function index()
        {
            $category = new CategoryModel();
            $d['category'] = $this->repoCate->getAll($category);
            $this->set($d);
            $this->render("contact");
        }

        public function add()
        {
            $contact = new ContactModel();

            extract($_POST);
            $contact->ten = $ten;
            $contact->email = $email;
            $contact->noidung = $noidung;

            if ($this->repoCon->add($contact))
            {
                header("Location: " . WEBROOT . "contact/index");
            }
            else $this->render("contact/index");

        }
    }

?>