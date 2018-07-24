@extends("app")

{{-- @section('head_title', stripslashes($property->property_name) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($property->description),0,200))
@section('head_image', asset('/upload/properties/'.$property->featured_image.'-b.jpg'))
@section('head_url', Request::url()) --}}

@section("content")

  @push('w3sch')
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
    <link href="{{ URL::asset('w3sch/css/w3.css') }}" rel="stylesheet" />
  @endpush

  <br><br><br>
    <div class="container">
    <div class="row">

      {{-- <div class="w3-container">
          <div class="w3-card-4" style="width:100%">
            <img src="w3sch/img/designers.jpg" alt="Card image cap">
            <header class="w3-container w3-gray">
              <h3>Творческий Альянс архитектора Евгения Виленкина и
            дизайнера интерьера Оксаны Эзбиной.</h3>
            </header>
            <div class="w3-container">
              <p>
                Образование:  МАРХИ и Международная школа дизайна, члены Союза Дизайнеров Москвы, активные участники и победители Международных выставок и конкурсов.<br>
                Специализация:   частная архитектура, интерьер, проектирование индивидуальной мебели.<br>
                Сфера интересов:   концептуальный дизайн, дизайн яхт, скетчинг, мебельный дизайн, проектирование плавающих домов, экоархитектура.
              </p>
            </div>
          </div>
      </div> --}}

      @foreach($advices as $advice)
        {{-- <div class="w3-card-4 w3-margin">
          <div class="w3-display-container w3-text-white">
            <img src="{{ URL::asset('upload/testimonial/'.$advice->t_user_image.'.jpg') }}" alt="Lights" style="width:100%">
            <div class="w3-xlarge w3-display-bottomleft w3-padding">{!! stripslashes($advice->testimonial) !!}</div>
          </div>
        </div> --}}

        <div class="w3-container">
          {{-- <h2>Card Content</h2>
          <p>Add containers inside the card to create different sections:</p> --}}

          <div class="w3-card-4 w3-margin">
            <header class="w3-container w3-green">
              <h1>{{ $advice->name }}</h1>
            </header>

            <div class="w3-container">
              <ul class="w3-ul w3-hoverable">
                <p>{!! stripslashes($advice->testimonial) !!}</p>
              </ul>
            </div>

            {{-- <footer class="w3-container w3-green">
              <h5>Footer</h5>
            </footer> --}}
          </div>
        </div>


      @endforeach

    </div>
    </div>

@endsection
