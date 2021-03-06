<?php 

	namespace HUYLAND\Models\Admin;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\Admin\AdminModel;

	class AdminResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('admin', 'id', new AdminModel);
		}

	}

 ?>