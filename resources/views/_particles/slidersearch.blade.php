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
                    <input type="text" placeholder="Заголовок, адрес ..." name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;">
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                    <select id="proeprty-status" name="purpose">
                       <option value="">Назначение объекта</option>
                       <option value="Sale">Продажа</option>
                       <option value="Rent">Аренда</option>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                    <select id="proeprty-type" name="type">
                      <option value="">Тип объекта</option>
                      @foreach(\App\Types::orderBy('types')->get() as $type)
                            <option value="{{$type->id}}">{{$type->types}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-xs-6 col-sm-2 search-field">
                    <button class="btn" type="submit" name="submit">Найти</button>
                </div>
                <div class="col-xs-3 col-sm-1 search-field">
                    <a href="/" class="btn" role="button">Сброс</a>
                </div>

            		<div class="col-xs-6 col-sm-3 search-field">
                  <p>Задать min и max</p>
            			<span id="ex1SliderVal0">10</span><input id="ex1" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="99" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex1SliderVal1">90</span>
            		</div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Задать min и max</p>
                  <span id="ex2SliderVal0">10</span><input id="ex2" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="99" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex2SliderVal1">90</span>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Задать min и max</p>
                  <span id="ex3SliderVal0">10</span><input id="ex3" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="99" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex3SliderVal1">90</span>
                </div>
                <div class="col-xs-6 col-sm-3 search-field">
                  <p>Задать min и max</p>
                  <span id="ex4SliderVal0">10</span><input id="ex4" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="99" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex4SliderVal1">90</span>
                </div>

            </div>
            {!! Form::close() !!}

        </div>
    </section>
    <!-- End of Property Search Box -->
