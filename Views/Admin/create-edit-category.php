<div class="container">
    <?php if($this->request->action=='add') echo "<h1>Thêm thể loại</h1>";
        else echo "<h1>Sửa thể loại</h1>";
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
                                    <div class="col-md-2">Tên thể loại</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if (isset($cate->tenloai)) echo $cate->tenloai; ?>" name="tenloai" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Trạng thái</div>
                                    <div class="col-md-10">
                                        <select name="trangthai" class="form-control" style="width: 300px; line-height: 20px">
                                            <option <?php if (isset($cate->trangthai) && $cate->trangthai==1) echo "selected"; ?> value="1">Hiển thị</option>
                                            <option <?php if (isset($cate->trangthai) && $cate->trangthai==0) echo "selected"; ?> value="0">Không hiển thị</option>
                                      
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin:10px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="<?php if(isset($cate->id)) echo "Lưu"; else echo "Thêm mới"; ?>" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>