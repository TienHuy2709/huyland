<section class="ftco-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12 search-wrap">
					<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
					<form action="<?php echo WEBROOT; ?>home/search/" method="post" class="search-property">
						<div class="row">
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Từ khoá</label>
									<div class="form-field">
										<div class="icon"><span class="icon-pencil"></span></div>
										<input type="text" name="tendat" id="tendat" class="form-control" placeholder="Keyword">
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Kiểu đất</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="loai" id="" class="form-control">
												<option value=""> </option>
												<option value="0"> Đất thuê </option>
												<option value="1"> Đất bán </option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Thành Phố</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="thanhpho" id="" class="form-control">
												<option value=""></option>
												<?php foreach ($city as $ci): ?>
												<option value="<?php echo $ci->thanhpho ?>"><?php echo $ci->thanhpho ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Loại đất</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="idloai" id="" class="form-control">
												<option value=""></option>
												<?php foreach ($category as $cate): ?>
													<?php if($cate->trangthai==1): ?>
														<option value="<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?></option>
													<?php endif ?>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Diện tích(m<sup>2</sup>)</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="dientich" id="" class="form-control">
												<option value=""></option>
												<option value="<= 10"> nhỏ hơn 10 </option>
												<option value="BETWEEN 10 AND 20">10 - 20</option>
												<option value="BETWEEN 20 AND 30">20 - 30</option>
												<option value="BETWEEN 30 AND 40">30 - 40</option>
												<option value="BETWEEN 40 AND 50">40 - 50</option>
												<option value=">= 50"> lớn hơn 50 </option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Giá (tỷ VNĐ)</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="gia" id="" class="form-control">
												<option value=""></option>
												<option value="<=1"> nhỏ hơn 1 </option>
												<option value="BETWEEN 1 AND 5">1 - 5</option>
												<option value="BETWEEN 5 AND 10">5 - 10</option>
												<option value="BETWEEN 10 AND 15">10 - 15</option>
												<option value="BETWEEN 15 AND 20">15 - 20</option>
												<option value=">= 20"> lớn hơn 20 </option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md align-self-end">
								<div class="form-group">
									<div class="form-field">
										<input type="submit" value="Search" class="form-control btn btn-primary">
									</div>
								</div>
							</div>
						</div>

						
					</form>
				</div>
			</div>
		</div>
	</section>