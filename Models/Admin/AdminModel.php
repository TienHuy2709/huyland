<?php 

	namespace HUYLAND\Models\Admin;
	
	use HUYLAND\Core\Model;
	
	class AdminModel extends Model 
	{
		protected $id;
		protected $email;
		protected $trangthai;
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