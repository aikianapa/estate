<div data-wb="role=include&template=wrapper.inc.php"></div>

<div append="main">
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">

		<div class="parallax parallax-top" style="background-image: url('/uploads/pages/{{id}}/{{images.0.img}}')"></div>
		<div class="dark-over-pages"></div>

		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">{{header}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top padding-bottom-smaller z-bigger background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="subtitle with-line text-center mb-4">Новости рынка недвижимости</div>
					<h3 class="text-center padding-bottom-small">{{header}}</h3>
				</div>
				<div class="section clearfix"></div>
				<div data-wb="role=foreach&form=news&sort=_created:d&hide=true" data-wb-if='active="on"'>
					<div class="col-md-6 col-xl-4 mt-4 mt-md-0">
					<div class="room-box background-white">
						<a href="/news/{{id}}/">
							<img data-wb="role=thumbnail&width=700&height=467" src="0" alt="">
						</a>
						<div class="room-box-in">
							<h6 class="">{{header}}</h6>
							<p class="mt-3">{{wbGetWords(text,12)}}</p>
							<a class="mt-1 btn btn-primary" href="/news/{{id}}/">{{_lang.more}}</a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-bottom-smaller z-bigger background-grey over-hide">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="project-nav-wrap">
						<a href="#"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">Новее<div class="text-on-hover">последние новости</div></div></a>
						<a href="#"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">Старее<div class="text-on-hover">старые новости</div></div></a>
					</div>
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
