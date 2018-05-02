@extends("app")

@section('head_title', 'Обекты Для Продажи | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")


    <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
    <div class="inner-container container">
      <h1>Обекты Для Продажи</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">Гостинная</a></li>
          <li><a href="#">Обекты для продажи</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

 <section class="main-container container">
    <div class="content-box col-sm-8">
      <!-- Properties -->
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
          @foreach($properties as $i => $property)
          <div class="property-box col-xs-12 col-sm-6 wow fadeInUp">
            <div class="inner-box">
          <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="img-container">
            @if($property->featured_property==1)<span class="tag-label hot-offer">Избранное</span>@endif
            <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
            <span class="price">{{getcong('currency_sign').' '.$property->price}}</span>
          </a>
          <div class="bottom-sec">
            <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="title">{{ str_limit($property->property_name,35) }}</a>
            <div class="location">{{ str_limit($property->address,40) }}</div>
            <div class="desc">
              {!! str_limit($property->description,100) !!}
            </div>
            <div class="extra-info clearfix">
              <div class="area col-xs-4">
                <div class="value">{{$property->range}}</div>
                км
              </div>
              <div class="bedroom col-xs-4">
                <div class="value">{{$property->land_area}}</div>
                соток
              </div>
              <div class="bathroom col-xs-4">
                <div class="value">{{$property->build_area}}</div>
                м2
              </div>
            </div>
          </div>
          <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="btn more-link">Подробнее</a>
        </div>
          </div>
          @endforeach
        </div>
        <!-- Pagination -->
        @include('_particles.pagination', ['paginator' => $properties])
        <!-- End of Pagination -->
      </section>
      <!-- End of Properties -->
    </div>
    <aside class="col-sm-4">
     @include("_particles.sidebar")
    </aside>
  </section>



@endsection
