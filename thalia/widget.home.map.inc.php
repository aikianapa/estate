
  <div class="section background-dark over-hide">

    <div class="hero-center-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-sm-8 parallax-fade-top">
            <div class="hero-text">Discover your paradise under the Greek sky</div>
          </div>
          <div class="col-12 mt-3 mb-5 parallax-fade-top">
            <div class="hero-stars">
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="col-12 mt-3 parallax-fade-top">
            <form id="propertiesFilterForm" class="booking-hero-wrap">
              <div class="row justify-content-center">
                <div class="col-5 no-mob">
                  <div class="row">
                    <div class="col-6">
											<select data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
							          data-watcher="change=#propertiesFilterForm [name=complex]" placeholder="Район"
							          name="district" class="wide">
							          <option value="{{id}}">{{name}}</option>
							        </select>
                    </div>
                    <div class="col-6">
											<select data-wb="role=foreach&form=complex&tpl=true" data-wb-if='active="on"'
							            data-filter='{"district":"%value%"}'
							            placeholder="Комплекс" name="complex" class="wide"
							            data-watcher='change=#propertiesFilterForm [name=building]'  >
							          <option value="{{id}}">{{name}}</option>
							        </select>
                    </div>
                  </div>
                </div>
								<div class="col-5 no-mob">
                  <div class="row">
                    <div class="col-6">
											<select data-wb="role=tree&form=complex&item=%value%&field=buildings&tpl=true" name="building"
							                class="wide" placeholder="Корпус">
							          <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
							        </select>
                    </div>
                    <div class="col-6">
											<select data-wb="role=tree&item=types&branch=units&parent=false" placeholder="Тип" name="type" class="wide">
							          <option value="{{id}}">{{name}}</option>
							        </select>
                    </div>
                  </div>
                </div>
                <div class="col-6  col-sm-4 col-lg-2">
                  <a class="booking-button" href="search.html">Найти</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


<style>ymaps {filter: grayscale(30%) brightness(0.9);}</style>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AbzlI-3dPcfKP8Yba1v8v6K3iC6k01GrQ&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=false"></script>


  </div>
