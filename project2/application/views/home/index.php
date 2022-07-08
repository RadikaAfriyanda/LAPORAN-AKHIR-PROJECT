
		<!--about-us start -->
		<section id="beranda" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
                                        Jelajahi Keindahan Wisata di Kota Depok
									</h2>
									<div class="about-btn">
										<button  class="about-view" style="color:black;">
											Jelajahi Sekarang
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->
		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section id="destinasi" class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="single-tab-select-box">
														<div class="gallary-header text-center">
															<h2>
																DESTINASI
															</h2>
															<p>
																Berikut beberapa destinasi yang dapat anda kunjungi.
															</p>
														</div><!--/.gallery-header-->
														<div class="packages-content">
															<div class="row">
																<div class="col-md-4 col-sm-6">
																	<div class="single-package-item">
																		<img src="<?= base_url('assets/images/gallary/g1.jpg')?>" alt="package-place">
																		<div class="single-package-item-txt">
																			<h3>Kolam Renang<span class="pull-right">Rp40000</span></h3>
																			
																			<div class="packages-review">
																				<p>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<span>1544 review</span>
																				</p>
																			</div><!--/.packages-review-->
																			<div class="about-btn">
																				<a href="<?= base_url("index.php/home/detail/1")?>" class="about-view packages-btn">
																					Lihat Detail
																				</a>
																			</div><!--/.about-btn-->
																		</div><!--/.single-package-item-txt-->
																	</div><!--/.single-package-item-->

																</div><!--/.col-->
																<div class="col-md-4 col-sm-6">
																	<div class="single-package-item">
																		<img src="<?= base_url('assets/images/gallary/p2.jpg')?>" alt="package-place">
																		<div class="single-package-item-txt">
																			<h3>Taman Kota<span class="pull-right">Rp15000</span></h3>
																			<div class="packages-review">
																				<p>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<span>3144 review</span>
																				</p>
																			</div><!--/.packages-review-->
																			<div class="about-btn">
																				<a href="<?= base_url("index.php/home/detail/2")?>" class="about-view packages-btn">
																					Lihat Detail
																				</a>
																			</div><!--/.about-btn-->
																		</div><!--/.single-package-item-txt-->
																	</div><!--/.single-package-item-->

																</div><!--/.col-->	
																<div class="col-md-4 col-sm-6">
																	<div class="single-package-item">
																		<img src="<?= base_url('assets/images/gallary/p3.jpg')?>" alt="package-place">
																		<div class="single-package-item-txt">
																			<h3>Pemancingan<span class="pull-right">Rp100000</span></h3>
																			
																			<div class="packages-review">
																				<p>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<i class="fa fa-star"></i>
																					<span>2544 review</span>
																				</p>
																			</div><!--/.packages-review-->
																			<div class="about-btn">
																				<a href="<?= base_url("index.php/home/detail/3")?>" class="about-view packages-btn">
																					Lihat Detail
																				</a>
																			</div><!--/.about-btn-->
																		</div><!--/.single-package-item-txt-->
																	</div><!--/.single-package-item-->

																</div><!--/.col-->											
															</div><!--/.row-->
														</div><!--/.packages-content-->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
											</div><!--/.row-->
										</div><!--/.tab-para-->
									</div><!--/.tabpannel-->
								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			</div><!--/.col-->
        		</div><!--/.row-->
        	</div><!--/.container-->
        </section><!--/.travel-box-->
		<!--travel-box end-->
		<style>
		.kotak-tengah {
            width: 500px;       
            border-radius: 18px 18px 18px 18px;   
            margin: 10% auto;
            padding: 20px;
            background:white;
            border: 2px solid rgba(179,220,237,1);
            box-shadow: 0px 6px 10px 0px rgba(179,220,237,1);
        }
        input, select{
            width: 100%;
            height: 40px;
            border: 1px solid rgba(179,220,237,1);
            padding: 5px;
        }
        .logo {
          width:10%;
        } 
		</style>
		<!-- discount-offer start-->
		<section class="discount-offer" >
			<div class="container kotak-tengah">
				<h2 class="text-center" style="margin-bottom:30px;">Kolom Komentar</h2>
				<?= form_open("komentar/save")?>
					<div class="form-group row">
						<label for="wisata" class="col-8 col-form-label">Wisata</label> 
						<div class="col-4">
							<select id="wisata" name="wisata" class="custom-select dropdown" required="required">
								<option value="kolam renang">Kolam Renang</option>
								<option value="taman kota">Taman Kota</option>
								<option value="pemancingan">Pemancingan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="rating" class="col-4 col-form-label">Rating</label> 
						<div class="col-8">
							<select id="rating" name="rating" class="custom-select dropdown" required="required">
								<option value="5">5</option>
								<option value="4">4</option>
								<option value="3">3</option>
								<option value="2">2</option>
								<option value="1">1</option>
							</select>
						</div>
					</div> 
					<div class="form-group row">
						<label for="isi" class="col-4 col-form-label"></label> 
						<div class="col-8">
							<textarea id="isi" name="isi" cols="40" rows="3" class="form-control" required="required" placeholder="Ketik Pendapat Anda Disini"></textarea>
						</div>
					</div>
					<div class="col-4">
						<div class="about-btn">
							<button  class="about-view discount-offer-btn" style="color:black;">
								Kirim
							</button>
						</div>
					</div>
				<?= form_close() ?>
			</div>
		</section><!-- /.discount-offer-->
		<!--discount-offer end-->