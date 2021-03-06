<?php 

	namespace HUYLAND\Models\User;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\User\UserModel;

	class UserResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('nguoidung', 'id', new UserModel);
		}

	}

 ?>