<?php 

	namespace HUYLAND\Models\News;
	
	use HUYLAND\Core\Model;
	
	class NewsModel extends Model 
	{
		protected $id;
		protected $hinhanh;
		protected $ten;
		protected $noidung;
		protected $ngaydang;
		protected $luotxem;

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