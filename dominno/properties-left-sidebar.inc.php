<!--Start of Featured Property Area-->
<div class="property-area ptb-120 sidebar">
  <div class="container">
    <div class="row">
      <div class="col-md-4 pr-55">
        <div class="single-sidebar-widget fix mb-40">
                    <div class="sidebar-widget-title mb-30">
                        <h5>Search for Property</h5>
                    </div>
  <form id="propertiesFilterForm" class="">
    <div class="form-box mb-18 pr-10">
      <div class="select">
        <select data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
          data-watcher="change=#propertiesFilterForm [name=complex]" placeholder="Район"
          name="district" class="form-control">
          <option value="{{id}}">{{name}}</option>
        </select>
      </div>
    </div>
    <div class="form-box mb-18 pl-10">
      <div class="select">
        <select data-wb="role=foreach&form=complex&tpl=true" data-wb-if='active="on"'
            data-filter='{"district":"%value%"}'
            placeholder="Комплекс" name="complex" class="form-control"
            data-watcher='change=#propertiesFilterForm [name=building]'  >
          <option value="{{id}}">{{name}}</option>
        </select>
      </div>
    </div>

    <div class="form-box pr-10">
      <div class="select">
        <select data-wb="role=tree&form=complex&item=%value%&field=buildings&tpl=true" name="building"
                class="form-control" placeholder="{{_lang.building}}">
          <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
        </select>
      </div>
    </div>
    <div class="form-box pl-10">
      <div class="select">
        <select data-wb="role=tree&item=types&branch=units&parent=false" placeholder="Тип" name="type" class="form-control">
          <option value="{{id}}">{{name}}</option>
        </select>
      </div>
    </div>
<!--
    <div class="form-box mb-18 pr-10">
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
    <div class="form-box mb-400 pl-10">
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

-->
    <div class="form-box large mt-8">
      <!--
      <div class="price_filter">
        <div class="price_slider_amount mb-20">
           <div class="slider-values">
            <span>Price Range</span>
            <input type="text" class="amount" name="price"  placeholder="Add Your Price" />
          </div>
        </div>
        <div class="slider-range"></div>
      </div>
    -->
      <button name="search_price" type="button" class="button search_price lemon mt-36" data-watcher="filter=#propertiesList">
        <span><span>SEARCH PROPERTY</span></span>
      </button>
    </div>
  </form>
</div>
        <div class="single-sidebar-widget fix mb-60 hidden-sm hidden-xs">
                    <div class="sidebar-widget-title mb-32">
                        <h5>Жилые комплексы</h5>
                    </div>
                    <div class="row" data-wb="role=foreach&form=complex&tpl=true" data-wb-if='active = "on"'>
                      <div class="col-md-6 pr-9 mb-18 col-sm-3">
                            <div class="single-property hover-effect-two">
                              <div class="property-title fix pl-18 pr-18 pt-9 pb-0 bg-violet">
                                <div class="title-left">
                                  <h4 class="text-white mb-12"><a href="properties-details.html">{{name}}</a></h4>
                                </div>
                              </div>
                              <div class="property-image">
                                <a href="properties-details.html" class="block dark-hover">
                                  <img src="/thumb/160x110/src/{{image}}" alt="">
                                  <span class="img-button text-uppercase">{{_lang.more}}</span>
                                </a>
                              </div>
                              <div class="property-title fix pl-18 pr-18 pt-9 pb-9 bg-violet">
                                <h3>от {{price_min}}</h3>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
        <div class="single-sidebar-widget fix mb-60">
                    <div class="sidebar-widget-title mb-32">
                        <h5>Our Agent</h5>
                    </div>
                    <div class="sidebar-agent">
                      <div class="row">
                        <div class="col-md-4 mb-22 col-sm-2 col-xs-4">
                          <div class="agent-hover">
                            <a href="agent-details.html" class="block border mb-11">
                              <img src="images/team/s-1.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Ross Taylor</a></h5>
                          </div>
                        </div>
                        <div class="col-md-4 mb-22 col-sm-2 col-xs-4">
                          <div class="agent-hover">
          <a href="agent-details.html" class="block border mb-11">
            <img src="images/team/s-2.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Tom Cruse</a></h5>
                          </div>
                        </div>
                        <div class="col-md-4 mb-22 col-sm-2 col-xs-4">
                          <div class="agent-hover">
          <a href="agent-details.html" class="block border mb-11">
            <img src="images/team/s-3.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Lisa Smith</a></h5>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-4">
                          <div class="agent-hover">
          <a href="agent-details.html" class="block border mb-11">
            <img src="images/team/s-4.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Rosi Wiams</a></h5>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-4">
                          <div class="agent-hover">
          <a href="agent-details.html" class="block border mb-11">
            <img src="images/team/s-5.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Evan Smith</a></h5>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-4">
                          <div class="agent-hover">
          <a href="agent-details.html" class="block border mb-11">
            <img src="images/team/s-6.jpg" alt="">
          </a>
          <h5><a href="agent-details.html" class="block">Nail Albert</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
        <div class="single-sidebar-widget fix">
                    <div class="sidebar-widget-title mb-32">
                        <h5>Tags</h5>
                    </div>
                    <ul class="tags">
                        <li><a href="properties-details.html" class="mb-15 mr-7">Real Estate</a></li>
                        <li><a href="index.html" class="mb-15 ml-7 mr-7">Home</a></li>
                        <li><a href="properties-details.html" class="mb-15 ml-7">Appartment</a></li>
                        <li><a href="properties-details.html" class="mb-15 mr-7">Duplex Villa</a></li>
                        <li><a href="properties-details.html" class="mb-15 ml-7">Buy Property</a></li>
                    </ul>
                </div>
      </div>
      <div class="col-md-8">
        <div class="row"  id="propertiesList"  data-wb="role=foreach&form=units&sort=_created:d&tpl=true" data-wb-if='active="on"'>
          <div class="col-md-6 mb-40 col-sm-6">
    <div class="single-property hover-effect-two">
      <div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
        <div class="title-left pull_left">
          <h4 class="text-white mb-12" data-wb="role=tree&item=types&branch=units&branch={{type}}">
            <a href="properties-details.html">{{name}}</a>
          </h4>
          <span data-wb="role=formdata&form=complex&item={{complex}}">
            <span class="mr-10"><i class="fa fa-building"></i></span>
            {{name}}
          </span>
        </div>
        <div class="fix pull_right">
          <h3>{{price}}₽</h3>
        </div>
      </div>
      <div class="property-image">
        <a href="properties-details.html" class="block dark-hover">
          <img data-wb="role=thumbnail&width=368&height=287" src="0" alt="">
          <span class="img-button text-uppercase">{{_lang.more}}</span>
          <span class="p-tag bg-lemon">FOR SALE</span>
        </a>
        <div class="hover-container pl-15 pr-15 pt-16 pb-15">
          <div class="hover-item">
            <img class="mr-10" src="images/icons/floor.png" alt="">
            <span>{{square}} кв.м.</span>
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
        <div class="col-md-12 fix">
  <div class="pagination-content text-center block top-margin">
    <ul class="pagination fix mt-40 mb-0">
      <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li class="current"><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
    </ul>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<!--End of Featured Property Area-->
