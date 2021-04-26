<div class="container">
    <?php if(!empty($land->id)){
        $id_edit = $land->thanhpho;
        echo "<h1>Sửa thông tin đất</h1>";
    }
    else echo "<h1>Đăng tin bán đất</h1>";
    ?>
        
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
                                        <input type="text" value="<?php if(isset($land->tendat)) echo $land->tendat; ?>" name="tendat" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Loại đất</div>
                                    <div class="col-md-10">
                                        <select name="idloai" required class="form-control" style="width: 300px; line-height: 30px">
                                          <option></option>
                                          <?php foreach ($category as $cate): ?>
                                            <?php if(isset($land->idloai) && $land->idloai == $cate->id): ?>
                                              <option selected="" value="<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?></option>
                                              <?php else: ?>
                                                <option value="<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Kiểu đăng</div>
                                    <div class="col-md-10">
                                        <select name="loai" class="form-control" style="width: 300px; line-height: 30px">
                                          <option></option>
                                            <option <?php if(isset($land->loai) && $land->loai==0) echo "selected"; ?> value="0">Đất thuê</option>
                                            <option <?php if(isset($land->loai) && $land->loai==1) echo "selected"; ?> value="1">Đất bán</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Thành phố</div>
                                    <div class="col-md-10">
                                        <select name="thanhpho" id="thanhpho" required class="form-control select-state" style="width: 300px;line-height: 30px;">
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
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
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Địa chỉ</div>
                                    <div class="col-md-10">
                                        <input type="text" required value="<?php if(isset($land->diadiem)) echo $land->diadiem; ?>" id="diadiem" name="diadiem" class="form-control" required>
                                    </div>
                                </div>
                                <input type="text" value="" name="toado" id="toado" style="display: none" >
                                <!-- end rows -->
                                 <div class="row" style="margin-top:5px;">
                                  <div class="col-md-2">Giá bán</div>
                                    <div class="col-md-10">
                                      <input class="btn-sm input-group-sm" required type="text" value="<?php if(isset($land->gia)) echo $land->gia; ?>"name="gia" id="gia">
                                    </div>
                                  </div>
                                <!-- rows -->
                                <!-- end rows -->
                                 <div class="row" style="margin-top:5px;">
                                  <div class="col-md-2">Diện tích(m<sup>2</sup>)</div>
                                    <div class="col-md-10">
                                      <input class="btn-sm input-group-sm" required type="text" value="<?php if(isset($land->dientich)) echo $land->dientich; ?>" name="dientich" id="gia">
                                    </div>
                                  </div>
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Mô tả</div>
                                    <div class="col-md-10">
                                        <textarea name="mota" required id="mota">
                                            <?php if(isset($land->mota)) echo $land->mota; ?>
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
                                            <?php if(isset($land->thongtin)) echo $land->thongtin; ?>
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
                                            <?php if(isset($land->nguoiban)) echo $land->nguoiban; ?>
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
                                        <input type="text" value="<?php if(isset($land->sdt)) echo $land->sdt; ?>" name="sdt" required style="width: 300px;height: 50px">
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="checkbox" <?php if(isset($land->hot) and $land->hot==1) echo "checked"; ?> name="hot" id="hot"><label for="hot">Hot Land</label>
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
                                        <input type="submit" name="submitLand" value="<?php if(isset($land->id)) echo "Lưu"; else echo "Thêm mới"; ?>" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>