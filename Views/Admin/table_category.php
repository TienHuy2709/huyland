  <div class="container">
    <h1>Danh sách loại đất</h1>
    </div> 
            <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="<?php echo WEBROOT; ?>admin/category/add" class="btn btn-primary">Thêm mới</a>
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
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width: 80%">Name</th>
                                        <th>Trạng thái</th>
                                        <th style="width:100px;">
                                            
                                        </th>
                                    </tr>
                                    <?php foreach($category as $cate): ?>
                                    <tr>
                                        <td>
                                                <?php echo $cate->tenloai; ?>
                                        </td>
                                        <td>
                                                <?php if($cate->trangthai==1) echo "Hiển thị";
                                                    else echo "Không hiển thị";
                                                 ?>
                                        </td>

                                        <td style="text-align:center;">
                                            <a href="<?php echo WEBROOT; ?>admin/category/edit/<?php echo $cate->id; ?>">Edit</a>&nbsp;
                                            <a href="<?php echo WEBROOT; ?>admin/category/delete/<?php echo $cate->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link">Trang</a>
                                    </li>
                                   <!--  <?php for($i=1;$i<=$numPage;$i++): ?>
                                    <li class="page-item <?php if(isset($_GET['p'])&&$_GET['p']==$i) echo 'active' ?>">
                                        <a href="index.php?area=Backend&controller=Category&p=<?php echo $i;?>" class="page-link"> <?php echo $i ?></a>
                                    </li>
                                <?php endfor; ?> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end content -->
                </div>