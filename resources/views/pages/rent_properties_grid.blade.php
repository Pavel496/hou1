@extends("app")

@section('head_title', 'Аренда | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")

    <!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="@if(getcong('title_bg')) {{ URL::asset('upload/'.getcong('title_bg')) }} @else {{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }} @endif">
    <div class="inner-container container">
      <h1>Аренда домов</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">Все объекты</a></li>
          <li><a href="#">Аренда</a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->

{{-- @if (\Request::is('rent')) --}}
  {{$page='Аренда'}}

  {{session('currencyname')}}
{{-- @endif --}}

@include("_particles.slidersearch")

<br><br>
  <!-- Recent Properties -->
  <section class="property-listing boxed-view clearfix">
     <div class="inner-container container">
       @foreach($propertieslist->chunk(3) as $chunked_property)
         <div class="row">
           @foreach($chunked_property as $property)
      <div class="property-box col-xs-12 col-sm-6 col-md-4">
        <div class="inner-box">
          <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="img-container">

            @if($property->featured_property==1)<span class="tag-label hot-offer">Избранное</span>@endif
            <span class="my1-label featured">{{ $property->direction_to->name }}</span>
            <span class="my2-label open-house">{{ $property->readiness_of->name }}</span>
            <span class="my3-label foreclosure">{{ $property->property_purpose }}</span>
            <span class="my4-label open-house">{{ getPropertyTypeName($property->property_type)->types }}</span>

            <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">

            @if ( session('currencyname') == 'Рубли' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossrubl)}}</span>
            @elseif ( session('currencyname') == 'Доллары' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossdollar)}}</span>
            @elseif ( session('currencyname') == 'Евро' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crosseuro)}}</span>
            @endif

            {{-- <span class="price">{{$property->currency.' '.number_format($property->price)}}</span> --}}
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
                сот
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
      @endforeach

    </div>
    <!-- begin:pagination -->
            @include('_particles.pagination', ['paginator' => $propertieslist])
    <!-- end:pagination -->

  </section>
  <!-- End of Recent Properties -->



@endsection
