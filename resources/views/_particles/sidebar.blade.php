      <div class="sidebar-box">
        <h3>Поиск объектов</h3>
        {!! Form::open(array('url' => array('searchproperties'),'class'=>'','name'=>'search_form','id'=>'search_form','role'=>'form')) !!}
        <div class="box-content">
          <div class="property-search-form vertical">
            <div class="main-search-sec">
              <div class="search-field">
                <input type="text" placeholder="Заголовок, адрес ..." name="keyword" id="keyword" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;">
              </div>
              <div class="search-field">
                <select id="proeprty-status" name="purpose">
                   <option value="">Назначение объекта</option>
                   <option value="Sale">Продажа</option>
                   <option value="Rent">Аренда</option>
                </select>
              </div>
              <div class="search-field">
                <select id="proeprty-type" name="type">
                  <option value="">Тип объекта</option>
                  @foreach(\App\Types::orderBy('types')->get() as $type)
                        <option value="{{$type->id}}">{{$type->types}}</option>
                  @endforeach
                </select>
              </div>

              {{-- <div id="example-2" class='slider-example'>
            		<h3>Example 2:</h3> --}}
            		<p>Задать min и max</p>
            		<div class="well">
            			<span id="ex1SliderVal0">10</span><input id="ex1" type="text" class="span2" name="price"
                        value="" data-slider-min="0" data-slider-max="99" data-slider-step="5"
                        data-slider-value="[10,90]"/><span id="ex1SliderVal1">90</span>
            		</div>
              {{-- </div> --}}
              <div class="search-field">
                <button class="btn" type="submit" name="submit">Найти</button>
              </div>
            </div>

          </div>
        </div>
        {!! Form::close() !!}
      </div>

      {{-- <div class="sidebar-box">
        <h3>Mortgage Calculator</h3>
        <div class="box-content">
          <div class="property-search-form vertical">
            <div class="main-search-sec">
            <form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="{{getcong('currency_sign')}}">

              <div class="search-field">
                <input type="text" id="amount" name="amount" placeholder="Sale Price" class="number-field" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;" required>

              </div>
              <div class="search-field">
                <input type="text" id="downpayment" placeholder="Down Payment" class="number-field" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;" required>

              </div>
              <div class="search-field">
                <input type="text" id="years" placeholder="Loan Term (Years)" class="number-field" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;" required>

              </div>
              <div class="search-field">
                <input type="text" id="interest" placeholder="Interest Rate" class="number-field" style="margin-bottom: 0px;border:1px solid #d4d4d4;border-bottom-color: #50AEE6;" required>

              </div>
               <div class="search-field">
                <button class="btn calc-button" formvalidate>Calculate</button>
              </div>
              <div class="calc-output-container" style="opacity: 0;    max-height: 0;"><div class="alert alert-success">Monthly Payment: <strong class="calc-output"></strong></div></div>
            </form>
            </div>
           </div>
        </div>
      </div> --}}


      <div class="sidebar-box">
        <h3>Типы объектов</h3>
        <div class="box-content">
          <ul>
            @foreach(\App\Types::orderBy('types')->get() as $type)
            <li><a href="{{URL::to('type/'.$type->slug.'')}}" style="color: #333333;">{{$type->types}}</a>&nbsp;({{countPropertyType($type->id)}})</li>
            @endforeach

          </ul>
        </div>
      </div>

      <div class="sidebar-box">
        <h3>Избранные объекты</h3>
        <div class="box-content">
          <div class="featured-properties">
            <div class="property-box">

              @foreach(\App\Properties::where('featured_property',1)->orderBy('id','desc')->take(3)->get() as $property)
              <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="clearfix">
                <span class="img-container col-xs-4">
                  <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
                </span>
                <span class="details col-xs-8">
                  <span class="title">{{ str_limit($property->property_name,35) }}</span>
                  <span class="location">{{ str_limit($property->address,40) }}</span>
                  <span class="price">{{getcong('currency_sign').' '.$property->price}}</span>
                </span>
              </a>
              @endforeach

            </div>
          </div>
        </div>
      </div>

      <!--End of Sidebar Box-->
