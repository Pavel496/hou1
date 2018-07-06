  @foreach($propertieslist->chunk(2) as $chunked_property)
    <div class="row">
      @foreach($chunked_property as $property)
        <div class="col s6">
          <div class="content">

            @if ( session('currencyname') == 'Рубли' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossrubl)}}</span>
            @elseif ( session('currencyname') == 'Доллары' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crossdollar)}}</span>
            @elseif ( session('currencyname') == 'Евро' )
              <span class="price">{{session('currencysymbol').' '.number_format($property->crosseuro)}}</span>
            @endif

            <img src="{{ URL::asset('upload/properties/'.$property->featured_image.'-s.jpg') }}" alt="Image of Property">

            <div class="offer-type">
              <span>{{ $property->property_purpose }}</span>
            </div>

            <div class="sub-content">
              <a href="{{ url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id)) }}"><h5>{{ str_limit($property->property_name,35) }}</h5></a>
              <span style="color:darkred;"> {{ $property->direction_to->name }}</span><br>
              <span><i class="fa fa-map-marker"></i> {{ str_limit($property->address,40) }}</span><br>
              <span><i class="fa fa-road"></i> {{ $property->range }} км;</span>
              <span><i class="fa fa-home"></i> {{ $property->build_area }} м2;</span>
              <span><i class="fa fa-square-o"></i> {{ $property->land_area }} сот;</span>
              <span>{{ getPropertyTypeName($property->property_type)->types }};</span>
              <span>{{ $property->readiness_of->name }}</span>
            </div>

          </div>
        </div>
    @endforeach
  </div>
  @endforeach
