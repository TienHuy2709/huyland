<?php 

	namespace HUYLAND\Models\Land;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\Land\LandModel;

	class LandResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('dat', 'id', new LandModel);
		}

	}

 ?>