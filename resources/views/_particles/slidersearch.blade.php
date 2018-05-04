<!-- Main Slider -->
  {{-- <section id="main-slider">

    @foreach(\App\Slider::orderBy('slider_title')->get() as $slide)
    <div class="items">
      <div class="img-container" data-bg-img="{{ URL::asset('upload/slides/'.$slide->image_name.'.jpg') }}"></div>
      <!-- Change the URL section based on your image\'s name -->
      <div class="slide-caption">
        <div class="inner-container clearfix">
          <div class="first-sec">{{ $slide->slider_text1 }}</div>
          <div class="sec-sec">{{ $slide->slider_text2 }}</div>
        </div>
      </div>
    </div>
    @endforeach

  </section> --}}
  <!-- End of Main Slider -->
  <br>
  <!-- Property Search Box -->
    <section id="property-search-container" class="container" style="margin-bottom: 0px;">
        <div class="property-search-form horizontal">
            {!! Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')) !!}
            <div class="main-search-sec">
                <div class="col-xs-6 col-sm-3 search-field">
                    <input type="text" placeholder="Заголовок или адрес (можно часть)" name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;">
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <select id="proeprty-type" name="direction">
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
                <div class="col-xs-3 col-sm-2 search-field">
                    <button class="btn" type="submit" name="submit">Найти</button>
                </div>

                <div id="myfloat">
                    @if ($page=='Гостинная')
                      <input id="property_purpose" name="purpose" type="hidden" value="all">
                      <div class="col-xs-2 col-sm-1 search-field">
                          <a href="/" class="btn" role="button">Сброс</a>
                      </div>
                    @elseif ($page=='Продажа')
                      <input id="property_purpose" name="purpose" type="hidden" value="Продажа">
                      <div class="col-xs-2 col-sm-1 search-field">
                          <a href="/sale" class="btn" role="button">Сброс</a>
                      </div>
                    @else
                      <input id="property_purpose" name="purpose" type="hidden" value="Аренда">
                      <div class="col-xs-2 col-sm-1 search-field">
                          <a href="/rent" class="btn" role="button">Сброс</a>
                      </div>
                    @endif
                </div>

            </div>


            <div id="myfloat">

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
