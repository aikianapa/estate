<meta data-wb="role=include&template=wrapper.inc.php">

<div append="main">
	<section class="short-image no-padding blog-short-title">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-12 short-image-title">
				<h5 class="subtitle-margin second-color">наши</h5>
				<h1 class="second-color">Новости</h1>
				<div class="short-title-separator"></div>
			</div>
		</div>
	</div>
	</section>

	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
							<div class="masonry-grid masonry-grid-short" data-wb="role=foreach&form=news&sort=date:d&size=10">
									<!-- width of .grid-sizer used for columnWidth -->
									<div>
										<div class="masonry-grid-sizer"></div>
										<meta data-wb="role=variable&var=class" data-wb-if='"{{_ndx}}"="1"' value="masonry-grid-item-big big-blog-grid2-item" else="blog-grid2-item">
										<article class="masonry-grid-item {{_var.class}} zoom-cont">
											<figure><a href="blog-right-sidebar.html"><img data-wb="role=thumbnail&width=600&height=500" src="0" alt="" class="zoom" data-wb-where='"{{images.0.img}}">""' /></a></figure>
											<div class="blog-grid2-post-content">

												<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>{{header}}</h4></a>
												<div class="blog-grid2-separator"></div>
												<p>{{wbGetWords({{text}},10)}}</p>
												<div class="blog-grid2-bottom">
													<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
													<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>{{date("d.m.Y",{{strtotime(date)}})}}</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</article>
									</div>
						</div>
						<div class="offer-pagination margin-top-15">
							<a href="archive-grid2-right-sidebar.html#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="archive-grid2-right-sidebar.html#">2</a><a href="archive-grid2-right-sidebar.html#">3</a><a href="archive-grid2-right-sidebar.html#">4</a><a href="archive-grid2-right-sidebar.html#" class="next"><i class="jfont">&#xe802;</i></a>
							<div class="clearfix"></div>
						</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="sidebar">
						<h4 class="sidebar-title">categories<span class="special-color">.</span></h4>
						<div class="title-separator-primary"></div>
						<div class="margin-top-30"></div>
						<ul class="blue-ul">
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 1</a></li>
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 2</a></li>
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 3</a></li>
							<li class="ap-submenu">
								<ul class="blue-ul">
									<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 4</a></li>
									<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 5</a></li>
								</ul>
							</li>
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 6</a></li>
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 7</a></li>
							<li><span class="custom-ul-bullet"></span><a href="archive-grid2-right-sidebar.html#">Category 8</a></li>
						</ul>
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">featured offers<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-featured-cont">
							<div class="sidebar-featured">
								<a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
									<img src="images/sidebar-featured1.jpg" alt="" />
									<div class="sidebar-featured-type">
										<div class="sidebar-featured-estate">A</div>
										<div class="sidebar-featured-transaction">S</div>
									</div>
								</a>
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">Fort Collins, Colorado 80523, USA</a></div>
								<div class="sidebar-featured-price">$ 320 000</div>
								<div class="clearfix"></div>
							</div>
							<div class="sidebar-featured">
								<a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
									<img src="images/sidebar-featured2.jpg" alt="" />
									<div class="sidebar-featured-type">
										<div class="sidebar-featured-estate">A</div>
										<div class="sidebar-featured-transaction">S</div>
									</div>
								</a>
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">West Fourth Street, New York 10003, USA</a></div>
								<div class="sidebar-featured-price">$ 350 000</div>
								<div class="clearfix"></div>
							</div>
							<div class="sidebar-featured">
								<a class="sidebar-featured-image" href="estate-details-right-sidebar.html">
									<img src="images/sidebar-featured3.jpg" alt="" />
									<div class="sidebar-featured-type">
										<div class="sidebar-featured-estate">A</div>
										<div class="sidebar-featured-transaction">S</div>
									</div>
								</a>
								<div class="sidebar-featured-title"><a href="estate-details-right-sidebar.html">E. Elwood St. Phoenix, AZ 85034, USA</a></div>
								<div class="sidebar-featured-price">$ 410 000</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="sidebar-title-cont">
							<h4 class="sidebar-title">latest news<span class="special-color">.</span></h4>
							<div class="title-separator-primary"></div>
						</div>
						<div class="sidebar-blog-cont">
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog1.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog2.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
							<article>
								<a href="blog-right-sidebar.html"><img src="images/footer-blog3.jpg" alt="" class="sidebar-blog-image" /></a>
								<div class="sidebar-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor sit</a></div>
								<div class="sidebar-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
