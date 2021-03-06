<?php 

	namespace HUYLAND\Models\User;
	
	use HUYLAND\Core\Model;
	
	class UserModel extends Model 
	{
		protected $id;
		protected $email;
		protected $ten;
		protected $sdt;
		protected $matkhau;

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