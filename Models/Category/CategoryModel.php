<?php 

	namespace HUYLAND\Models\Category;
	
	use HUYLAND\Core\Model;

	class CategoryModel extends Model 
	{
		protected $id;
		protected $tenloai;
		protected $trangthai;

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