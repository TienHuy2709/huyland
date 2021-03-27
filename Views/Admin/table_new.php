  <div class="container">
    <h1>Danh sách tin tức</h1>
</div> 
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="<?php echo WEBROOT; ?>admin/new/add" class="btn btn-primary">Thêm mới</a>
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
                                            <th style="width:10%">Tên bài viết</th>
                                            <th style="width:30%">Nội dung</th>
                                            <th style="width:20%">Ngày đăng</th>
                                            <th style="width:10%">Lượt xem</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                        <?php foreach($news as $new): ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php  echo WEBROOT; ?>/asset/news/<?php echo $new->hinhanh; ?>" style="max-width:100%" >
                                                </td>
                                                <td>
                                                    <?php echo $new->ten; ?>
                                                </td>
                                                <td >
                                                    <div class="noidung"><?php echo $new->noidung; ?></div>
                                                </td>
                                                <td>
                                                    <?php echo $new->ngaydang; ?>
                                                </td>
                                                <td>
                                                    <?php echo $new->luotxem; ?>
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="<?php echo WEBROOT; ?>admin/new/edit/<?php echo $new->id; ?>">Edit</a>&nbsp;
                                                    <a href="<?php echo WEBROOT; ?>admin/new/delete/<?php echo $new->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                                          max-height: 300px;
                                          max-width: 500px
                                      }
                                  </style>
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