<div data-wb="role=include&template=wrapper.inc.php"></div>

<div append="main">
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide">

		<div class="parallax parallax-top" style="background-image: url('{{image}}')"></div>
		<div class="dark-over-pages"></div>

		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Rooms Gallery</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section background-dark padding-top-bottom-smaller over-hide">
		<div class="section z-bigger">
			<div class="container">
				<div class="row justify-content-center">
					<style>.amenities img {filter:invert(1);}</style>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
						<div class="amenities">
							<img src="img/icons/rooms.svg" alt="">
							<p data-wb="role=tree&item=types&branch=units->{{type}}&children=false"><span>{{name}}</span></p>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
						<div class="amenities">
							<img src="img/icons/floor.svg" alt="">
							<p>{{square}} м<sup>2</sup></p>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center" data-wb-where='finish="on"'>
						<div class="amenities">
							<img src="img/icons/paint.svg" alt="">
							<p>отделка</p>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-md-0">
						<div class="amenities">
							<img src="img/icons/rub.svg" alt="">
							<p>{{price}} тыс.</p>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
						<div class="amenities">
							<img src="img/icons/district.svg" alt="">
							<p data-wb="role=tree&item=city&branch=districts->{{district}}&children=false"><span>{{name}}</span></p>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center mt-4 mt-lg-0">
						<div class="amenities">
							<img src="img/icons/metro.svg" alt="">
							<p data-wb="role=tree&item=city&branch=districts->{{district}}->{{metro}}&children=false"><span>{{name}}</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom z-bigger">
		<div class="section z-bigger">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="section">
							<div class="customNavigation rooms-sinc-1-2">
								<a class="prev-rooms-sync-1"></a>
								<a class="next-rooms-sync-1"></a>
							</div>
							<div id="rooms-sync1" class="owl-carousel" data-wb="role=foreach&from=images">
								<div class="item">
									<img data-wb="role=thumbnail&width=750&height=500" src="/uploads/{{_form}}/{{_item}}/{{img}}" alt="">
								</div>
							</div>
						</div>
						<div class="section" data-wb="role=foreach&from=images">
							<div id="rooms-sync2" class="owl-carousel">
								<div class="item">
									<img data-wb="role=thumbnail&width=150&height=100" src="/uploads/{{_form}}/{{_item}}/{{img}}" alt="">
								</div>
							</div>
						</div>
						<div class="section pt-5" data-wb="role=formdata&form=complex&item={{complex}}">
							<h5>О комплексе {{name}}</h5>
							<div class="mt-3">{{text}}</div>
						</div>
						<div class="section pt-4">
							<div class="row">
								<div class="col-12">
									<h5 class="mb-3">Характеристики</h5>
								</div>
								<div class="col-lg-6">
									<p><strong class="color-black">Площадь:</strong><span> {{square}} м<sup>2</sup></span></p>
									<p data-wb="role=tree&item=types&branch=units->{{type}}&children=false"><strong class="color-black">Тип:</strong> <span> {{name}}</span></p>
									<p data-wb-where='finish="on"'><strong class="color-black">Отделка:</strong> Да</p>
									<p data-wb-where='finish#"on"'><strong class="color-black">Отделка:</strong> Нет</p>
									<p><strong class="color-black">Цена:</strong> {{price}} тыс.руб.</p>
								</div>
								<div class="col-lg-6" data-wb="role=formdata&form=complex&item={{complex}}">
									<p data-wb="role=tree&item=city&branch=districts->{{district}}&children=false"><strong class="color-black">Район:</strong><span> {{name}}</span></p>
									<p data-wb="role=tree&item=city&branch=districts->{{district}}->{{metro}}&children=false"><strong class="color-black">Метро:</strong> <span> {{name}}</span></p>
									<p><strong class="color-black">Расстояние до метро:</strong> {{metro_notice}}</p>
									<p><strong class="color-black">Срок сдачи:</strong> {{quart}} квартал {{year}}</p>
								</div>
							</div>
						</div>
						<div class="section pt-4">
							<h5>Описание</h5>
							<div class="mt-3">{{text}}</div>
						</div>
					</div>
					<div class="col-lg-4 order-first order-lg-last">
						<meta data-wb="role=include&template=widget.filter.form.inc.php" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center" id="propertiesList" data-wb="role=foreach&form=units&tpl=true&limit=3">
				<div class="col-lg-4 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<meta data-wb="role=include&template=widget.room.box.inc.php" />
				</div>
			</div>
		</div>
	</div>

	<div class="section background-dark over-hide">
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-1.jpg" alt="">
							<div class="services-text-over">spa salon</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-2.jpg" alt="">
							<div class="services-text-over">restaurant</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-3.jpg" alt="">
							<div class="services-text-over">pool</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-4.jpg" alt="">
							<div class="services-text-over">activities</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

</div>
