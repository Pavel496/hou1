@extends("app")
@section("content")

@if(getcong('home_properties_layout')=='slider')

@include("_particles.zastavka")

{{$page='Гостинная'}}

@include("_particles.slidersearch")

@else

@include("_particles.mapsearch")

@endif


<!-- Recent Properties -->
  <section class="property-listing boxed-view clearfix">
    <h2 class="hsq-heading type-1">Новые Объекты</h2>
    <div class="inner-container container">
      @foreach($propertieslist as $i => $property)
      <div class="property-box col-xs-12 col-sm-6 col-md-4">
        <div class="inner-box">
          <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="img-container">

            @if($property->featured_property==1)<span class="tag-label hot-offer">Избранное</span>@endif
            <span class="my1-label featured">{{ $property->direction_to->name }}</span>
            <span class="my2-label open-house">{{ $property->readiness_of->name }}</span>
            <span class="my3-label foreclosure">{{ $property->property_purpose }}</span>
            <span class="my4-label open-house">{{ getPropertyTypeName($property->property_type)->types }}</span>

            <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">
            <span class="price">{{$property->currency.' '.number_format($property->price)}}</span>
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

  </section>
  <!-- End of Recent Properties -->

  {{-- @if(count($featured_properties)>0)
  <!-- Featured Properties -->
  <section class="property-listing boxed-view clearfix">
    <h2 class="hsq-heading type-1">Избранные объекты</h2>
    <div class="inner-container container">
      @foreach($featured_properties as $i => $property)
      <div class="property-box col-xs-12 col-sm-6 col-md-4">
        <div class="inner-box">
          <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}" class="img-container">

            @if($property->featured_property==1)<span class="tag-label featured">Избранное</span>@endif
            <span class="my1-label featured">{{ $property->direction_to->name }}</span>
            <span class="my2-label open-house">{{ $property->readiness_of->name }}</span>
            <span class="my3-label foreclosure">{{ $property->property_purpose }}</span>
            <span class="my4-label open-house">{{ getPropertyTypeName($property->property_type)->types }}</span>


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

  </section>
  <!-- End of Featured Properties -->
 @endif --}}

  <!--Our Partners-->
      {{-- @include("_particles.partners") --}}

  <!--End of Our Partners-->

@endsection
