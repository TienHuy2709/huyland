<?php 

	namespace HUYLAND\Models;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\TaskModel;

	class TaskResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('tasks', 'id', new TaskModel);
		}

	}

 ?>