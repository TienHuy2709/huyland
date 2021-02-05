<section class="ftco-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12 search-wrap">
					<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
					<form action="#" class="search-property">
						<div class="row">
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Từ khoá</label>
									<div class="form-field">
										<div class="icon"><span class="icon-pencil"></span></div>
										<input type="text" class="form-control" placeholder="Keyword">
									</div>
								</div>
							</div>
							<div class="col-md align-items-end">
								<div class="form-group">
									<label for="#">Kiểu đất</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value=""> Đất thuê </option>
												<option value=""> Đất bán </option>
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
											<select name="" id="" class="form-control">
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
											<select name="" id="" class="form-control">
												<?php foreach ($category as $cate): ?>
												<option value="<?php echo $cate->id; ?>"><?php echo ucfirst($cate->tenloai); ?></option>
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
											<select name="" id="" class="form-control">
												<option value=""> nhỏ hơn 10 </option>
												<option value="">10 - 20</option>
												<option value="">20 - 30</option>
												<option value="">30 - 40</option>
												<option value="">40 - 50</option>
												<option value=""> lớn hơn 50 </option>
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
											<select name="" id="" class="form-control">
												<option value=""> nhỏ hơn 1 </option>
												<option value="">1 - 5</option>
												<option value="">5 - 10</option>
												<option value="">10 - 15</option>
												<option value="">15 - 20</option>
												<option value=""> lớn hơn 20 </option>
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