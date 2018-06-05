<br>
<!-- Property Search Box -->
  <section id="property-search-container" class="container" style="margin-bottom: 0px;">
      <div class="property-search-form horizontal" style="background-color: WhiteSmoke;">
          {!! Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')) !!}
          <div class="main-search-sec">


            <div class="col-xs-2 col-sm-1 search-field">
              <p>от МКАД-><wbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(км)</p>
            </div>
            <div class="col-xs-2 col-sm-1 search-field">
                <select name="rangemin">
                <option value="0" @if(old('rangemin', $data['rangemin'])=='0') selected @endif>0</option>
                <option value="5" @if(old('rangemin', $data['rangemin'])=='5') selected @endif> 5 </option>
                <option value="10" @if(old('rangemin', $data['rangemin'])=='10') selected @endif> 10 </option>
                <option value="15" @if(old('rangemin', $data['rangemin'])=='15') selected @endif> 15 </option>
                <option value="20" @if(old('rangemin', $data['rangemin'])=='20') selected @endif> 20 </option>
                <option value="25" @if(old('rangemin', $data['rangemin'])=='25') selected @endif> 25 </option>
                <option value="30" @if(old('rangemin', $data['rangemin'])=='30') selected @endif> 30 </option>
                <option value="35" @if(old('rangemin', $data['rangemin'])=='35') selected @endif> 35 </option>
                <option value="40" @if(old('rangemin', $data['rangemin'])=='40') selected @endif> 40 </option>
                <option value="45" @if(old('rangemin', $data['rangemin'])=='45') selected @endif> 45 </option>
                <option value="50" @if(old('rangemin', $data['rangemin'])=='50') selected @endif> 50 </option>
              </select>
            </div>
            <div class="col-xs-2 col-sm-1 search-field">
              <select name="rangemax">
                <option value="100" @if(old('rangemax', $data['rangemax'])=='100') selected @endif> 100 </option>
                <option value="5" @if(old('rangemax', $data['rangemax'])=='5') selected @endif> 5 </option>
                <option value="10" @if(old('rangemax', $data['rangemax'])=='10') selected @endif> 10 </option>
                <option value="15" @if(old('rangemax', $data['rangemax'])=='15') selected @endif> 15 </option>
                <option value="20" @if(old('rangemax', $data['rangemax'])=='20') selected @endif> 20 </option>
                <option value="25" @if(old('rangemax', $data['rangemax'])=='25') selected @endif> 25 </option>
                <option value="30" @if(old('rangemax', $data['rangemax'])=='30') selected @endif> 30 </option>
                <option value="35" @if(old('rangemax', $data['rangemax'])=='35') selected @endif> 35 </option>
                <option value="40" @if(old('rangemax', $data['rangemax'])=='40') selected @endif> 40 </option>
                <option value="45" @if(old('rangemax', $data['rangemax'])=='45') selected @endif> 45 </option>
                <option value="50" @if(old('rangemax', $data['rangemax'])=='50') selected @endif> 50 </option>
              </select>
            </div>

            <div class="col-xs-4 col-sm-2 search-field">
                <input type="text" placeholder="Заголовок или адрес" name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: darkgreen">
            </div>
            <div class="col-xs-6 col-sm-3 search-field">
              <select id="proeprty-type" name="direction">
                <option value="">Направление</option>
                  @foreach(\App\Direction::orderBy('name')->get() as $direct)
                    <option value="{{$direct->id}}" {{ old('direction', $data['direction']) == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>

                  @endforeach
              </select>
            </div>
            <div class="col-xs-4 col-sm-2 search-field">
                <select id="proeprty-type" name="type">
                  <option value="">Тип объекта</option>

                  @if ($page == 'Аренда')
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

                  @if ($page=='Все объекты')
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


          <div class="col-xs-2 col-sm-1 search-field">
            <select name="currency">
              <option value="₽$€" @if(old('currency', $data['currency'])=='₽$€') selected @endif>₽ $ €</option>
              <option value="₽" @if(old('currency', $data['currency'])=='₽') selected @endif>₽</option>
              <option value="$" @if(old('currency', $data['currency'])=='$') selected @endif>$</option>
              <option value="€" @if(old('currency', $data['currency'])=='€') selected @endif>€</option>
            </select>
          </div>
          <div class="col-xs-4 col-sm-2 search-field">
            <select id="min" name="pricemin">
              <option value="0" @if(old('pricemin', $data['pricemin'])=='0') selected @endif> Цена min </option>
              <option value="3000" @if(old('pricemin', $data['pricemin'])=='3000') selected @endif> 3 тыс </option>
              <option value="4000" @if(old('pricemin', $data['pricemin'])=='4000') selected @endif> 4 тыс </option>
              <option value="5000" @if(old('pricemin', $data['pricemin'])=='5000') selected @endif> 5 тыс </option>
              <option value="7000" @if(old('pricemin', $data['pricemin'])=='7000') selected @endif> 7 тыс </option>
              <option value="10000" @if(old('pricemin', $data['pricemin'])=='10000') selected @endif> 10 тыс </option>
              <option value="20000" @if(old('pricemin', $data['pricemin'])=='20000') selected @endif> 20 тыс </option>
              <option value="40000" @if(old('pricemin', $data['pricemin'])=='40000') selected @endif> 40 тыс </option>
              <option value="70000" @if(old('pricemin', $data['pricemin'])=='70000') selected @endif> 70 тыс </option>
              <option value="100000" @if(old('pricemin', $data['pricemin'])=='100000') selected @endif> 100 тыс </option>
              <option value="150000" @if(old('pricemin', $data['pricemin'])=='150000') selected @endif> 150 тыс </option>
              <option value="200000" @if(old('pricemin', $data['pricemin'])=='200000') selected @endif> 200 тыс </option>
              <option value="300000" @if(old('pricemin', $data['pricemin'])=='300000') selected @endif> 300 тыс </option>
              <option value="500000" @if(old('pricemin', $data['pricemin'])=='500000') selected @endif> 500 тыс </option>
              <option value="700000" @if(old('pricemin', $data['pricemin'])=='700000') selected @endif> 700 тыс </option>
              <option value="800000" @if(old('pricemin', $data['pricemin'])=='800000') selected @endif> 800 тыс </option>
              <option value="1000000" @if(old('pricemin', $data['pricemin'])=='1000000') selected @endif> 1 млн </option>
              <option value="2000000" @if(old('pricemin', $data['pricemin'])=='2000000') selected @endif> 2 млн </option>
              <option value="3000000" @if(old('pricemin', $data['pricemin'])=='3000000') selected @endif> 3 млн </option>
              <option value="5000000" @if(old('pricemin', $data['pricemin'])=='5000000') selected @endif> 5 млн </option>
              <option value="8000000" @if(old('pricemin', $data['pricemin'])=='8000000') selected @endif> 8 млн </option>
              <option value="30000000" @if(old('pricemin', $data['pricemin'])=='30000000') selected @endif> 30 млн </option>
              <option value="40000000" @if(old('pricemin', $data['pricemin'])=='40000000') selected @endif> 40 млн </option>
              <option value="50000000" @if(old('pricemin', $data['pricemin'])=='50000000') selected @endif> 50 млн </option>
              <option value="70000000" @if(old('pricemin', $data['pricemin'])=='70000000') selected @endif> 70 млн </option>
              <option value="100000000" @if(old('pricemin', $data['pricemin'])=='100000000') selected @endif> 100 млн </option>
              <option value="200000000" @if(old('pricemin', $data['pricemin'])=='200000000') selected @endif> 200 млн </option>
              <option value="300000000" @if(old('pricemin', $data['pricemin'])=='300000000') selected @endif> 300 млн </option>
              <option value="500000000" @if(old('pricemin', $data['pricemin'])=='500000000') selected @endif> 500 млн </option>
              <option value="800000000" @if(old('pricemin', $data['pricemin'])=='800000000') selected @endif> 800 млн </option>
              <option value="900000000" @if(old('pricemin', $data['pricemin'])=='900000000') selected @endif> 900 млн </option>
              <option value="1000000000" @if(old('pricemin', $data['pricemin'])=='1000000000') selected @endif> 1 млрд </option>
            </select>
          </div>

          <div class="col-xs-4 col-sm-2 search-field">
            <select id="max" name="pricemax">
              <option value="5000000000" @if(old('pricemax', $data['pricemax'])=='5000000000') selected @endif> Цена max </option>
              <option value="3000" @if(old('pricemax', $data['pricemax'])=='3000') selected @endif> 3 тыс </option>
              <option value="4000" @if(old('pricemax', $data['pricemax'])=='4000') selected @endif> 4 тыс </option>
              <option value="5000" @if(old('pricemax', $data['pricemax'])=='5000') selected @endif> 5 тыс </option>
              <option value="7000" @if(old('pricemax', $data['pricemax'])=='7000') selected @endif> 7 тыс </option>
              <option value="10000" @if(old('pricemax', $data['pricemax'])=='10000') selected @endif> 10 тыс </option>
              <option value="20000" @if(old('pricemax', $data['pricemax'])=='20000') selected @endif> 20 тыс </option>
              <option value="40000" @if(old('pricemax', $data['pricemax'])=='40000') selected @endif> 40 тыс </option>
              <option value="70000" @if(old('pricemax', $data['pricemax'])=='70000') selected @endif> 70 тыс </option>
              <option value="100000" @if(old('pricemax', $data['pricemax'])=='100000') selected @endif> 100 тыс </option>
              <option value="150000" @if(old('pricemax', $data['pricemax'])=='150000') selected @endif> 150 тыс </option>
              <option value="200000" @if(old('pricemax', $data['pricemax'])=='200000') selected @endif> 200 тыс </option>
              <option value="300000" @if(old('pricemax', $data['pricemax'])=='300000') selected @endif> 300 тыс </option>
              <option value="500000" @if(old('pricemax', $data['pricemax'])=='500000') selected @endif> 500 тыс </option>
              <option value="700000" @if(old('pricemax', $data['pricemax'])=='700000') selected @endif> 700 тыс </option>
              <option value="800000" @if(old('pricemax', $data['pricemax'])=='800000') selected @endif> 800 тыс </option>
              <option value="1000000" @if(old('pricemax', $data['pricemax'])=='1000000') selected @endif> 1 млн </option>
              <option value="2000000" @if(old('pricemax', $data['pricemax'])=='2000000') selected @endif> 2 млн </option>
              <option value="3000000" @if(old('pricemax', $data['pricemax'])=='3000000') selected @endif> 3 млн </option>
              <option value="5000000" @if(old('pricemax', $data['pricemax'])=='5000000') selected @endif> 5 млн </option>
              <option value="8000000" @if(old('pricemax', $data['pricemax'])=='8000000') selected @endif> 8 млн </option>
              <option value="30000000" @if(old('pricemax', $data['pricemax'])=='30000000') selected @endif> 30 млн </option>
              <option value="40000000" @if(old('pricemax', $data['pricemax'])=='40000000') selected @endif> 40 млн </option>
              <option value="50000000" @if(old('pricemax', $data['pricemax'])=='50000000') selected @endif> 50 млн </option>
              <option value="70000000" @if(old('pricemax', $data['pricemax'])=='70000000') selected @endif> 70 млн </option>
              <option value="100000000" @if(old('pricemax', $data['pricemax'])=='100000000') selected @endif> 100 млн </option>
              <option value="200000000" @if(old('pricemax', $data['pricemax'])=='200000000') selected @endif> 200 млн </option>
              <option value="300000000" @if(old('pricemax', $data['pricemax'])=='300000000') selected @endif> 300 млн </option>
              <option value="400000000" @if(old('pricemax', $data['pricemax'])=='400000000') selected @endif> 400 млн </option>
              <option value="800000000" @if(old('pricemax', $data['pricemax'])=='800000000') selected @endif> 800 млн </option>
              <option value="900000000" @if(old('pricemax', $data['pricemax'])=='900000000') selected @endif> 900 млн </option>
              <option value="1000000000" @if(old('pricemax', $data['pricemax'])=='1000000000') selected @endif> 1 млрд </option>
              <option value="5000000000" @if(old('pricemax', $data['pricemax'])=='5000000000') selected @endif> 5 млрд </option>
            </select>
          </div>


          <div class="col-xs-2 col-sm-1 search-field">
            <p>S участка-><wbr>&nbsp;&nbsp;&nbsp;(сотки)</p>
          </div>
          <div class="col-xs-2 col-sm-1 search-field">
            <select name="landmin">
              <option value="0" @if(old('landmin', $data['landmin'])=='0') selected @endif> min </option>
              <option value="5" @if(old('landmin', $data['landmin'])=='5') selected @endif> 5 </option>
              <option value="10" @if(old('landmin', $data['landmin'])=='10') selected @endif> 10 </option>
              <option value="15" @if(old('landmin', $data['landmin'])=='15') selected @endif> 15 </option>
              <option value="20" @if(old('landmin', $data['landmin'])=='20') selected @endif> 20 </option>
              <option value="25" @if(old('landmin', $data['landmin'])=='25') selected @endif> 25 </option>
              <option value="30" @if(old('landmin', $data['landmin'])=='30') selected @endif> 30 </option>
              <option value="35" @if(old('landmin', $data['landmin'])=='35') selected @endif> 35 </option>
              <option value="50" @if(old('landmin', $data['landmin'])=='50') selected @endif> 50 </option>
              <option value="100" @if(old('landmin', $data['landmin'])=='100') selected @endif> 100 </option>
              <option value="150" @if(old('landmin', $data['landmin'])=='150') selected @endif> 150 </option>
              <option value="200" @if(old('landmin', $data['landmin'])=='200') selected @endif> 200 </option>
              <option value="250" @if(old('landmin', $data['landmin'])=='250') selected @endif> 250 </option>
            </select>
          </div>
          <div class="col-xs-2 col-sm-1 search-field">
            <select name="landmax">
              <option value="300" @if(old('landmax', $data['landmax'])=='300') selected @endif> max </option>
              <option value="5" @if(old('landmax', $data['landmax'])=='5') selected @endif> 5 </option>
              <option value="10" @if(old('landmax', $data['landmax'])=='10') selected @endif> 10 </option>
              <option value="15" @if(old('landmax', $data['landmax'])=='15') selected @endif> 15 </option>
              <option value="20" @if(old('landmax', $data['landmax'])=='20') selected @endif> 20 </option>
              <option value="25" @if(old('landmax', $data['landmax'])=='25') selected @endif> 25 </option>
              <option value="30" @if(old('landmax', $data['landmax'])=='30') selected @endif> 30 </option>
              <option value="35" @if(old('landmax', $data['landmax'])=='35') selected @endif> 35 </option>
              <option value="50" @if(old('landmax', $data['landmax'])=='50') selected @endif> 50 </option>
              <option value="100" @if(old('landmax', $data['landmax'])=='100') selected @endif> 100 </option>
              <option value="150" @if(old('landmax', $data['landmax'])=='150') selected @endif> 150 </option>
              <option value="200" @if(old('landmax', $data['landmax'])=='200') selected @endif> 200 </option>
              <option value="250" @if(old('landmax', $data['landmax'])=='250') selected @endif> 250 </option>
              <option value="300" @if(old('landmax', $data['landmax'])=='300') selected @endif> 300 </option>
            </select>
          </div>

          <div class="col-xs-4 col-sm-2 search-field">
            <select name="buildmin">
              <option value="0" @if(old('buildmin', $data['buildmin'])=='0') selected @endif>S дома min (м2)</option>
              <option value="100" @if(old('buildmin', $data['buildmin'])=='100') selected @endif> 100 </option>
              <option value="150" @if(old('buildmin', $data['buildmin'])=='150') selected @endif> 150 </option>
              <option value="200" @if(old('buildmin', $data['buildmin'])=='200') selected @endif> 200 </option>
              <option value="250" @if(old('buildmin', $data['buildmin'])=='250') selected @endif> 250 </option>
              <option value="300" @if(old('buildmin', $data['buildmin'])=='300') selected @endif> 300 </option>
              <option value="350" @if(old('buildmin', $data['buildmin'])=='350') selected @endif> 350 </option>
              <option value="500" @if(old('buildmin', $data['buildmin'])=='500') selected @endif> 500 </option>
              <option value="1000" @if(old('buildmin', $data['buildmin'])=='1000') selected @endif> 1000 </option>
              <option value="1500" @if(old('buildmin', $data['buildmin'])=='1500') selected @endif> 1500 </option>
              <option value="2000" @if(old('buildmin', $data['buildmin'])=='2000') selected @endif> 2000 </option>
              <option value="2500" @if(old('buildmin', $data['buildmin'])=='2500') selected @endif> 2500 </option>
            </select>
          </div>
          <div class="col-xs-4 col-sm-2 search-field">
            <select name="buildmax">
              <option value="3000" @if(old('buildmax', $data['buildmax'])=='3000') selected @endif>S дома max (м2)</option>
              <option value="100" @if(old('buildmax', $data['buildmax'])=='100') selected @endif> 100 </option>
              <option value="150" @if(old('buildmax', $data['buildmax'])=='150') selected @endif> 150 </option>
              <option value="200" @if(old('buildmax', $data['buildmax'])=='200') selected @endif> 200 </option>
              <option value="250" @if(old('buildmax', $data['buildmax'])=='250') selected @endif> 250 </option>
              <option value="300" @if(old('buildmax', $data['buildmax'])=='300') selected @endif> 300 </option>
              <option value="350" @if(old('buildmax', $data['buildmax'])=='350') selected @endif> 350 </option>
              <option value="500" @if(old('buildmax', $data['buildmax'])=='500') selected @endif> 500 </option>
              <option value="1000" @if(old('buildmax', $data['buildmax'])=='1000') selected @endif> 1000 </option>
              <option value="1500" @if(old('buildmax', $data['buildmax'])=='1500') selected @endif> 1500 </option>
              <option value="2000" @if(old('buildmax', $data['buildmax'])=='2000') selected @endif> 2000 </option>
              <option value="2500" @if(old('buildmax', $data['buildmax'])=='2500') selected @endif> 2500 </option>
              <option value="3000" @if(old('buildmax', $data['buildmax'])=='3000') selected @endif> 3000 </option>
            </select>
          </div>


          {!! Form::close() !!}

      </div>
  </section>


  <!-- End of Property Search Box -->
  <script type="text/javascript">

      var minB = document.getElementById('min'),
          maxB = document.getElementsByName('pricemax')[0],
          min, max;

      function setLimits(limit, opts, lower, upper) {
          for (var i = 0; i < limit; i++) {
              opts[i].disabled = lower;
          }
          for (var i = limit; i < opts.length; i++) {
              opts[i].disabled = upper;
          }

      }

      function setLowerLimit(limit, elem) {
          var opts = elem.getElementsByTagName('option');
          setLimits(limit+1, opts, 'disabled', false);
      }

      function setUpperLimit(limit, elem) {
          var opts = elem.getElementsByTagName('option');
          setLimits(limit, opts, false, 'disabled');
      }


      minB.onchange = function() {
          setLowerLimit(minB.selectedIndex, maxB);
      };
      maxB.onchange = function() {
          setUpperLimit(maxB.selectedIndex, minB);
      };



  </script>
