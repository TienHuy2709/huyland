<?php 

	namespace HUYLAND\Models\Land;
	
	use HUYLAND\Core\Model;
	class LandModel extends Model 
	{
		protected $id;
		protected $tendat;
		protected $hinhanh;
		protected $thanhpho;
		protected $diadiem;
		protected $gia;
		protected $dientich;
		protected $mota;
		protected $thongtin;
		protected $nguoiban;
		protected $sdt;
		protected $hot;
		protected $thoigian;
		protected $loai;
		protected $idloai;

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