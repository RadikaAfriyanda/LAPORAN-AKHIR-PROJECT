    <!-- testemonial Start -->
        <section class="testemonial">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Testimonial Client
					</h2>
					<p>
						Berikut beberapa ulasan dari pengalaman client yang pernah menikmati wisata di Kota Depok
					</p>
				</div><!--/.gallery-header-->
				<?php
                $nomor = 1;
				foreach ($komentar as $komen) {
				?>
				<div class="owl-carousel owl-theme" id="testemonial-carousel">
					<div class="home1-testm item">
						<div class="home1-testm-single text-center">
							<div class="home1-testm-img">
								<img src="<?= base_url('assets/images/client/Aminah.jpg')?>" alt="img"/>
							</div><!--/.home1-testm-img-->
							<div class="home1-testm-txt">
                                <h3>
                                    <a href="#">
                                        <?php
                                        switch ($komen->users_id) {
                                            case 1:
                                                echo "Admin";
                                                break;
                                            case 2:
                                                echo "Aminah";
                                                break;
                                            case 6:
                                                echo "Rahma";
                                                break;
                                            case 7:
                                                echo "Rahul";
                                                break;
                                        } 
                                        $komen->users_id; ?>
                                    </a>
                                </h3>
								<span class="icon section-icon">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
								</span>
								<p>
									<?= $komen -> isi ?>
								</p>
								<h4><?php 
                                switch ($komen->wisata_id) {
                                    case 1:
                                        echo "Kolam Renang";
                                        break;
                                    case 2:
                                        echo "Tamana Kota";
                                        break;
                                    case 3:
                                        echo "Pemancingan";
                                        break;
                                    
                                } 
                                $komen -> wisata_id?></h4>
                                <h4>
                                    Rating <?= $komen->nilai_rating_id ?>/5
                                </h4>
                                <h4><?= $komen -> tanggal?></h4>
							</div><!--/.home1-testm-txt-->	
						</div><!--/.home1-testm-single-->
					</div><!--/.item-->
				</div><!--/.testemonial-carousel-->
				<?php } ?>
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- testemonial End -->