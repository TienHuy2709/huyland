<?php 

	namespace HUYLAND\Models\Land;
	
	use HUYLAND\Models\Land\LandResourceModel;
	
	class LandRepository
	{
		protected $landRe;
		public function __construct()
		{
			$this->landRe = new LandResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->landRe->all($model);
		}

		public function getAllByCategoryId($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->landRe->allId($model,$id);
		}
		public function get($id){
			return $this->landRe->find($id);
		}

		public function delete($model)
		{
			return $this->landRe->delete($model);
		}

		public function add($model){
			return $this->landRe->save($model);
		}

		public function update($model){
			return $this->landRe->save($model);
		}

		public function allIf($model,$if){
			return $this->landRe->allif($model,$if);
		}

		public function findByKey($model){
			return $this->landRe->findLand($model);
		}

		public function findName($id){
			return $this->landRe->getName($id);
		}

		public function countLand($p){
			return $this->landRe->count($p);
		}

	}

 ?>