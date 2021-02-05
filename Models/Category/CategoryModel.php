<?php 

	namespace HUYLAND\Models\Category;
	
	use HUYLAND\Core\Model;

	class CategoryModel extends Model 
	{
		protected $id;
		protected $tenloai;
		protected $trangthai;

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getTenLoai()
		{
			return $this->tenloai;
		}

		public function setTenLoai($tenloai)
		{
			$this->tenloai = $tenloai;
		}
		public function getTrangThai()
		{
			return $this->trangthai;
		}

		public function setTrangThai($trangthai)
		{
			$this->trangthai = $trangthai;
		}

	}

 ?>