<?php 

	namespace HUYLAND\Models\Category;
	
	use HUYLAND\Models\Category\CategoryResourceModel;
	
	class CategoryRepository
	{
		protected $categoryRe;
		public function __construct()
		{
			$this->categoryRe = new CategoryResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->categoryRe->all($model);
		}

		public function getAllById($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->categoryRe->allId($model,$id);
		}

		public function get($id){
			return $this->categoryRe->find($id);
		}

		public function delete($model)
		{
			return $this->categoryRe->delete($model);
		}

		public function add($model){
			return $this->categoryRe->save($model);
		}

		public function update($model){
			return $this->categoryRe->save($model);
		}

	}

 ?>