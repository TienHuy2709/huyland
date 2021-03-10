<?php 

	namespace HUYLAND\Models\Contact;
	
	use HUYLAND\Models\Contact\ContactResourceModel;
	
	class ContactRepository
	{
		protected $contactRe;
		public function __construct()
		{
			$this->contactRe = new ContactResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->contactRe->all($model);
		}

		public function getAllById($model,$id)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->contactRe->allId($model,$id);
		}

		public function get($id){
			return $this->contactRe->find($id);
		}

		public function delete($model)
		{
			return $this->contactRe->delete($model);
		}

		public function deleteAll($model)
		{
			return $this->contactRe->deleteAll($model);
		}

		public function add($model){
			return $this->contactRe->save($model);
		}

		public function update($model){
			return $this->contactRe->save($model);
		}

	}

 ?>