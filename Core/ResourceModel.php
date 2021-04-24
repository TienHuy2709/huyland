<?php 

	namespace HUYLAND\Core;

	use HUYLAND\Config\Database;
	use PDO;
	
	class ResourceModel implements ResourceModelInterface
	{
		private $table;
		private $id;
		private $model;
		public $data;

		public function _init($table,$id,$model)
		{
			$this->table = $table; 
			$this->id = $id;
			$this->model = $model;
		}

		public function getNewID(){
			return $req = Database::getBdd()->lastInsertId();
		}

		public function save($model)
		{

			$properties = $model->getProperties();


			$checkId = $model->id;
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

			return $req->execute([':id' => $model->id]);
		}

		/*Khoi tao ham xoa tat ca*/
		public function deleteAll($model)
		{
			$sql = "DELETE FROM {$this->table}";
			$req = Database::getBdd()->prepare($sql);
			return $req->execute();
		}
		/*Khoi tao ham lay tat ca du lieu cua bang*/
		public function all($model)
		{
			$properties = implode(',', array_keys($model->getProperties()));
			$sql = "";
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? ($_GET["page"]-1) : 0;
			if($page >= 0 && $this->table=="dat" ){
				$page = $page * $this->data ;
				$sql = "SELECT {$properties} FROM {$this->table} order by id desc limit $page, $this->data ";
			}
			else $sql = "SELECT {$properties} FROM {$this->table}";
			if($this->data==''){
				$sql = "SELECT {$properties} FROM {$this->table} order by id desc";
			}
			$req = Database::getBdd()->prepare($sql);
			$req->execute();
			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function allId($model,$id,$all)
		{
			$properties = implode(',', array_keys($model->getProperties()));
			$sql = "SELECT {$properties} FROM {$this->table} where ".$all."=:id";
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
			$ten = $model->tendat;
			$loai=$model->loai;
			$thanhpho=$model->thanhpho;
			$loaidat=$model->idloai;
			$dientich=$model->dientich;
			$gia=$model->gia;
			$sql = "SELECT * FROM {$this->table} where ";

			if($ten != "")
			{
				$sql .= "tendat LIKE LOWER('%$ten%') and "; 
			}
			if($loai != "" ){
				$sql .= "loai=$loai and ";
			}
			if($thanhpho != ""){
				$sql .= "thanhpho='$thanhpho' and ";
			}
			if($loaidat != ""){
				$sql .= "idloai=$loaidat and ";
			}
			if($dientich != ""){
				$sql .= "dientich $dientich and ";
			}
			if($gia != ""){
				$sql .= "gia $gia";
			}
			if($sql == "SELECT * FROM {$this->table} where ") $sql = $sql . 1;
			$end = $sql[-4].$sql[-3].$sql[-2].$sql[-1];
			if($end === "and "){
				$sql[-2]=" ";
				$sql[-3]=" ";
				$sql[-4]=" ";
			}
			 $req = Database::getBdd()->prepare($sql);
			 $req->execute();
			 return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function getCity(){

			$sql = "SELECT DISTINCT thanhpho FROM dat";
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
			else $sql = "SELECT {$properties} FROM {$this->table} WHERE TO_DAYS('".date('Y-m-d H:i:s')."') - TO_DAYS({$this->table}.thoigian) <= 7";
			/*$sql = "SELECT {$properties} FROM {$this->table}";*/
			$req = Database::getBdd()->prepare($sql);
			$req->execute();

			return $req->fetchAll(PDO::FETCH_OBJ);
		}

		public function getAddress()
		{
			$strJsonFileContents = file_get_contents("../local.json");
			$array = json_decode($strJsonFileContents);
			
			return $array;
		}

		public function log($model)
		{
			$email = $model->email;
			$matkhau = $model->matkhau;
			$sql = "SELECT * FROM {$this->table} where email =:email and matkhau =:matkhau";
			$req = Database::getBdd()->prepare($sql);
			 $req->execute([':email' => $email, ':matkhau' => $matkhau]);
			
			 return $req->fetchObject();
		}

		public function uploadAnh($filename, $id)
		{
			$sql = "UPDATE dat set hinhanh =:hinhanh where id =:id";
			$req = Database::getBdd()->prepare($sql);
			return $req->execute([':hinhanh' => $filename, ':id' => $id]);
		}

		public function updateView($id)
		{
			$sql = "UPDATE {$this->table} set luotxem = luotxem + 1 where id =:id";
			$req = Database::getBdd()->prepare($sql);
			return $req->execute([':id' => $id]);
		}

		public function count($p)
		{
			$this->data = $p;
			$sql = "SELECT id FROM {$this->table}";
			$req = Database::getBdd()->prepare($sql);
			$req->execute();
			return $req->rowCount(PDO::FETCH_OBJ);
		}

		public function getName($id)
		{
			$sql = "SELECT tendat FROM {$this->table} where id =:id";
			$req = Database::getBdd()->prepare($sql);
			$req->execute([':id' => $id]);
			
			return $req->fetchObject();
		}

	}

 ?>