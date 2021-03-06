<div class="container">
        <h1>Đăng tin bán đất</h1>
                    </div>    
                    <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                 <!-- thêm thuôc tính enctype="multipart/form-data" dể upload file -->
                            <form method="post" enctype="multipart/form-data" action="#">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Tiêu đề cho bài đăng</div>
                                    <div class="col-md-10">
                                        <input type="text" value="" name="tendat" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Loại đất</div>
                                    <div class="col-md-10">
                                        <select name="idloai" required class="form-control " style="width: 300px; height: 200px" placeholder="Pick a state...">
                                          <option></option>
                                          <?php foreach ($category as $cate): ?>
                                          <option value="<?php echo ucfirst($cate->id); ?>"><?php echo ucfirst($cate->tenloai); ?></option>
                                          <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Kiểu đăng</div>
                                    <div class="col-md-10">
                                        <select name="loai" class="form-control" style="width: 300px; height: 200px">
                                          <option></option>
                                            <option value="0">Đất thuê</option>
                                            <option value="1">Đất bán</option>
                                      
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Thành phố</div>
                                    <div class="col-md-10" style="float: left">
                                        <select name="thanhpho" id="thanhpho" required class="form-control select-state" style="width: 300px; height: 200px">
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div id="displayHuyen" style="margin-top: 10px">
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div id="displayXa-Duong" style="margin-top: 10px">
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Địa chỉ</div>
                                    <div class="col-md-10">
                                        <input type="text" required value="" name="diadiem" id="diadiem" class="form-control" required>
                                    </div>
                                </div>
                                <input type="text" value="" name="toado" id="toado" style="display: none" >
                                <!-- end rows -->
                                 <div class="row" style="margin-top:5px;">
                                  <div class="col-md-2">Giá bán</div>
                                    <div class="col-md-10">
                                      <input class="btn-sm input-group-sm" required type="text" value=""name="gia" id="gia">
                                    </div>
                                  </div>
                                <!-- rows -->
                                <!-- end rows -->
                                 <div class="row" style="margin-top:5px;">
                                  <div class="col-md-2">Diện tích(m<sup>2</sup>)</div>
                                    <div class="col-md-10">
                                      <input class="btn-sm input-group-sm" required type="text" value="" name="dientich" id="gia">
                                    </div>
                                  </div>
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Mô tả</div>
                                    <div class="col-md-10">
                                        <textarea name="mota" required id="mota">
                                        </textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace("mota");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Thông tin chi tiết</div>
                                    <div class="col-md-10">
                                        <textarea name="thongtin" required id="thongtin">
                                        </textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace("thongtin");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Thông tin người bán</div>
                                    <div class="col-md-10">
                                        <textarea name="nguoiban" required id="nguoiban">
                                        </textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace("nguoiban");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Số điện thoại liên hệ</div>
                                    <div class="col-md-10">
                                        <input type="text" name="sdt" required style="width: 300px;height: 50px">
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="hot" id="hot"><label for="hot">Hot Land</label>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                  <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Upload image
                                      <p style="color: red; font-size: 10px">Bài đăng có hình ảnh sẽ tốt hơn</p>
                                    </div>
                                    <div class="col-md-10">
                                      <input class="btn-sm input-group-sm" multiple="multiple" type="file" value="" name="file[]" >
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin:10px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submitLand" value="Đăng tin" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>

<style type="text/css" media="screen">
    #map {
  height: 100%;
}

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
<div id="map"></div>
<!-- Replace YOUR_API_KEY here by your key above -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsqiCuZsCIU7BrDc3c0_jpvdsHRsSxCQw=initMap" async defer>
  function initMap() {
  var latLng = { lat: 21.0168864, lng: 105.7855574 }

  // create map with center is latLng
  // code

  // each marker define one point
  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
  });
}
</script>