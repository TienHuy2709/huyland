<?php 

	namespace HUYLAND\Core;

	use HUYLAND\Config\Database;
	use PDO;
	
	class ResourceModel implements ResourceModelInterface
	{
		private $table;
		private $id;
		private $model;

		public function _init($table,$id,$model)
		{
			$this->table = $table; 
			$this->id = $id;
			$this->model = $model;
		}

		public function save($model)
		{

			$properties = $model->getProperties();

			$checkId = $model->getId();
/*			$properties['created_at'] = date('Y-m-d H:i:s');
			$properties['updated_at'] = date('Y-m-d H:i:s');*/

			if($checkId == null )
			{
				unset($properties['id']);

				$values = implode(', ',array_keys($properties));
				$column = implode(', :',array_keys($properties));
				$sql = "INSERT INTO {$this->table} (".$values.") VALUES ( :".$column.")";	
				$req = Database::getBdd()->prepare($sql);

				return $req->execute($properties);

			}

			if($checkId != null)
			{

				/*Khoi tao mang column*/
				$columns = [];

				/*Them vao cuoi mang:
					- Duyet mang key cua mang $properties[]
					- Trong vong for neu values(key) la id thi khong them vao mang $column[] con lai thi them vao va gan them chuoi =: vao
				*/

				foreach (array_keys($properties) as $key => $values) 
				{

					if ($values != 'id') 
					{
						$columns[] =  $values . ' = :' . $values;
					}

				}

				$column = implode(', ', $columns);
				$sql = "UPDATE {$this->table} SET ".$column." WHERE id = :id";
				$req = Database::getBdd()->prepare($sql);

				return $req->execute($properties);

			}

		}

		/*Khoi tao ham xoa*/
		public function delete($model)
		{
			$sql = "DELETE FROM {$this->table} where id =:id";
			$req = Database::getBdd()->prepare($sql);

			return $req->execute([':id' => $model->getId()]);
		}

		/*Khoi tao ham lay tat ca du lieu cua bang*/
		public function all($model)
		{
			$properties = implode(',', array_keys($model->getProperties()));
			$sql = "SELECT {$properties} FROM {$this->table}";
			$req = Database::getBdd()->prepare($sql);
			$req->execute();

			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function allId($model,$id)
		{
			$properties = implode(',', array_keys($model->getProperties()));
			$sql = "SELECT {$properties} FROM {$this->table} where idloai=:id";
			$req = Database::getBdd()->prepare($sql);
			$req->execute([':id' => $id]);

			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function find($id)
		{
			$sql = "SELECT * FROM {$this->table} where id =:id";
			$req = Database::getBdd()->prepare($sql);
			$req->execute([':id' => $id]);
			
			return $req->fetchObject();
		}

		public function findLand($model)
		{	
			$ten =  $model->tendat;
			if ($model->tendat!= '' && $model->loai=='' && $model->thanhpho=='' && $model->idloai=='' && $model->dientich=='' && $model->gia=='') 
			{
				
				$sql = "SELECT * FROM {$this->table} where tendat LIKE '%$ten%' ";
				$req = Database::getBdd()->prepare($sql);
				$req->execute();
			}

			elseif($model->tendat == ''){
				$sql = "SELECT * FROM {$this->table}";
				$req = Database::getBdd()->prepare($sql);
				$req->execute();

				
			}

			else
			{
				$loai=$model->loai;
				$thanhpho=$model->thanhpho;
				$loaidat=$model->idloai;
				$dientich=$model->dientich;
				$gia=$model->gia;
				$sql = "SELECT * FROM {$this->table} where tendat LIKE LOWER('%$ten%') and loai=$loai and thanhpho='$thanhpho' and idloai=$loaidat and dientich $dientich and gia $gia";
				$req = Database::getBdd()->prepare($sql);
				$req->execute();
				$_GET['loai']=$loai;
			}


			echo $sql;
			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function getCity(){

			$sql = "SELECT thanhpho FROM dat";
			$req = Database::getBdd()->prepare($sql);
			$req->execute();

			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function allIf($model,$if)
		{
			$properties = implode(',', array_keys($model->getProperties()));
			if($if == 'hot'){
				$sql = "SELECT {$properties} FROM {$this->table} WHERE hot = 1";
			}
			else $sql = "SELECT {$properties} FROM {$this->table} WHERE ".strtotime(date('Y-m-d H:i:s'))." - {$this->table}.thoigian <= 1000000";
			/*$sql = "SELECT {$properties} FROM {$this->table}";*/
			$req = Database::getBdd()->prepare($sql);
			$req->execute();

			return $req->fetchAll(PDO::FETCH_OBJ);
		}

	}

 ?>