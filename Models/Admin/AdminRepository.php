<?php 

	namespace HUYLAND\Models\Admin;
	
	use HUYLAND\Models\Admin\AdminResourceModel;
	
	class AdminRepository
	{
		protected $adminRe;
		public function __construct()
		{
			$this->adminRe = new AdminResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->adminRe->all($model);
		}

		public function getAllById($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->adminRe->allId($model,$id);
		}

		public function get($id){
			return $this->adminRe->find($id);
		}

		public function delete($model)
		{
			return $this->adminRe->delete($model);
		}

		public function add($model){
			return $this->adminRe->save($model);
		}

		public function update($model){
			return $this->adminRe->save($model);
		}

		public function login($model){
			return $this->adminRe->log($model);
		}

	}

 ?>