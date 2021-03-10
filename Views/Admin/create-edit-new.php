<div class="container">
    <?php if($this->request->action=='add') echo "<h1>Thêm Tin Tức</h1>";
        else echo "<h1>Sửa Tin Tức</h1>";
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
                                    <div class="col-md-2">Tiêu đề tin tức</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if (isset($new->ten)) echo $new->ten; ?>" name="ten" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Nội dung</div>
                                    <div class="col-md-10">
                                         <textarea name="noidung" required id="noidung">
                                            <?php if (isset($new->noidung)) echo $new->noidung; ?>
                                        </textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace("noidung");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Ảnh minh hoạ</div>
                                    <div class="col-md-10">
                                         <input type="file" name="hinhanh" value="<?php if (isset($new->hinhanh)) echo $new->hinhanh; ?>">
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin:10px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="<?php if(isset($new->id)) echo "Lưu"; else echo "Thêm mới"; ?>" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>