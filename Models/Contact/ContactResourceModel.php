<?php 

	namespace HUYLAND\Models\Contact;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\Contact\ContactModel;

	class ContactResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('lienhe', 'id', new ContactModel);
		}

	}

 ?>