@extends("app")

@section('head_title', 'Page not found! | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="{{ URL::asset('site_assets/img/breadcrumb-bg.jpg') }}">
    <div class="inner-container container">
      <h1>Страница Не Найдена</h1>
      <div class="breadcrumb">
        <ul class="list-inline">
          <li class="home"><a href="{{ URL::to('/') }}">Все объекты</a></li>
          <li>Страница Не Найдена</li>
        </ul>
      </div>
    </div>
  </section>
  <!--Breadcrumb Section-->
<!-- begin:content -->
    <section class="main-container container">
        <div class="not-found-container">
            <h2 class="hsq-heading type-1">Страница находится в разработке</h2>
            <div class="subtitle">Похоже, что страница пока недоступна, но скоро заработает.</div>
        </div>

    </section>
    <!-- end:content -->

@endsection
