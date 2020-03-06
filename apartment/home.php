<meta data-wb="role=include&template=wrapper.inc.php">

<div append="main">

	<section class="adv-search-section no-padding">
		<meta data-wb="role=include&template=widget.home.map.inc.php">
		<form class="adv-search-form" action="#" id="propertiesFilterForm">
			<div class="adv-search-cont">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-11 adv-search-icons">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs adv-search-tabs" role="tablist">
								<li role="presentation" class="active" data-toggle="tooltip" data-placement="top" title="По районам"><a href="#apartments" aria-controls="apartments" role="tab" data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i></a></li>
								<li role="presentation" data-toggle="tooltip" data-placement="top" title="По метро"><a href="#houses" aria-controls="houses" role="tab" data-toggle="tab" id="adv-search-tab2"><i class="fa fa-home"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-1 visible-lg">
							<a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
						</div>
					</div>
				</div>
				<div class="container">
			<div class="row tab-content">
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<select name="district" class="bootstrap-select" title="Районы:" multiple data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
	              data-watcher="change=#propertiesFilterForm [name=complex]" data-actions-box="true"	>
								<option value="{{id}}">{{name}}</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-4">
							<select  data-wb="role=foreach&form=complex&tpl=true" name="complex" class="bootstrap-select" title="Жилой комплекс:" multiple data-actions-box="true">
									<option value="{{id}}">{{name}}</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-4">
							<select data-wb="role=tree&item=types&branch=units&parent=false" name="type" class="bootstrap-select" title="Тип:" multiple data-actions-box="true">
									<option value="{{id}}">{{name}}</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="adv-search-range-cont">
								<label for="slider-range-price1-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price1" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="adv-search-range-cont">
								<label for="slider-range-area1-value" class="adv-search-label">Area:</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area1" data-min="0" data-max="180" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="adv-search-range-cont">
								<label for="slider-range-bedrooms1-value" class="adv-search-label">Bedrooms:</label>
								<input type="text" id="slider-range-bedrooms1-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms1" data-min="1" data-max="10" class="slider-range"></div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade" id="houses">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="transaction2" class="bootstrap-select" title="Transaction:" multiple>
								<option>For sale</option>
								<option>For rent</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="country2" class="bootstrap-select" title="Country:" multiple data-actions-box="true">

								<option>United States</option>
								<option>Canada</option>
								<option>Mexico</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="city2" class="bootstrap-select" title="City:" multiple data-actions-box="true">
								<option>New York</option>
								<option>Los Angeles</option>
								<option>Chicago</option>
								<option>Houston</option>
								<option>Philadelphia</option>
								<option>Phoenix</option>
								<option>Washington</option>
								<option>Salt Lake City</option>
								<option>Detroit</option>
								<option>Boston</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<select name="location2" class="bootstrap-select" title="Location:" multiple data-actions-box="true">
								<option>Some location 1</option>
								<option>Some location 2</option>
								<option>Some location 3</option>
								<option>Some location 4</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">
								<label for="slider-range-price2-value" class="adv-search-label">Price:</label>
								<span>$</span>
								<input type="text" id="slider-range-price2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-price2" data-min="0" data-max="300000" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">
								<label for="slider-range-area2-value" class="adv-search-label">Area:</label>
								<span>m<sup>2</sup></span>
								<input type="text" id="slider-range-area2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-area2" data-min="0" data-max="180" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">
								<label for="slider-range-bedrooms2-value" class="adv-search-label">Bedrooms:</label>
								<input type="text" id="slider-range-bedrooms2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bedrooms2" data-min="1" data-max="10" class="slider-range"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-3">
							<div class="adv-search-range-cont">
								<label for="slider-range-bathrooms2-value" class="adv-search-label">Bathrooms:</label>
								<input type="text" id="slider-range-bathrooms2-value" readonly class="adv-search-amount">
								<div class="clearfix"></div>
								<div id="slider-range-bathrooms2" data-min="1" data-max="4" class="slider-range"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-3 col-md-offset-6 col-lg-offset-9 adv-search-button-cont">
							<a href="#" class="button-primary pull-right">
								<span>Найти</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-search"></i></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</form>
    </section>

    <section class="section-light bottom-padding-45 section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="feature wow fadeInLeft" id="feature1">
						<div class="feature-icon center-block"><i class="fa fa-building"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">PIXEL PERFECT</h5>
							<h3>DESIGN<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="feature wow fadeInUp" id="feature2">
						<div class="feature-icon center-block"><i class="fa fa-home"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">FIFTY</h5>
							<h3>HTML FILES<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="feature wow fadeInUp" id="feature3">
						<div class="feature-icon center-block"><i class="fa fa-industry"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">MASONRY, LIST &amp; GRID</h5>
							<h3>LAYOUTS<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="feature wow fadeInRight" id="feature4">
						<div class="feature-icon center-block"><i class="fa fa-tree"></i></div>
						<div class="feature-text">
							<h5 class="subtitle-margin">MODERN &amp; CLEAN</h5>
							<h3>PROJECT<span class="special-color">.</span></h3>
							<div class="title-separator center-block feature-separator"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section class="featured-offers parallax">

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<h5 class="subtitle-margin second-color">очень рекомендуем</h5>
							<h1 class="second-color">лучшие предложения<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3">
					<a href="#" class="navigation-box navigation-box-next" id="featured-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box navigation-box-prev" id="featured-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-12">
					<div class="title-separator-secondary"></div>
				</div>
			</div>
		</div>
		<div class="featured-offers-container">
			<div class="owl-carousel" id="featured-offers-owl" data-wb="role=foreach&form=units&limit=7" data-wb-if='active="on"'>
					<meta data-wb="role=include&template=offer.featured.inc.php">
			</div>
		</div>
    </section>

		<section class="section-dark">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-12">
						<h5 class="subtitle-margin">будьте в курсе</h5>
								<h1 class="">Новости<span class="special-color">.</span></h1>
					</div>

					<div class="col-xs-12">
						<div class="title-separator-primary"></div>
					</div>
				</div>
			</div>
			<div class="container blog-grid1-container">
				<div class="row" data-wb="role=foreach&form=news&sort=date:d&hide=true" data-wb-if='active="on"'>
					<div class="col-md-12 col-lg-6 blog-grid1-left-col" data-wb-where='_odev="odd"'>
						<article class="blog-grid1-item zoom-cont">
							<figure class=""><a href="/news/{{id}}/">
								<img data-wb="role=thumbnail&width=584&height=584" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' />
							</a></figure>
							<div class="blog-grid1-post-content">
								<div class="blog-grid1-topline">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>{{_env.user.first_name}}</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
									<div class="clearfix"></div>
								</div>
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>{{header}}</h4></a>
								<div class="blog-grid1-separator"></div>
								<p>{{wbGetWords({{text}},10)}} [...]</p>
								<a href="/news/{{id}}/" class="blog-grid1-button">
									<span>читать</span>
									<div class="blog-grid1-triangle"></div>
								</a>
							</div>
						</article>
					</div>
					<div class="col-md-12 col-lg-6 blog-grid1-right-col" data-wb-where='_odev="even"'>
						<article class="blog-grid1-item zoom-cont">
							<figure class=""><a href="/news/{{id}}/">
								<img data-wb="role=thumbnail&width=584&height=584" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' />
							</a></figure>
							<div class="blog-grid1-post-content">
								<div class="blog-grid1-topline">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>{{_env.user.first_name}}</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
									<div class="clearfix"></div>
								</div>
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>{{header}}</h4></a>
								<div class="blog-grid1-separator"></div>
								<p>{{wbGetWords({{text}},10)}}...</p>
								<a href="blog-right-sidebar.html" class="blog-grid1-button">
									<span>читать</span>
									<div class="blog-grid1-triangle"></div>
								</a>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>


	<section class="testimonials parallax">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<h5 class="subtitle-margin second-color">recommendations</h5>
							<h1 class="second-color">our clients say<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3">
					<a href="#" class="navigation-box navigation-box-next" id="testimonials-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box navigation-box-prev" id="testimonials-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div></a>
				</div>
				<div class="col-xs-12">
					<div class="title-separator-secondary"></div>
				</div>
			</div>
		</div>

			<div class="container margin-top-90">
				<div class="row">
					<div class="col-xs-12 owl-carousel" id="testimonials-owl">
						<div class="testimonial">
							<img src="images/testimonials1.jpg" alt="" class="testimonials-photo" />
							<div class="testimonials-content">
								<p class="lead">Smith’s Family</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

							</div>
							<div class="big-triangle">
								</div>
								<div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
						</div>
						<div class="testimonial">
							<img src="images/testimonials2.jpg" alt="" class="testimonials-photo" />
							<div class="testimonials-content">
								<p class="lead">Meggy Johnson</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<div class="big-triangle">
								</div>
								<div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
							</div>
						</div>
						<div class="testimonial">
							<img src="images/testimonials3.jpg" alt="" class="testimonials-photo" />
							<div class="testimonials-content">
								<p class="lead">Paola Brown &amp; Tommy</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<div class="big-triangle">
								</div>
								<div class="big-icon"><i class="fa fa-quote-right fa-lg"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>

	<section class="section-light top-padding-45 bottom-padding-45">
		<div class="container">
			<div class="row count-container">
				<div class="col-xs-6 col-lg-3">
					<div class="number" id="number1">
						<div class="number-img">
							<i class="fa fa-building"></i>
						</div>
						<span class="number-label text-color2">APARTMENTS</span>
						<span class="number-big text-color3 count" data-from="0" data-to="130" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border">
					<div class="number" id="number2">
						<div class="number-img">
							<i class="fa fa-home"></i>
						</div>
						<span class="number-label text-color2">HOUSES</span>
						<span class="number-big text-color3 count" data-from="0" data-to="107" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border3">
					<div class="number" id="number3">
						<div class="number-img">
							<i class="fa fa-industry"></i>
						</div>
						<span class="number-label text-color2">COMMERCIAL</span>
						<span class="number-big text-color3 count" data-from="0" data-to="149" data-speed="2000"></span>
					</div>
				</div>
				<div class="col-xs-6 col-lg-3 number_border">
					<div class="number" id="number4">
						<div class="number-img">
							<i class="fa fa-tree"></i>
						</div>
						<span class="number-label text-color2">LAND</span>
						<span class="number-big text-color3 count" data-from="0" data-to="25" data-speed="2000"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
