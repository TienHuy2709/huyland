<?php 

	namespace HUYLAND\Models\Category;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\Category\CategoryModel;

	class CategoryResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('loaidat', 'id', new CategoryModel);
		}

	}

 ?>