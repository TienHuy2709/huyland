  <?php require(ROOT . "Views/Fontend/header.php"); ?>
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-12 ftco-animate">
                <div class="single-slider owl-carousel">
                  <?php $anh = explode(",", $detail->hinhanh);
                      foreach ($anh as $key => $value):
                     ?>
                  <div class="item">
                    <div class="properties-img" style="background-image: url(<?php echo WEBROOT; ?>/asset/products/<?php echo $detail->id; ?>/<?php echo $value; ?>);"></div>
                  </div>
                  <?php endforeach; ?>
                </div>

                <button 
                <?php if(isset($_COOKIE["dat_".$detail->id])){
                  echo "class='btn-danger btn btn-lg icon-heart deleteCookie icon-detail' ";
                  echo "title='Đã yêu thích'";
                  echo "data-id_delete=$detail->id";
                }  
                else{
                  echo "class='btn-outline-info btn btn-lg icon-heart icon-detail addCookie' ";
                  echo "title='Yêu thích'" ;
                } ?> ></button>

              </div>

              <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                <h2><?php echo $detail->tendat; ?></h2>
                <p class="rate mb-4">
                  <span class="loc"><a href="#"><i class="icon-map"></i><?php echo $detail->diadiem; ?></a></span>
                </p>
                <p><?php echo $detail->mota; ?></p>
                <div class="d-md-flex mt-5 mb-5">
                  <ul>
                    <li><span>Giá: </span><?php echo $detail->gia; ?> tỷ</li>
                    <li><span>Diện tích: </span><?php echo $detail->dientich; ?> m<sup>2</sup></li>
                    <li><span>Loại bán: </span><?php if($detail->loai==0) echo "Đất bán"; else echo "Đất thuê"; ?></li>
                  </ul>
                  <ul class="ml-md-5">
                    <li><span>Thời gian đăng:: </span> <?php echo $detail->thoigian; ?></li>
                    <li><span>Người bán: </span> <?php echo $detail->nguoiban; ?></li>
                    <li><span>Số đt: </span> <?php echo $detail->sdt; ?></li>
                  </ul>
                </div>
                <p><?php echo $detail->thongtin; ?></p>
              </div>
              <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                <h3 class="mb-4">Take A Tour</h3>
                <div class="block-16">
                  <figure>
                    <img src="<?php echo WEBROOT; ?>/asset/images/properties-6.jpg" alt="Image placeholder" class="img-fluid">
                    <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                  </figure>
                </div>
              </div>

              <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                <h4 class="mb-4">Review &amp; Ratings</h4>
                <div class="row">
                  <div class="col-md-6">
                    <form method="post" class="star-rating">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                           <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                       </label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                          <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-12 properties-single ftco-animate mb-5 mt-5 list-land">
                <h4 class="mb-4">Các mảnh đất xung quanh : </h4>
                <div class="range-wrap">
                  <span>Số khoảng cách : </span>
                  <input id="range" type="range" min="0" max="10" value="5" step="0.5">
                  <div class="range-value" id="rangeV"></div><span style="padding-left: 3px">km</span>
                </div>
                <style type="text/css">
                  .range-wrap {
                    width: auto;
                    display: flex;
                    margin: 20px 0px;
                  }
                  .range-wrap .range-value, input {
                    margin-left: 10px;
                  }
                  .related-land {
                    transition: auto 1s;
                  }
                </style>
                <script type="text/javascript">
                  const
                  range = document.getElementById('range'),
                  rangeV = document.getElementById('rangeV'),
                  setValue = ()=>{
                    const
                    newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
                    newPosition = 10 - (newValue * 0.2);
                    rangeV.innerHTML = `<span>${range.value}</span>`;
                  };
                  document.addEventListener("DOMContentLoaded", setValue);
                  range.addEventListener('input', setValue);
                </script>
                <div class="row">
                  <div class="col-md-12">
                    <div class="displayLand">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .col-md-8 -->
          <script  type="text/javascript" >
            $( document ).ready(function() {
              function loadLand(){
                var kmLand = document.getElementById('range').value;
                $.ajax({
                  url : "<?php echo WEBROOT."getRelatedLand/index/$detail->id" ?>",
                  type : "post",
                  dataType : "text",
                  data : {
                    km : kmLand,
                  },
                  success : function(resule){
                    $('.displayLand').html(resule);
                    $('.related-land').owlCarousel({
                      autoplay: true,
                      loop: true,
                      items:1,
                      margin: 30,
                      stagePadding: 0,
                      nav: true,
                      dots: true,
                      navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
                      responsive:{
                        0:{
                          items: 1
                        },
                        600:{
                          items: 2
                        },
                        1000:{
                          items: 2
                        }
                      }
                    });
            },
            error: function(){
              $('.displayLand').html("Không có mảnh đất nào");
            }
          });
              }
              loadLand();
            })
          $(document).on('click',"#range",function(){
               var kmLand = document.getElementById('range').value;
          $.ajax({
            url : "<?php echo WEBROOT."getRelatedLand/index/$detail->id" ?>",
            type : "post",
            dataType : "text",
            data : {
              km : kmLand,
            },
            success : function(resule){
              $('.displayLand').html(resule);
              $('.related-land').owlCarousel({
                autoplay: true,
                loop: true,
                items:1,
                margin: 30,
                stagePadding: 0,
                nav: true,
                dots: true,
                navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
                responsive:{
                  0:{
                    items: 1
                  },
                  600:{
                    items: 2
                  },
                  1000:{
                    items: 2
                  }
                }
              });
            },
            error: function(){
              $('.displayLand').html("Không có mảnh đất nào");
            }
          });
        })
          </script>
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Thể loại</h3>
                <?php foreach ($category as $cate): ?>
                <li><a href="<?php echo WEBROOT; ?>category/allId/<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?> <!-- <span>(12)</span> --></a></li>
              <?php endforeach; ?>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo WEBROOT; ?>/asset/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo WEBROOT; ?>/asset/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo WEBROOT; ?>/asset/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->