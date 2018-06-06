
            {{-- <div class="col-xs-4 col-sm-2 search-field">
              <select id="proeprty-type" name="direction">
                <option value="">Направление</option>
                  @foreach(\App\Direction::orderBy('name')->get() as $direct)
                    <option value="{{$direct->id}}" {{ old('direction', $data['direction']) == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>

                  @endforeach
              </select>
            </div> --}}
              {{-- <div class="col-xs-2 col-sm-1 search-field">
                <select name="currency">
                  <option value="₽$€" @if(old('currency', $data['currency'])=='₽$€') selected @endif>₽ $ €</option>
                  <option value="₽" @if(old('currency', $data['currency'])=='₽') selected @endif>₽</option>
                  <option value="$" @if(old('currency', $data['currency'])=='$') selected @endif>$</option>
                  <option value="€" @if(old('currency', $data['currency'])=='€') selected @endif>€</option>
                </select>
              </div> --}}
              <div class="col-xs-4 col-sm-2 search-field">
                  <input type="text" placeholder="Заголовок или адрес" name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: darkgreen">
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
              <div class="col-xs-4 col-sm-2 search-field">
                  <select id="proeprty-type" name="type">
                    <option value="">Тип объекта</option>
                    @if (\Request::is('rent'))
                      @foreach(\App\Property_types_rent::orderBy('name')->get() as $type)
                            <option value="{{$type->id}}" {{ old('type', $data['type']) == $type->id ? 'selected' : '' }}>{{$type->name}}</option>
                      @endforeach
                    @else
                      @foreach(\App\Types::orderBy('types')->get() as $type)
                            <option value="{{$type->id}}" {{ old('type', $data['type']) == $type->id ? 'selected' : '' }}>{{$type->types}}</option>
                      @endforeach
                    @endif
                  </select>
              </div>

              <div class="col-xs-2 col-sm-1 search-field">
                  <button class="btn" type="submit" name="submit">Найти</button>
              </div>

              {{-- <div id="myfloat"> --}}
                  @if (\Request::is('/'))
                    <input id="property_purpose" name="purpose" type="hidden" value="all">
                    <div class="col-xs-2 col-sm-1 search-field">
                        <a href="/" class="btn" role="button">Сброс</a>
                    </div>
                  @elseif (\Request::is('sale'))
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
              {{-- </div> --}}

          </div>

          {{-- <div class="outline"> --}}

          <div class="col-xs-4 col-sm-2 search-field">
            {{-- <p>Цена min</p> --}}
            <select name="price" style="border-color: red;">
              <option value="1">Цена min</option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
            </select>


              {{-- <select id="proeprty-type" name="direction">
                <option value="">min</option>
                  @foreach(\App\Direction::orderBy('name')->get() as $direct)
                    <option value="{{$direct->id}}" {{ old('direction', $data['direction']) == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>
                  @endforeach
              </select> --}}
            </div>
            <div class="col-xs-4 col-sm-2 search-field">
              {{-- <p>Цена max</p> --}}
              <select id="proeprty-type" name="direction">
                <option value="">Цена max</option>
                  @foreach(\App\Direction::orderBy('name')->get() as $direct)
                    <option value="{{$direct->id}}" {{ old('direction', $data['direction']) == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>
                    {{-- <option value="{{$direct->id}}" @if(old('direction')==$direct->id) selected @endif>{{$direct->name}}</option> --}}
                  @endforeach
              </select>
            </div>

            <div class="col-xs-2 col-sm-1 search-field">
              {{-- <p>Валюта</p> --}}
              <select name="currency">
                <option value="₽$€" @if(old('currency', $data['currency'])=='₽$€') selected @endif>₽ $ €</option>
                <option value="₽" @if(old('currency', $data['currency'])=='₽') selected @endif>₽</option>
                <option value="$" @if(old('currency', $data['currency'])=='$') selected @endif>$</option>
                <option value="€" @if(old('currency', $data['currency'])=='€') selected @endif>€</option>
              </select>
            </div>



            <div class="col-xs-2 col-sm-1 search-field">
              <p>S участка-><wbr>&nbsp;&nbsp;&nbsp;(сотки)</p>
            </div>
            <div class="col-xs-2 col-sm-1 search-field">
              {{-- <p>Цена min</p> --}}
              <select name="price">
                <option value="1">min</option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-1 search-field">
              {{-- <p>Цена min</p> --}}
              <select name="price">
                <option value="1">max</option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
              </select>
            </div>



                        {{-- <div class="col-xs-2 col-sm-1 search-field">
                        </div> --}}
                        <div class="col-xs-4 col-sm-2 search-field">
                          {{-- <p>Цена min</p> --}}
                          <select name="price">
                            <option value="1">S дома min (м2)</option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                          </select>
                        </div>
                        <div class="col-xs-4 col-sm-2 search-field">
                          {{-- <p>Цена min</p> --}}
                          <select name="price">
                            <option value="1">S дома max (м2)</option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                          </select>
                        </div>









            {{-- <div class="col-xs-6 col-sm-3 search-field">
              <p><span id="ex1SliderVal0">{{$data['pricemin']}}</span> - Цена (млн {{$data['currency']}}) - <span id="ex1SliderVal1">{{$data['pricemax']}}</span></p>
              <input id="ex1" type="text" class="span2" name="price"
                    value=""
                    data-slider-value="[{{$data['pricemin']}},{{$data['pricemax']}}]"/>
            </div> --}}
            {{-- <div class="col-xs-6 col-sm-3 search-field">
              <p><span id="ex2SliderVal0">{{$data['rangemin']}}</span> - Удаление от МКАД (км) - <span id="ex2SliderVal1">{{$data['rangemax']}}</span></p>
              <input id="ex2" type="text" class="span2" name="range"
                    value="" data-slider-min="0" data-slider-max="50" data-slider-step="1"
                    data-slider-value="[{{$data['rangemin']}},{{$data['rangemax']}}]"/>
            </div>
            <div class="col-xs-6 col-sm-3 search-field">
              <p><span id="ex3SliderVal0">{{$data['landmin']}}</span> - Площадь участка (сот) - <span id="ex3SliderVal1">{{$data['landmax']}}</span></p>
              <input id="ex3" type="text" class="span2" name="land_area"
                    value="" data-slider-min="0" data-slider-max="300" data-slider-step="30"
                    data-slider-value="[{{$data['landmin']}},{{$data['landmax']}}]"/>
            </div>
            <div class="col-xs-6 col-sm-3 search-field">
              <p><span id="ex4SliderVal0">{{$data['buildmin']}}</span> - Площадь дома (м2) - <span id="ex4SliderVal1">{{$data['buildmax']}}</span></p>
              <input id="ex4" type="text" class="span2" name="build_area"
                    value="" data-slider-min="0" data-slider-max="3000" data-slider-step="100"
                    data-slider-value="[{{$data['buildmin']}},{{$data['buildmax']}}]"/>
            </div> --}}

          {{-- </div> --}}

          {!! Form::close() !!}

      </div>
  </section>
  <!-- End of Property Search Box -->

  @push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css" rel="stylesheet" type="text/css">
  @endpush

  @push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.min.js"></script>

    <script type="text/javascript">

      // var slider = new Slider('#ex1', {
      //   max: 300,
      //   min: 0.1,
      //   scale: 'logarithmic',
      //   step: 0.1
      // });
      // slider.on("slide", function(sliderValue1) {
      //   document.getElementById("ex1SliderVal0").textContent = sliderValue1[0];
      // 	document.getElementById("ex1SliderVal1").textContent = sliderValue1[1];
      // });
      var slider = new Slider('#ex2', {});
      slider.on("slide", function(sliderValue2) {
        document.getElementById("ex2SliderVal0").textContent = sliderValue2[0];
        document.getElementById("ex2SliderVal1").textContent = sliderValue2[1];
      });
      var slider = new Slider('#ex3', {});
      slider.on("slide", function(sliderValue3) {
        document.getElementById("ex3SliderVal0").textContent = sliderValue3[0];
        document.getElementById("ex3SliderVal1").textContent = sliderValue3[1];
      });
      var slider = new Slider('#ex4', {});
      slider.on("slide", function(sliderValue4) {
        document.getElementById("ex4SliderVal0").textContent = sliderValue4[0];
        document.getElementById("ex4SliderVal1").textContent = sliderValue4[1];
      });

    </script>
  @endpush
