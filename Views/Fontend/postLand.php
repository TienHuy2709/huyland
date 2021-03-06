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
                                        <select name="idloai" required class="form-control" style="width: 300px; height: 200px">
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
                                    <div class="col-md-10">
                                        <select name="thanhpho" required class="form-control" style="width: 300px; height: 200px">
                                            <option></option>
                                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                            <option  value="Hà Nội">Hà Nội</option>
                                            <option  value="Hải Phòng">Hải Phòng</option>
                                            <option  value="Bình Dương">Bình Dương</option>
                                            <option  value="Hải Dương">Hải Dương</option>
                                            <option  value="Huế">Huế</option>
                                            <option  value="Lào Cai">Lào Cai</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Địa chỉ</div>
                                    <div class="col-md-10">
                                        <input type="text" required value="" name="diadiem" class="form-control" required>
                                    </div>
                                </div>
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