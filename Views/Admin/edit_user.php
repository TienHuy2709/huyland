<div class="container">
        <h1>Sửa Thông Tin Người Dùng</h1>
                    </div>    
                    <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                 <!-- thêm thuôc tính enctype="multipart/form-data" dể upload file -->
                            <form method="post" enctype="multipart/form-data" action="#">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Tên Người Dùng</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if (isset($user->ten)) echo $user->ten; ?>" name="ten" class="form-control" required>
                                    </div>
                                </div>
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Emai Người Dùng</div>
                                    <div class="col-md-10">
                                        <input type="email" value="<?php if (isset($user->email)) echo $user->email; ?>" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Số Điện Thoại</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if (isset($user->sdt)) echo $user->sdt; ?>" name="sdt" class="form-control" required>
                                    </div>
                                </div>
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Mật Khẩu</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if (isset($user->matkhau)) echo $user->matkhau; ?>" name="matkhau" class="form-control" required>
                                    </div>
                                </div>
                                <!-- rows -->
                                <div class="row" style="margin:10px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="Lưu" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>