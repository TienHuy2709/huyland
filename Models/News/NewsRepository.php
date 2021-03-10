<?php 

	namespace HUYLAND\Models\News;
	
	use HUYLAND\Models\News\NewsResourceModel;
	
	class NewsRepository
	{
		protected $newRe;
		public function __construct()
		{
			$this->newRe = new NewsResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->newRe->all($model);
		}

		public function getAllById($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->newRe->allId($model,$id);
		}

		public function get($id){
			return $this->newRe->find($id);
		}

		public function delete($model)
		{
			return $this->newRe->delete($model);
		}

		public function add($model){
			return $this->newRe->save($model);
		}

		public function update($model){
			return $this->newRe->save($model);
		}

		public function view($id){
			return $this->newRe->updateView($id);
		}

	}

 ?>