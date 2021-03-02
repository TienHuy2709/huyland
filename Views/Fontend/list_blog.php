<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row d-flex">
          <?php foreach ($news as $new): ?>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo WEBROOT; ?>news/detail/<?php echo $new->id; ?>" class="block-20" style="background-image: url('<?php  echo WEBROOT; ?>/asset/news/<?php echo $new->hinhanh; ?>');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="<?php echo WEBROOT; ?>news/detail/<?php echo $new->id; ?>"><?php echo $new->ten; ?></a></h3>
                <div class="meta mb-3">
                  <div><a><?php echo $new->ngaydang; ?></a></div>
                  <div><a>Admin</a></div>
                  <div><a class="meta-chat"><span class="icon-chat"></span> <?php echo $new->luotxem; ?></a></div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach;  ?>
        </div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>