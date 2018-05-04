  <br>
  <!-- Property Search Box -->
    <section id="property-search-container" class="container" style="margin-bottom: 0px;">
        <div class="property-search-form horizontal">
            {!! Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')) !!}
            <div class="main-search-sec">

                <div class="col-xs-6 col-sm-3 search-field">
                    <input type="text" placeholder="Заголовок, адрес ..." name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;">
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <select id="proeprty-direction" name="direction">
                    <option value="">Направление</option>
                      @foreach(\App\Direction::orderBy('name')->get() as $direct)
                        <option value="{{$direct->id}}" {{ old('direction', $data['direction']) == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>
                        {{-- <option value="{{$direct->id}}" @if(old('direction')==$direct->id) selected @endif>{{$direct->name}}</option> --}}
                      @endforeach
                  </select>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                    <select id="proeprty-type" name="type">
                      <option value="">Тип объекта</option>
                      @foreach(\App\Types::orderBy('types')->get() as $type)
                            <option value="{{$type->id}}" {{ old('type', $data['type']) == $type->id ? 'selected' : '' }}>{{$type->types}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-xs-6 col-sm-2 search-field">
                    <button class="btn" type="submit" name="submit">Найти</button>
                </div>

                <input id="property_purpose" name="purpose" type="hidden" value="all">
                <div class="col-xs-3 col-sm-1 search-field">
                    <a href="/sale" class="btn" role="button">Сброс</a>
                </div>

            		<div class="col-xs-6 col-sm-3 search-field">
                  <p>Цена (млн)</p>
            			<span id="ex1SliderVal0">10</span><input id="ex1" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="100" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex1SliderVal1">90</span>
            		</div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Удаление от МКАД (км)</p>
                  <span id="ex2SliderVal0">10</span><input id="ex2" type="text" class="span2" name="range"
                        value="" data-slider-min="0" data-slider-max="150" data-slider-step="1"
                        data-slider-value="[10,140]"/><span id="ex2SliderVal1">150</span>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Площадь участка (сотки)</p>
                  <span id="ex3SliderVal0">10</span><input id="ex3" type="text" class="span2" name="land_area"
                        value="" data-slider-min="0" data-slider-max="100" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex3SliderVal1">90</span>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Площадь дома (м2)</p>
                  <span id="ex4SliderVal0">50</span><input id="ex4" type="text" class="span2" name="build_area"
                        value="" data-slider-min="0" data-slider-max="2000" data-slider-step="50"
                        data-slider-value="[50,300]"/><span id="ex4SliderVal1">300</span>
                </div>

            </div>
            {!! Form::close() !!}

        </div>
    </section>
    <!-- End of Property Search Box -->
