@extends("app")

@section('head_title', 'Submit Property | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

<style type="text/css">
 @media (max-width: 991px) {
    .mobile-only {
        display:block !important;
    }

    .desktop-only {
        display:none !important;
    }
}

</style>

{{-- <script type="text/javascript">
    @if (count($errors) > 0)
        $('#myModal3').modal('show');
    @endif
</script> --}}

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')){{ URL::asset('upload/'.getcong('title_bg'))}} @else {{URL::asset('site_assets/img/breadcrumb-bg.jpg')}} @endif">
    <div class="inner-container container">
      <h1>Создать объект</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">Все объекты</a></li>
          <li><a href="{{ URL::to('dashboard/') }}">Админка</a></li>
          <li>Создать объект</li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
    <div class="descriptive-section">
      <h2 class="hsq-heading type-1">Создание объекта</h2>

         @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      {{ Session::get('flash_message') }}
                  </div>
        @endif

    </div>
    <div class="submit-main-box clearfix">
         {!! Form::open(array('url' => 'submit-property','class'=>'','id'=>'submit-property-main-form','role'=>'form','enctype' => 'multipart/form-data')) !!}
<input type="hidden" name="property_features" value=''>
{{-- {{Form::text('property_features', $stations, ['data-role' => 'tagsinput'])}} --}}
        <div class="row t-sec">
          <div class="col-md-6 l-sec">
            <div class="information-box">
              <h3>Основные параметры </h3>

              <div class="box-content">
                <div class="field-row">
                  <input type="text" placeholder="Имя объекта" name="property_name" id="p-title" value="{{ old('property_name') }}">
                  @if ($errors->has('property_name'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_name') }}
                    </span>
                 @endif
                 </div>


                 <div class="field-row">
                     <select id="p-direction" name="direction">
                       <option value="">Направление (Город)</option>
                      @foreach($directions as $direct)
                         <option value="{{$direct->id}}" @if(old('direction')==$direct->id) selected @endif>{{$direct->name}}</option>
                     @endforeach
                     </select>
                     @if ($errors->has('direction'))
                     <span style="color:#fb0303">
                         {{ $errors->first('direction') }}
                     </span>
                  @endif
                  </div>



                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <select id="p-status" name="property_purpose">
                      <option value="">Назначение объекта</option>
                      <option value="Продажа" @if(old('property_purpose')=='Продажа') selected @endif>Продажа</option>
                      <option value="Аренда" @if(old('property_purpose')=='Аренда') selected @endif>Аренда</option>
                    </select>
                    @if ($errors->has('property_purpose'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_purpose') }}
                    </span>
                 @endif
                  </div>
                  <div class="col-xs-6">
                    <select id="p-type" name="property_type">
                      <option value="">Тип объекта</option>
                      @foreach($types as $type)
                        <option value="{{$type->id}}" @if(old('property_type')==$type->id) selected @endif>{{$type->types}}</option>

                    @endforeach
                    </select>
                    @if ($errors->has('property_type'))
                    <span style="color:#fb0303">
                        {{ $errors->first('property_type') }}
                    </span>
                 @endif
                  </div>
                </div>


                <div class="field-row clearfix">

                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="range" class="form-control number-field" id="p-range"
                           placeholder="Удаленность от МКАД" value="{{ old('range') }}">
                      <span class="input-group-addon">км</span>
                    </div>
                    @if ($errors->has('range'))
                      <span style="color:#fb0303">
                          {{ $errors->first('range') }}
                      </span>
                   @endif
                  </div>

                  <div class="col-xs-6">
                    <select id="p-readiness" name="readiness">
                      <option value="">Готовность объекта</option>
                        @foreach($readinesses as $readi)
                          <option value="{{$readi->id}}" @if(old('readiness')==$readi->id) selected @endif>{{$readi->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('readiness'))
                      <span style="color:#fb0303">
                          {{ $errors->first('readiness') }}
                      </span>
                    @endif
                  </div>
                </div>



                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group l-icon">
                      <span class="input-group-addon"><i class="fa fa-money"></i></span>
                      <input type="text" name="price" class="form-control" id="p-price"
                           placeholder="Цена" value="{{ old('price') }}">
                    </div>
                    @if ($errors->has('price'))
                    <span style="color:#fb0303">
                        {{ $errors->first('price') }}
                    </span>
                 @endif
                  </div>
                  <div class="col-xs-6">
                    <select id="p-currency" name="currency">
                      <option value="">Валюта</option>
                      <option value="₽" @if(old('currency')=='₽') selected @endif>Рубли</option>
                      <option value="$" @if(old('currency')=='$') selected @endif>Доллары</option>
                      <option value="€" @if(old('currency')=='€') selected @endif>Евро</option>
                    </select>
                    @if ($errors->has('currency'))
                    <span style="color:#fb0303">
                        {{ $errors->first('currency') }}
                    </span>
                  @endif
                  </div>
                </div>

                <div class="well">

                    Спальни (комнаты)
                    <select id="p-bedroom" name="bedrooms">
                      <option value="">№</option>
                      <option value="1" @if(old('bedrooms')=='1') selected @endif>1</option>
                      <option value="2" @if(old('bedrooms')=='2') selected @endif>2</option>
                      <option value="3" @if(old('bedrooms')=='3') selected @endif>3</option>
                      <option value="4" @if(old('bedrooms')=='4') selected @endif>4</option>
                      <option value="5" @if(old('bedrooms')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('bedrooms')=='+5') selected @endif>+5</option>
                    </select>

                    Сан узлы
                    <select id="bathroom" name="bathrooms">
                      <option value="">№</option>
                      <option value="1" @if(old('bathrooms')=='1') selected @endif>1</option>
                      <option value="2" @if(old('bathrooms')=='2') selected @endif>2</option>
                      <option value="3" @if(old('bathrooms')=='3') selected @endif>3</option>
                      <option value="4" @if(old('bathrooms')=='4') selected @endif>4</option>
                      <option value="5" @if(old('bathrooms')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('bathrooms')=='+5') selected @endif>+5</option>
                    </select>

                    Гаражи (этажи)
                    <select id="garage" name="garage">
                      <option value="">№</option>
                      <option value="1" @if(old('garage')=='1') selected @endif>1</option>
                      <option value="2" @if(old('garage')=='2') selected @endif>2</option>
                      <option value="3" @if(old('garage')=='3') selected @endif>3</option>
                      <option value="4" @if(old('garage')=='4') selected @endif>4</option>
                      <option value="5" @if(old('garage')=='5') selected @endif>5</option>
                      <option value="+5" @if(old('garage')=='+5') selected @endif>+5</option>
                    </select>

                </div>

                <div class="field-row clearfix">
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="land_area" class="form-control" id="p-land"
                           placeholder="Площадь участка" value="{{ old('land_area') }}">
                      <span class="input-group-addon">сотки</span>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="input-group r-icon">
                      <input type="text" name="build_area" class="form-control number-field" id="p-build"
                           placeholder="Площадь Объекта" value="{{ old('build_area') }}">
                      <span class="input-group-addon">м2</span>
                    </div>
                  </div>
                </div>
                <div class="field-row">
                  <textarea id="editor" name="description" placeholder="Описание объекта">{{ old('description') }}</textarea>
                  @if ($errors->has('description'))
                    <span style="color:#fb0303">
                        {{ $errors->first('description') }}
                    </span>
                 @endif
                </div>
              </div>
            </div>
{{-- {{Form::text('property_features', '', ['disabled' => true, 'data-role' => 'tagsinput'])}} --}}
            {{-- <div class="information-box">
              <h3>Благоустройство или станции метро</h3>`

                <div class="box-content">
                  <div class="field-row">

                     {{Form::text('property_features', $stations, ['data-role' => 'tagsinput'])}}
                  </div>
                  <div class="field-row">
                     <a href="/station/{{ $stations }}" class="btn">Список станций метро</a>
                     <a href="/clear" class="btn">Очистить список</a>

                  </div>
                </div>
            </div> --}}
            {{-- <input type="text" name="property_features" value="{{ old('property_features') }}" data-role="tagsinput"> --}}
            {{-- <a class="btn btn-default" data-toggle="modal" data-target="#myModal3"><span>Метро</span></a> --}}

            <div class="information-box">
              <h3>Главное изображение</h3>
                <div class="box-content">

                  <input type="file" name="featured_image" id="featured_image" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;"/><br/>
                  @if ($errors->has('featured_image'))
                    <span style="color:#fb0303">
                        {{ $errors->first('featured_image') }}
                    </span>
                  @endif
                </div>
            </div>

            {{-- <div class="information-box">
              <h3>Floor Plan</h3>
                <div class="box-content">

                    <input type="file" name="floor_plan" id="floor_plan" style="color: green;padding: 5px;border: 1px dashed #123456;background-color: #f9ffe5;" />

                </div>
            </div> --}}

          </div>
          <div class="col-md-6 r-sec">
          <div class="information-box">

            <h3>Адрес</h3>

            <div class="box-content">
              <div class="field-row">
                <input type="text" placeholder="Адрес" name="address" id="p-address" value="{{ old('address') }}" onkeydown="if (event.keyCode == 13) return false;">
                @if ($errors->has('address'))
                    <span style="color:#fb0303">
                        {{ $errors->first('address') }}
                    </span>
                 @endif
              </div>
              <div class="field-row">
                <div id="p-map"></div>
              </div>
              <div class="field-row clearfix">
                <div class="col-xs-6">
                  <input type="text" name="map_longitude" placeholder="Longitude" id="p-long" value="{{ old('map_longitude') }}" readonly>
                </div>
                <div class="col-xs-6">
                  <input type="text" name="map_latitude" placeholder="Latitude" id="p-lat" value="{{ old('map_latitude') }}" readonly>
                </div>
              </div>

            </div>
          </div>
          <div class="information-box">
            <h3>Видео презентация </h3>

            <div class="box-content">
              <div class="field-row">
                <textarea id="p-video" name="video_code" placeholder="Вставьте код">{{ old('video_code') }}</textarea>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="row b-sec desktop-only">

          <link rel="stylesheet" href="{{ URL::asset('site_assets/css/gallery_style.css') }}">
          <div class="information-box">
            <h3>Галерея</h3>
             <div id="formdiv">
                 <div id="filediv"></div>
                 <div style="margin-top:5px;">
                <input name="gallery_file[]" type="file" id="file"/>
                <input type="button" id="add_more" class="upload" value="Больше изображений"/>
                </div>

            </div>
          </div>
        </div>
      <div class="row b-sec" align="center">
          <button type="submit" class="btn btn-lg submit">Сохранить</button>
        </div>

      {!! Form::close() !!}
    </div>
  </section>
    <!-- end:content -->

@endsection
