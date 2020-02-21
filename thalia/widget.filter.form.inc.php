<div class="section background-dark p-4">
  <form id="propertiesFilterForm">
  <div class="row">
    <div class="col-12">
      <div class="input-daterange input-group" id="flight-datepicker">
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
      <h6 class="color-white mb-3">Max night price:</h6>
      <div class="selecteurPrix">
        <div class="range-slider">
          <input class="input-range" type="range" value="100" min="1" max="500">
          <div class="valeurPrix">
            <span class="range-value"></span>
          </div>
        </div>
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
