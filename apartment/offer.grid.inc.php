<div class="grid-offer-col">
  <div class="grid-offer">
    <div class="grid-offer-front">
      <div class="grid-offer-photo">
        <img class="room" data-wb="role=thumbnail&width=524&height=354" src="0" alt="">
        <div class="type-container">
          <div class="estate-type"  data-wb="role=formdata&form=complex&item={{complex}}">{{name}}</div>
        </div>
      </div>
      <div class="grid-offer-text">
        <i class="fa fa-map-marker grid-offer-localization"></i>
        <div class="grid-offer-h4"><h4 class="featured-offer-title" data-wb="role=tree&item=types&branch=units&branch={{type}}"><span>{{name}}</span></h4></div>
        <div class="clearfix"></div>
        <p>{{wbGetWords({{text}},10)}} [...]</p>
        <div class="clearfix"></div>
      </div>
      <div class="price-grid-cont">
        <div class="grid-price-label pull-left">Цена:</div>
        <div class="grid-price pull-right">
          {{price}} т.р.
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="grid-offer-params">
        <div class="grid-area">
          <img src="images/area-icon.png" alt="" /><span>{{square}}м</span><sup>2</sup>
        </div>
        <div class="grid-rooms">
          <img src="images/rooms-icon.png" alt="" />3
        </div>
        <div class="grid-baths">
          <img src="images/bathrooms-icon.png" alt="" />1
        </div>
      </div>

    </div>
    <div class="grid-offer-back">
      <div id="grid-map1" class="grid-offer-map"></div>
      <div class="button">
        <a href="/units/{{id}}/" class="button-primary">
          <span>подробно</span>
          <div class="button-triangle"></div>
          <div class="button-triangle2"></div>
          <div class="button-icon"><i class="fa fa-search"></i></div>
        </a>
      </div>
    </div>
  </div>
</div>
