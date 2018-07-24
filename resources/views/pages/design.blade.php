{{-- <!DOCTYPE html>
<html> --}}
@extends("app")

{{-- @section('head_title', stripslashes($property->property_name) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($property->description),0,200))
@section('head_image', asset('/upload/properties/'.$property->featured_image.'-b.jpg'))
@section('head_url', Request::url()) --}}

@section("content")

{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assetsbs4/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsbs4/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assetsbs4/css/Responsive-Card-Item-List.css">
    <link rel="stylesheet" href="assetsbs4/css/styles.css">
</head>

<body> --}}

  @push('w3sch')
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
    <link href="{{ URL::asset('w3sch/css/w3.css') }}" rel="stylesheet" />
  @endpush

  <br><br><br>
    <div class="container">
    <div class="row">

      <div class="w3-container">
        {{-- <h3>Творческий Альянс архитектора Евгения Виленкина и
      дизайнера интерьера Оксаны Эзбиной.</h3> --}}
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
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/1_3.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/001.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div>
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/21.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/567.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/002.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/003.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>
      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img//004.RGB_color.0000 (1).jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/005.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>
      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/006.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/007.RGB_color.0000.jpg" alt="Lights" style="width:100%">
          {{-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> --}}
        </div>
      </div>
      {{-- <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/004-1.RGB_color.0000 copy.jpg" alt="Lights" style="width:100%">
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/005-1.RGB_color.0000 copy.jpg" alt="Lights" style="width:100%">
        </div>
      </div> --}}
      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/006-1.RGB_color.0000 copy.jpg" alt="Lights" style="width:100%">
          <div class="w3-xlarge w3-display-bottomleft w3-padding"></div>
        </div>
      </div>

      <div class="w3-card-4 w3-margin">
        <div class="w3-display-container w3-text-white">
          <img src="w3sch/img/007-1.RGB_color.0000 copy.jpg" alt="Lights" style="width:100%">
          <div class="w3-xlarge w3-display-bottomleft w3-padding">Мама мыла раму.</div>
        </div>
      </div>

    </div>
    </div>

@endsection
