   <div class="hero-wrap" style="background-image: url('<?php echo WEBROOT; ?>/asset/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo WEBROOT; ?>home/index/">Trang Chủ</a></span> <span>Property</span></p>
            <h1 class="mb-3 bread">Danh sách</h1>
          </div>
        </div>
      </div>
    </div>
    <?php require(ROOT . "Views/Fontend/search.php"); ?>
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
                <?php foreach ($lands as $land): 
                    $anh = explode(",", $land->hinhanh);
                ?>
    			<div class="col-md-4 ftco-animate">
    				<div class="properties">
    					<a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo WEBROOT; ?>/asset/products/<?php echo $land->id; ?>/<?php echo $anh[0]; ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<?php if($land->hot == 1): ?>
                                <span class="status sale">Hot</span>
                            <?php endif; ?>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="property-single.html" title="<?php echo $land->tendat ?>"><?php echo $land->tendat; ?></a></h3>
		    						<p><?php echo $land->thanhpho; ?></p>
	    						</div>
	    						<div class="two">
	    							<span class="price"><?php echo $land->gia; ?> tỷ</span>
    							</div>
    						</div>
    						<p><?php echo $land->diadiem; ?></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> <?php echo $land->dientich; ?>m<sup>2</sup></span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
                <?php endforeach; ?>

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