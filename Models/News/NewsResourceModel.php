<?php 

	namespace HUYLAND\Models\News;

	use HUYLAND\Core\ResourceModel;
	use HUYLAND\Models\News\NewsModel;

	class NewsResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('tintuc', 'id', new NewsModel);
		}

	}

 ?>