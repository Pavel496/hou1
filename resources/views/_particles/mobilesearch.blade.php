
<div class="section find-home bg-second">
  <div class="container">
    {{-- <div class="section-head">
      <h4>Country House Realty</h4>
      <div class="underline"></div>
      <div class="underline2"></div>
    </div> --}}
    {!! Form::open(array('url' => array('searchproperties'),'name'=>'search_form','role'=>'form')) !!}

    {{-- <div class="col s12">
      <select name="purpose">
        <option value="all">Все объекты</option>
        <option value="Продажа">Продажа</option>
        <option value="Аренда">Аренда</option>
      </select>
    </div> --}}

    <div class="col s12">
      <select name="direction">
        <option value="">Направление</option>
          @foreach(\App\Direction::orderBy('name')->get() as $direct)
            <option value="{{$direct->id}}" {{ old('direction', $data['direction'])
               == $direct->id ? 'selected' : '' }}>{{$direct->name}}</option>
          @endforeach
      </select>
    </div>

    <h5>Расстояние от МКАД</h5>
    <div class="row">
      <div class="col s6">
          <select name="rangemin">
          <option value="0" @if(old('rangemin', $data['rangemin'])=='0') selected @endif> min </option>
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
      <div class="col s6">
        <select name="rangemax">
          <option value="100" @if(old('rangemax', $data['rangemax'])=='100') selected @endif> max </option>
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
    </div>

    <h5>Площадь участка (сотки)</h5>
    <div class="row">
      <div class="col s6">
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
      <div class="col s6">
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
          {{-- <option value="300" @if(old('landmax', $data['landmax'])=='300') selected @endif> 300 </option> --}}
        </select>
      </div>
    </div>

    <h5>Площадь дома (м2)</h5>
    <div class="row">
      <div class="col s6">
        <select name="buildmin">
          <option value="0" @if(old('buildmin', $data['buildmin'])=='0') selected @endif> min </option>
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
      <div class="col s6">
        <select name="buildmax">
          <option value="3000" @if(old('buildmax', $data['buildmax'])=='3000') selected @endif> max </option>
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
        </select>
      </div>
    </div>

    <h5>Цена</h5>
    <div class="row">
      <div class="col s6">
        <select name="pricemin">
          @if ($page == 'Аренда')

            @if ( session('currencyname') == 'Рубли' )
              <option value="0" @if(old('pricemin', $data['pricemin'])=='0') selected @endif> min </option>
              <option value="150000" @if(old('pricemin', $data['pricemin'])=='150000') selected @endif> 150 тыс </option>
              <option value="200000" @if(old('pricemin', $data['pricemin'])=='200000') selected @endif> 200 тыс </option>
              <option value="300000" @if(old('pricemin', $data['pricemin'])=='300000') selected @endif> 300 тыс </option>
              <option value="500000" @if(old('pricemin', $data['pricemin'])=='500000') selected @endif> 500 тыс </option>
              <option value="1000000" @if(old('pricemin', $data['pricemin'])=='1000000') selected @endif> 1 млн </option>
              <option value="20000000" @if(old('pricemin', $data['pricemin'])=='20000000') selected @endif> 20 млн </option>
            @else
              <option value="0" @if(old('pricemin', $data['pricemin'])=='0') selected @endif> min </option>
              <option value="3000" @if(old('pricemin', $data['pricemin'])=='3000') selected @endif> 3 тыс </option>
              <option value="4000" @if(old('pricemin', $data['pricemin'])=='4000') selected @endif> 4 тыс </option>
              <option value="5000" @if(old('pricemin', $data['pricemin'])=='5000') selected @endif> 5 тыс </option>
              <option value="10000" @if(old('pricemin', $data['pricemin'])=='10000') selected @endif> 10 тыс </option>
              <option value="20000" @if(old('pricemin', $data['pricemin'])=='20000') selected @endif> 20 тыс </option>
              <option value="40000" @if(old('pricemin', $data['pricemin'])=='40000') selected @endif> 40 тыс </option>
              <option value="100000" @if(old('pricemin', $data['pricemin'])=='100000') selected @endif> 100 тыс </option>
            @endif
          @else
            @if ( session('currencyname') == 'Рубли' )
              <option value="0" @if(old('pricemin', $data['pricemin'])=='0') selected @endif> min </option>
              <option value="30000000" @if(old('pricemin', $data['pricemin'])=='30000000') selected @endif> 30 млн </option>
              <option value="40000000" @if(old('pricemin', $data['pricemin'])=='40000000') selected @endif> 40 млн </option>
              <option value="50000000" @if(old('pricemin', $data['pricemin'])=='50000000') selected @endif> 50 млн </option>
              <option value="100000000" @if(old('pricemin', $data['pricemin'])=='100000000') selected @endif> 100 млн </option>
              <option value="500000000" @if(old('pricemin', $data['pricemin'])=='500000000') selected @endif> 500 млн </option>
            @else
              <option value="0" @if(old('pricemin', $data['pricemin'])=='0') selected @endif> min </option>
              <option value="500000" @if(old('pricemin', $data['pricemin'])=='500000') selected @endif> 500 тыс </option>
              <option value="700000" @if(old('pricemin', $data['pricemin'])=='700000') selected @endif> 700 тыс </option>
              <option value="800000" @if(old('pricemin', $data['pricemin'])=='800000') selected @endif> 800 тыс </option>
              <option value="1000000" @if(old('pricemin', $data['pricemin'])=='1000000') selected @endif> 1 млн </option>
              <option value="2000000" @if(old('pricemin', $data['pricemin'])=='2000000') selected @endif> 2 млн </option>
              <option value="5000000" @if(old('pricemin', $data['pricemin'])=='5000000') selected @endif> 5 млн </option>
              <option value="10000000" @if(old('pricemin', $data['pricemin'])=='10000000') selected @endif> 10 млн </option>
              <option value="20000000" @if(old('pricemin', $data['pricemin'])=='20000000') selected @endif> 20 млн </option>
            @endif
          @endif
        </select>
      </div>
      <div class="col s6">
        <select name="pricemax">
          @if ($page == 'Аренда')

            @if ( session('currencyname') == 'Рубли' )
              <option value="50000000" @if(old('pricemax', $data['pricemax'])=='50000000') selected @endif> max </option>
              <option value="150000" @if(old('pricemax', $data['pricemax'])=='150000') selected @endif> 150 тыс </option>
              <option value="200000" @if(old('pricemax', $data['pricemax'])=='200000') selected @endif> 200 тыс </option>
              <option value="300000" @if(old('pricemax', $data['pricemax'])=='300000') selected @endif> 300 тыс </option>
              <option value="500000" @if(old('pricemax', $data['pricemax'])=='500000') selected @endif> 500 тыс </option>
              <option value="1000000" @if(old('pricemax', $data['pricemax'])=='1000000') selected @endif> 1 млн </option>
              <option value="20000000" @if(old('pricemax', $data['pricemax'])=='20000000') selected @endif> 20 млн </option>
            @else
              <option value="500000" @if(old('pricemax', $data['pricemax'])=='500000') selected @endif> max </option>
              <option value="3000" @if(old('pricemax', $data['pricemax'])=='3000') selected @endif> 3 тыс </option>
              <option value="4000" @if(old('pricemax', $data['pricemax'])=='4000') selected @endif> 4 тыс </option>
              <option value="5000" @if(old('pricemax', $data['pricemax'])=='5000') selected @endif> 5 тыс </option>
              <option value="10000" @if(old('pricemax', $data['pricemax'])=='10000') selected @endif> 10 тыс </option>
              <option value="20000" @if(old('pricemax', $data['pricemax'])=='20000') selected @endif> 20 тыс </option>
              <option value="40000" @if(old('pricemax', $data['pricemax'])=='40000') selected @endif> 40 тыс </option>
              <option value="100000" @if(old('pricemax', $data['pricemax'])=='100000') selected @endif> 100 тыс </option>
            @endif
          @else
            @if ( session('currencyname') == 'Рубли' )
              <option value="750000000" @if(old('pricemax', $data['pricemax'])=='750000000') selected @endif> max </option>
              <option value="30000000" @if(old('pricemax', $data['pricemax'])=='30000000') selected @endif> 30 млн </option>
              <option value="40000000" @if(old('pricemax', $data['pricemax'])=='40000000') selected @endif> 40 млн </option>
              <option value="50000000" @if(old('pricemax', $data['pricemax'])=='50000000') selected @endif> 50 млн </option>
              <option value="100000000" @if(old('pricemax', $data['pricemax'])=='100000000') selected @endif> 100 млн </option>
              <option value="500000000" @if(old('pricemax', $data['pricemax'])=='500000000') selected @endif> 500 млн </option>
            @else
              <option value="50000000" @if(old('pricemax', $data['pricemax'])=='50000000') selected @endif> max </option>
              <option value="500000" @if(old('pricemax', $data['pricemax'])=='500000') selected @endif> 500 тыс </option>
              <option value="700000" @if(old('pricemax', $data['pricemax'])=='700000') selected @endif> 700 тыс </option>
              <option value="800000" @if(old('pricemax', $data['pricemax'])=='800000') selected @endif> 800 тыс </option>
              <option value="1000000" @if(old('pricemax', $data['pricemax'])=='1000000') selected @endif> 1 млн </option>
              <option value="2000000" @if(old('pricemax', $data['pricemax'])=='2000000') selected @endif> 2 млн </option>
              <option value="5000000" @if(old('pricemax', $data['pricemax'])=='5000000') selected @endif> 5 млн </option>
              <option value="10000000" @if(old('pricemax', $data['pricemax'])=='10000000') selected @endif> 10 млн </option>
              <option value="20000000" @if(old('pricemax', $data['pricemax'])=='20000000') selected @endif> 20 млн </option>
            @endif
          @endif
        </select>
      </div>
    </div>

    <div class="col s12">
        <select name="type">
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

    <div class="col s12">
      <input type="text" name="keyword" placeholder="Строка поиска" style="background-color: white;">
    </div>

    <div class="col s12">
        <button class="button-default" type="submit" name="submit"> Применить фильтр </button>
    </div>

    @if ($page=='Все объекты')
      <input id="property_purpose" name="purpose" type="hidden" value="all">
      {{-- <a href="/"><span><i class="fa fa-backward"></i></span>
         Сбросить фильтр <span><i class="fa fa-backward"></i></span></a> --}}

    @elseif ($page=='Продажа')
      <input id="property_purpose" name="purpose" type="hidden" value="Продажа">
      {{-- <a href="/sale"><span><i class="fa fa-backward"></i></span>
         Сбросить фильтр <span><i class="fa fa-backward"></i></span></a> --}}
    @else
      <input id="property_purpose" name="purpose" type="hidden" value="Аренда">
      {{-- <a href="/rent"><span><i class="fa fa-backward"></i></span>
         Сбросить фильтр <span><i class="fa fa-backward"></i></span></a> --}}
    @endif

  {!! Form::close() !!}

  </div>
</div>
