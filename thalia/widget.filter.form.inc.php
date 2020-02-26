<div class="section background-dark p-4">
  <form id="propertiesFilterForm">
  <div class="row">
    <div class="col-12">
      <div class="input-group" id="flight-datepicker">
        <div class="row">
          <div class="col-12">
            <select data-wb="role=tree&item=city&branch=districts&parent=false&children=false"
              data-watcher="change=#propertiesFilterForm [name=complex]" placeholder="Все районы"
              name="district" class="wide">
              <option value="{{id}}">{{name}}</option>
            </select>
          </div>
          <div class="col-12 pt-4">
            <select data-wb="role=foreach&form=complex&tpl=true" data-wb-if='active="on"'
                data-filter='{"district":"%value%"}'
                placeholder="Все комплексы" name="complex" class="wide"
                data-watcher='change=#propertiesFilterForm [name=building]'  >
              <option value="{{id}}">{{name}}</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-12 pt-4">
          <select data-wb="role=tree&form=complex&item=%value%&field=buildings&tpl=true" name="building"
                  class="wide" placeholder="Все корпуса">
            <option value="{{id}}" data-sections="{{data.sections}}">{{name}}</option>
          </select>
        </div>
        <div class="col-12 pt-4">
          <select data-wb="role=tree&item=types&branch=units&parent=false" placeholder="Все типы" name="type" class="wide">
            <option value="{{id}}">{{name}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-12 pt-5">
        <div class="range-slider">
             <span class="range-value pull-right"></span>
             <h6 class="color-white mb-3">Цена:</h6>
             <div class="slider-values">
                <input type="hidden" class="min" name="price__min" />
                <input type="hidden" class="max" name="price__max" />
            </div>
            <div class="slider-range price" data-min="" data-max=""></div>
        </div>
    </div>
    <div class="col-12 pt-5">
        <div class="range-slider">
             <span class="range-value pull-right"></span>
             <h6 class="color-white mb-3">Площадь:</h6>
             <div class="slider-values">
                <input type="hidden" class="min" name="square__min" />
                <input type="hidden" class="max" name="square__max" />
            </div>
            <div class="slider-range square" data-min="" data-max=""></div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-12 pt-5">
      <h6 class="color-white mb-3">Дополнительно:</h6>
      <ul class="list">
        <li class="list__item">
          <label class="label--checkbox">
            <input type="checkbox" name="finish" class="checkbox"> С отделкой
          </label>
        </li>
      </ul>
    </div>

    <button type="button" class="btn btn-primary col-12 mt-5" data-watcher="filter=#propertiesList&tpl=false">Показать</button>
  </div>
  </form>
</div>
