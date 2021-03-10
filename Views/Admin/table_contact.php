  <div class="container">
    <h1>Danh sách liên hệ</h1>
</div> 
<div class="col-md-12">
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
                                            <th style="width:20%">Tên Người Dùng</th>
                                            <th style="width:10%">Email</th>
                                            <th style="width:40%">Nội dung</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                        <?php foreach($contacts as $contact): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $contact->ten; ?>
                                                </td>
                                                <td>
                                                    <?php echo $contact->email; ?>
                                                </td>
                                                <td >
                                                    <div class="noidung"><?php echo $contact->noidung; ?></div>
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="<?php echo WEBROOT; ?>admin/contact/delete/<?php echo $contact->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <div style="margin-bottom:5px;">
                                        <a href="<?php echo WEBROOT; ?>admin/contact/deleteAll" class="btn btn-outline-danger" onclick="return window.confirm('Are you sure?');">Xoá hết</a>
                                    </div>
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