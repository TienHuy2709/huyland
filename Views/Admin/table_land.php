  <div class="container">
    <h1>Danh sách các mảnh đất</h1>
</div> 
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="<?php echo WEBROOT; ?>admin/land/add" class="btn btn-primary">Thêm mới</a>
    </div>
                       <!--  <ul class="pagination" style="margin-bottom:5px;">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">Trang</a>
                                    </li>
                                    <?php for($i=1;$i<=$numPage;$i++): ?>
                                    <li class="page-item <?php if(isset($_GET['p'])&&$_GET['p']==$i) echo 'active' ?>">
                                        <a href="index.php?area=Backend&controller=Category&p=<?php echo $i;?>" class="page-link"> <?php echo $i ?></a>
                                    </li>
                                <?php endfor; ?>
                            </ul> -->
                            <div class="panel panel-primary">
                                <div class="panel-heading"></div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-hover" style="width:100%">
                                        <tr>
                                            <th style="width:20%">Ảnh minh hoạ</th>
                                            <th style="">Tên bài đăng</th>
                                            <th style="">Thành phố</th>
                                            <th style="">Diện tích</th>
                                            <th style="">Giá</th>
                                            <th style="">Loại bán</th>
                                            <th style="">Thể loại</th>
                                            <th style=""></th>
                                        </tr>
                                        <?php foreach($lands as $land): 
                                            $anh = explode(",", $land->hinhanh);
                                            ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo WEBROOT; ?>/asset/products/<?php echo $land->id; ?>/<?php echo $anh[0]; ?>" >
                                                </td>
                                                <td>
                                                    <div class="noidung"><?php echo $land->tendat; ?></div>
                                                </td>
                                                <td >
                                                    <?php echo $land->thanhpho; ?>
                                                </td>
                                                <td >
                                                    <?php echo $land->dientich; ?> m<sup>2</sup>
                                                </td>
                                                <td>
                                                    <?php echo $land->gia; ?> tỷ
                                                </td>
                                                <td>
                                                    <?php if($land->loai==0) echo "Đất thuê";
                                                        else echo "Đất bán";
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($category as $cate ){
                                                        if($land->idloai == $cate->id)
                                                            echo $cate->tenloai;
                                                    }?>

                                                    
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="<?php echo WEBROOT; ?>admin/land/edit/<?php echo $land->id; ?>">Edit</a>&nbsp;
                                                    <a href="<?php echo WEBROOT; ?>admin/land/delete/<?php echo $land->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <style type="text/css" media="screen">
                                        .noidung {

                                          -webkit-line-clamp: 5;
                                          -webkit-box-orient: vertical;
                                          overflow: hidden;
                                          display: -webkit-box;
                                      }
                                  </style>
                                  <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">Trang</a>
                                    </li>
                                     <?php for($i=1;$i<=$page;$i++): ?>
                                    <li class="page-item <?php if(isset($_GET['page'])&&$_GET['page']==$i) echo 'active' ?>">
                                        <a href="<?php echo WEBROOT; ?>admin/land/index/<?php echo $i;?>" class="page-link"> <?php echo $i ?></a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end content -->
                </div>