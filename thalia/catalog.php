<meta data-wb="role=include&template=wrapper.inc.php">

<div append="main">
  <!-- Primary Page Layout
	================================================== -->

  <div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('/thumb/1920x1080/src/uploads/pages/catalog/{{images.0.img}}')"></div>
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

  <div class="section padding-top-bottom z-bigger">
    <div class="section z-bigger">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mt-4 mt-lg-0">
            <div class="row" id="propertiesList" data-wb="role=foreach&form=units&tpl=true" data-wb-if='active = "on"'
            data-wb-return='{
                "min":["price","square"],
                "max":["price","square"],
                "count": true
            }'>
              <div class="col-lg-6 mb-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s" >
                <meta data-wb="role=include&template=widget.room.box.inc.php" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-first order-lg-last">
            <meta data-wb="role=include&template=widget.filter.form.inc.php" />
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
