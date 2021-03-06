<?php 

	namespace HUYLAND\Models\User;
	
	use HUYLAND\Models\User\UserResourceModel;
	
	class UserRepository
	{
		protected $userRe;
		public function __construct()
		{
			$this->userRe = new UserResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->userRe->all($model);
		}

		public function getAllById($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->userRe->allId($model,$id);
		}

		public function get($id){
			return $this->userRe->find($id);
		}

		public function delete($model)
		{
			return $this->userRe->delete($model);
		}

		public function add($model){
			return $this->userRe->save($model);
		}

		public function update($model){
			return $this->userRe->save($model);
		}

		public function login($model){
			return $this->userRe->log($model);
		}

	}

 ?>