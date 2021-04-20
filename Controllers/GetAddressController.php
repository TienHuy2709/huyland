<?php 
namespace HUYLAND\Controllers;

use HUYLAND\Core\ResourceModel;
use HUYLAND\Request;
use HUYLAND\Router;

class GetAddressController {

	private $reso;
	private $request;
	public function __construct()
	{
		$this->reso = new ResourceModel();
		$this->request = new Request();
		Router::parse($this->request->url, $this->request);
	}
	public function index()
	{
		$id = isset($_POST["id"])&&is_numeric($_POST["id"])&&$_POST["id"]>0 ? $_POST["id"] : 0;
		$array = $this->reso->getAddress();
		echo"<option value=''>---Chọn Thành Phố---</option>";
		foreach ($array as $key => $value) {
			if ($value->id == $id) {
				echo "<option value='$value->id' selected >$value->name</option>";
			}
			else echo "<option value='$value->id'>$value->name</option>";
		}
	}

	public function getHuyen()
	{	
		extract($_POST);
		$array = $this->reso->getAddress();
		echo "<div class='row' style='margin-top:5px;''><div class='col-md-2'>Huyện</div><div class='col-md-10' style='float: left'>";
		echo "<select name='huyen' id='huyen' required class='form-control select-state' style='width: 300px;'><option>--- Chọn Huyện --- </option>";
		foreach ($array as $key => $value) {
			if($value->id == $id){
				foreach ($value->districts as $value2){
					echo "<option value='$value2->id'>$value2->name</option>";
				}
			}
		}
		echo "</select></div></div>";
	}

	public function getStreet()
	{
		extract($_POST);
		$array = $this->reso->getAddress();
		echo "<div class='row' style='margin-top:5px;''><div class='col-md-2'>Xã - Đường</div><div class='col-md-10' style='float: left'>";
		echo "<select name='xa_duong' id='xa_duong' required class='form-control select-state' style='width: 300px;'><option>--- Chọn Xã --- </option>";
		foreach ($array as $key => $value) {
			foreach ($value->districts as $value2){
				if($value2->id == $id){
					foreach ($value2->wards as $value3) {
						echo "<option value='$value3->id' data-lat_land='' data-lng_land=''>$value3->name</option>";
					}
					foreach ($value2->projects as $value3) {
						echo "<option value='$value3->id' data-lat_land='$value3->lat' data-lng_land='$value3->lng'>$value3->name</option>";
					}
				}
			}
		}
		echo "</select></div></div>";
	}

}	
?>
