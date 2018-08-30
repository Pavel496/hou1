@extends("app")

@section('head_title', stripslashes($property->property_name) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($property->description),0,200))
@section('head_image', asset('/upload/properties/'.$property->featured_image.'-b.jpg'))
@section('head_url', Request::url())

@section("content")

@if(Session::has('flash_message_agent'))
<script type="text/javascript">

  alert('{{ Session::get('flash_message_agent') }}');

</script>
@endif

<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="single">
        <div class="properties">
          <div id="owl-properties">
            @foreach($property_gallery_images as $key=>$gallery_img)
            <div class="item">
              <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" alt="sample image">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <section class="main-container container">
    <div class="content-box col-sm-8">
      <div class="t-sec clearfix">
        <div class="col-md-4 left-sec">
          <!--Highlight Section-->
          <div class="highlight-container">

            {{-- @if($property->range!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->range}}</div>
              <div class="text">Удаление от МКАД</div>
              <div class="unit">км</div>
            </div>
           @endif --}}

            {{-- @if($property->land_area!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->land_area}}</div>
              <div class="text">Площадь участка</div>
              <div class="unit">сот</div>
            </div>
           @endif --}}

           @if($property->build_area!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->build_area}}</div>
              <div class="text">Площадь</div>
              <div class="unit">м2</div>
            </div>
           @endif

           @if($property->bedrooms!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->bedrooms}}</div>
              <div class="text">Комнаты</div>
            </div>
          @endif

          @if($property->bathrooms!=null)
            <div class="highlight-details-box">
              <div class="value">{{$property->bathrooms}}</div>
              <div class="text">Сан узлы</div>
            </div>
          @endif

          {{-- @if($property->garage!=null)
          <div class="highlight-details-box">
              <div class="value">{{$property->garage}}</div>
              <div class="text">Гаражи</div>
            </div>
          @endif --}}
          </div>

        </div>
        <div class="col-md-8 right-sec">
          <div class="information-box">
            <div class="box-content main-info-box">
              <div class="t-sec clearfix">
                <div class="left-sec col-md-7">
                  <ul class="main-info-li">
                    <li>
                      <div class="title">ID объекта :</div>
                      <div class="value">#{{$property->id}}</div>
                    </li>
                    <li>
                      <div class="title">Назначение объекта :</div>
                      <div class="value">{{$property->property_purpose}}</div>
                    </li>
                    <li>
                      <div class="title">Тип объекта :</div>
                      <div class="value">{{ getPropertyTypeName($property->property_type)->types }}</div>
                    </li>
                    <li>
                      <div class="title">Готовность объекта :</div>
                      <div class="value">{{ $property->readiness_of->name }}</div>
                    </li>
                  </ul>
                </div>
                <div class="right-sec col-md-5">
                  <div href="#" class="price">{{$property->currency.' '.number_format($property->price)}}</div>
                  <div class="price-type">Цена от продавца</div>
                </div>
              </div>
              <div class="b-sec">
                {!! stripslashes($property->description) !!}
              </div>
            </div>
          </div>

          <div class="information-box">
            <h3>Метро </h3>
            <div class="box-content">
              <ul class="features-box clearfix">

                @foreach(explode(',',$property->property_features) as $features)
                <li class="col-sm-6 col-lg-4 active">{{$features}}</li>
                @endforeach

              </ul>
            </div>
          </div>

          @if($property->map_latitude!=null AND $property->map_longitude!=null)
          <!-- Property Map -->
          <div class="property-details-map-container">
            <div id="property-details-map"></div>
          </div>
          @endif

          @if($property->video_code!=null)
          <div class="information-box">
            <h3>Видео презентация</h3>
            <div class="box-content">
              <div class="video-box">
                {!! stripslashes($property->video_code) !!}
              </div>
            </div>
          </div>
          @endif

        </div>

      </div>

    </div>


    <aside class="col-sm-4">

      <div class="b-sec">
        <div class="information-box property-agent-container">
          <h3>Напишите нам</h3>

          <div class="box-content clearfix">

            <div class="col-md-12 contact-form-container" id="agentscontact_sec">
              {!! Form::open(array('url'=>'agentscontact','method'=>'POST', 'id'=>'agent_contact_form')) !!}

              <input type="hidden" name="property_id" value="{{$property->id}}">

              <input type="hidden" name="agent_id" value="{{$agent->id}}">

              <div class="contact-form">
                <div class="field-box">
                  <input type="text" placeholder="Ваше имя *" name="name">
                  @if ($errors->has('name'))
                    <span style="color:#fb0303">
                        {{ $errors->first('name') }}
                    </span>
                 @endif
                </div>
                <div class="field-box">
                  <input type="email" placeholder="Email *" name="email">
                  @if ($errors->has('email'))
                    <span style="color:#fb0303">
                        {{ $errors->first('email') }}
                    </span>
                 @endif
                </div>
                <div class="field-box">
                  <input type="text" placeholder="Телефон" name="phone">
                </div>
                <textarea id="message" name="message" placeholder="Ваше сообщение *"></textarea>
                @if ($errors->has('message'))
                    <span style="color:#fb0303">
                        {{ $errors->first('message') }}
                    </span>
                    <br><br>
                 @endif
                <button type="submit" class="btn btn-lg submit" name="submit">Отправить</button>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

    </aside>
  </section>

@push('scriptssingle')
  <script src="/mobile/js/materialize.min.js"></script>
  <script src="/mobile/js/main.js"></script>
@endpush

@endsection
