<meta data-wb="role=include&template=wrapper.inc.php" />

<div append="main">
				<!--Start of Google Map Area-->
				<div class="google-map-area fix">
					<!--Google map start-->
					<div id="contacts" class="map-area">
						<div id="googleMap" style="width:100%;height:600px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
					</div>
					<!--Google map end-->
					<div class="custom-container">
						<div class="banner-content">
							<div class="display-table pull_left">
								<div class="display-table-cell">
									<div class="banner-form">
										<div class="section-title mb-45 mt-45">
											<h2 class="uppercase text-white">FIND YOUR <span>DREAM HOME</span></h2>
										</div>
										<form action="#" class="col-10">
											<div class="form-box mb-40 pl-15 pr-15">
												<div class="select">
													<select name="location">
														<option>Location</option>
														<option>Dhaka</option>
														<option>Shylet</option>
														<option>Khulna</option>
														<option>Barishal</option>
														<option>Chittagong</option>
													</select>
												</div>
											</div>
											<div class="form-box mb-40 pl-15 pr-15">
												<div class="select">
													<select name="sub-location">
														<option>Sub - Location</option>
														<option>Dhaka</option>
														<option>Shylet</option>
														<option>Khulna</option>
														<option>Barishal</option>
														<option>Chittagong</option>
													</select>
												</div>
											</div>
											<div class="form-box mb-40 pl-15 pr-15">
												<div class="select">
													<select name="min-sqft">
														<option>Min area (sqft)</option>
														<option>Dhaka</option>
														<option>Shylet</option>
														<option>Khulna</option>
														<option>Barishal</option>
														<option>Chittagong</option>
													</select>
												</div>
											</div>
											<div class="form-box mb-40 pl-15 pr-15">
												<div class="select">
													<select name="max-sqft">
														<option>Max area (sqft)</option>
														<option>Dhaka</option>
														<option>Shylet</option>
														<option>Khulna</option>
														<option>Barishal</option>
														<option>Chittagong</option>
													</select>
												</div>
											</div>
											<div class="form-box pl-15 pr-15">
												<div class="select">
													<select name="bedrooms">
														<option>No of Beadroom</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
											<div class="form-box pl-15 pr-15">
												<div class="select">
													<select name="bedrooms">
														<option>No of Bathroom</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="form-box pl-15 pr-15 large">
												<div class="price_filter pt-5">
													<div class="price_slider_amount mb-20">
													   <div class="slider-values">
															<span>Price Range</span>
															<input type="text" class="amount" name="price"  placeholder="Add Your Price" />
														</div>
													</div>
													<div class="slider-range"></div>
												</div>
												<button name="search_price" type="button" class="button search_price lemon mt-55 mb-21"><span><span>SEARCH</span></span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--End of Google Map Area-->
                <!--Start of About Area-->
                <div class="about-area mt-120 pb-110 banner-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/thumb/620x362/src/uploads/pages/home/{{images.0.img}}" class="img-responsive"  >
                            </div>
                            <div class="col-md-6">
                                <div class="section-title mb-38 mt-31">
                                    <span class="opacity-text text-uppercase">{{header}}</span>
                                    <h2 class="uppercase">{{header}}</h2>
                                </div>
                                <div>{{text}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of About Area -->

                <!--Start of Price Drop Property Area-->
                <div class="property-area pt-55 bg-light pb-75">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">Жилые комплексы</span>
                                    <h2 class="uppercase mb-25">Жилые комплексы</h2>
                                    <p class="pb-15">DOM-INNO is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="property-carousel" data-wb="role=foreach&form=complex">
								<div class="col-md-12">
									<div class="single-property hover-effect-two">
										<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
											<div class="title-left pull_left">
												<h4 class="text-white mb-12"><a href="properties-details.html">{{name}}</a></h4>
												<span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>{{address}}</span>
											</div>
											<div class="fix pull_right">
												<h3>от {{price_min}}₽</h3>
											</div>
										</div>
										<div class="property-image">
											<a href="properties-details.html" class="block dark-hover">
                        <img src="/thumb/370x290/src/{{image}}" alt="">
												<span class="img-button text-uppercase">More Details</span>
											</a>
											<div class="hover-container pl-15 pr-15 pt-16 pb-15">
												<div class="hover-item">
													<i class="fa fa-calendar text-white"></i>&nbsp;
													<span>{{quart}}кв. {{year}}г.</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="images/icons/bed.png" alt="">
													<span>5</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="images/icons/shower.png" alt="">
													<span>3</span>
												</div>
												<div class="hover-item">
													<img class="mr-10" src="images/icons/garage.png" alt="">
													<span>2</span>
												</div>
											</div>
										</div>
									</div>
								</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Price Drop Property Area-->

                <!--Start of Service Area-->
                <div class="service-area pb-120 pt-100">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">OUR SERVICES</span>
                                    <h2 class="uppercase mb-20">OUR SERVICES</h2>
                                    <p class="pb-19">DOM-INNO is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                				<div class="single-service pull_left hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="images/service/1-s.jpg" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Sale Property</a></h4>
                						<p class="mr-10">Property sale best eme for litdo eiusmod orlor sit amet, conse teturg eiusmo custom </p>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                				<div class="single-service hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="images/service/2-s.jpg" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Buy Property</a></h4>
                						<p class="mr-10">Property sale best eme for litdo eiusmod orlor sit amet, conse teturg eiusmo custom </p>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 hidden-md hidden-sm col-xs-12">
                				<div class="single-service pull_right hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="images/service/3-s.jpg" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Rent Property</a></h4>
                						<p class="mr-10">Property sale best eme for litdo eiusmod orlor sit amet, conse teturg eiusmo custom </p>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Service Area-->
                <meta data-wb="role=include&template=properties-left-sidebar.inc.php" />
                <!--Start of Advertise Area-->
                <div class="advertise-area bg-1 bg-overlay-1 pt-76 pb-76">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-12 text-center">
                				<h1 class="text-white mb-22">BOOK YOUR APPARTMENT OR HOUSE</h1>
                				<h2 class="text-white">CALL US ON : +0123  456  789</h2>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Advertise Area-->
                <!--Start of Features Area-->
                <div class="features-area mt-100 banner-2 mb-92">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31">
                                    <span class="opacity-text text-uppercase ml-9">FEATURES</span>
                                    <h2 class="uppercase mb-24">AWESOME FEATURES</h2>
                                    <p class="pb-20">DOM-INNO is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="col-md-9">
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="images/icons/furnished.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Fully Furnished</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="images/icons/paint.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Royal Touch Paint</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="images/icons/interior.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Latest Interior Design</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="images/icons/security.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Non Stop Security</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="images/icons/nature.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Living Inside a Nature</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="images/icons/fittings.png" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Luxurious Fittings</a></h4>
                					</div>
                					<p>Lorem is a dummy text do eiud<br>tempor dolor sit amet dum</p>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Features Area-->

                <!--Start of Fun Factor Area-->
                <div class="fun-factor-area bg-1 bg-overlay-1 ptb-90">
                	<div class="container">
                		<div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="images/icons/home.png" alt="" class="mr-15">
                                    	<h2><span class="counter">999</span></h2>
                                	</div>
                                    <h4>Complete Project</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="images/icons/key.png" alt="" class="mr-15">
                                    	<h2><span class="counter">720</span></h2>
                                	</div>
                                    <h4>Property Sold</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="images/icons/face.png" alt="" class="mr-15">
                                    	<h2><span class="counter">750</span></h2>
                                	</div>
                                    <h4>Happy Clients</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="images/icons/trophy.png" alt="" class="mr-15">
                                    	<h2><span class="counter">120</span></h2>
                                	</div>
                                    <h4>Awards Win</h4>
                                </div>
                            </div>
                		</div>
                	</div>
                </div>
                <!--End of Fun Factor Area-->

<meta data-wb="role=include&template=widget.news.inc.php">

				<!--Start of Client area-->
				<div class="client-area ptb-115">
					<div class="container">
						<div class="row">
							<div class="client-carousel carousel-none">
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="images/client/1.png" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="images/client/2.png" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="images/client/3.png" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="images/client/4.png" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="images/client/5.png" alt=""></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>
