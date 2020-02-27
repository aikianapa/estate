<div class="room-box background-grey">
  <div class="room-name" data-wb="role=formdata&form=complex&item={{complex}}">{{name}}</div>
  <div class="room-per">
    {{price}} тыс.
  </div>
  <a href="/units/{{id}}/">
      <picture data-wb-where='"{{images.0.img}}">""'>
          <img class="room" data-wb="role=thumbnail&width=540&height=360" src="0" alt="">
      </picture>
      <picture data-wb-where='"{{images.0.img}}"=""' data-wb="role=formdata&form=complex&item={{complex}}">
          <img class="room" data-wb="role=thumbnail&width=27&height=18" src="0" alt="" style="filter:blur(10px)">
      </picture>
  </a>
  <a href="/complex/{{complex}}/" class="room-complex">
    <picture data-wb="role=formdata&form=complex&item={{complex}}">
        <img class="complex" data-wb="role=thumbnail&width=270&height=180" src="0" alt="">
    </picture>
  </div>
  <div class="room-box-in">
    <h5 class="" data-wb="role=tree&item=types&branch=units&branch={{type}}"><span>{{name}}</span></h5>
    <div class="room-icons mt-4 pt-4">
      <img src="img/icons/paint.svg" title= "С отделкой" alt="" data-wb-where='finish="on"'>
      <img src="img/icons/floor.svg" title= "{{square}} кв.м." alt="">
      <span>{{square}} м<sup>2</sup></span>
      <a href="/units/{{id}}/">{{_lang.more}}</a>
    </div>
  </div>
</div>
