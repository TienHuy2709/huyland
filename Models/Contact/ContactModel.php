<?php 

	namespace HUYLAND\Models\Contact;
	
	use HUYLAND\Core\Model;
	
	class ContactModel extends Model 
	{
		protected $id;
		protected $ten;
		protected $email;
		protected $noidung;


		public function __set($name, $value)
		{
			$this->{$name} = $value;
		}

		public function __get($name)
		{
			return $this->{$name};
		}

	}

 ?>