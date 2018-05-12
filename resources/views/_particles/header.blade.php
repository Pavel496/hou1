<header id="main-header" style="background-image:url(/site_assets/img/Canvas.jpg)">
    <div id="header-top">
      <div class="header-top-content container">
        <!-- Language Switcher -->
        <ul id="language-switcher" class="list-inline" style="border-right: 0px;">
           <li style="border:none;"><a href="tel:{{getcong('contact_us_phone')}}"><i class="fa fa-phone"></i>&nbsp; {{getcong('contact_us_phone')}}</a></li>
          <li style="border:none;"><a href="mailto:{{getcong('contact_us_email')}}"><i class="fa fa-envelope-o"></i>&nbsp; {{getcong('contact_us_email')}}</a></li>
        </ul>
        <!-- End of Language Switcher -->

        <!-- Login Links -->
        {{-- <ul id="login-boxes" class="list-inline">
         @if(Auth::check())
         <li><a href="{{ URL::to('dashboard') }}">Админка</a></li>
          <li><a href="{{ URL::to('logout') }}">Выйти</a></li>
         @else
         <li><a href="{{ URL::to('login') }}">Войти</a></li>
         <li><a href="{{ URL::to('register') }}">Регистрация</a></li>
         @endif

        </ul> --}}
        <!-- End of Login Links -->
      </div>
    </div>
    <div class="main-header-cont container">
      <!-- Top Logo -->
      <div class="logo-main-box col-xs-6 col-sm-4 col-md-3">
      <a href="{{ URL::to('/') }}">@if(getcong('site_logo'))
                <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}"
                alt="{{getcong('site_name')}}" class="img-responsive img-circle" width="100">
                @else <span>{{getcong('site_name')}}</span> @endif</a>
      </div>
      <!-- End of Top Logo -->
      <!-- Main Menu -->
      <div class="menu-container col-xs-6 col-sm-8 col-md-9">
                <!-- Main Menu -->
                <nav id="main-menu" class="hidden-xs hidden-sm">
                    <ul class="main-menu list-inline">
                        <li><a href="{{ URL::to('/') }}" class="{{classActivePathPublic('')}}">Новое</a>

                        </li><!-- Menu items ( You can change the link and its text ) -->

                        {{-- <li><a href="{{ URL::to('properties/') }}" class="{{classActivePathPublic('properties')}}">All Properties</a></li>
                        <li><a href="{{ URL::to('featured/') }}" class="{{classActivePathPublic('featured')}}">Featured</a></li> --}}
                        <li><a href="{{ URL::to('sale/') }}" class="{{classActivePathPublic('sale')}}">Продажа</a></li>
                        <li><a href="{{ URL::to('rent/') }}" class="{{classActivePathPublic('rent')}}">Аренда</a></li>
                        <li><a href="{{ URL::to('agents/') }}" class="{{classActivePathPublic('agents')}}">Агенты</a>
                        {{-- <li><a href="{{ URL::to('testimonials/') }}" class="{{classActivePathPublic('testimonials')}}">Testimonials</a></li> --}}
                        <li><a href="{{ URL::to('advices/') }}" class="{{classActivePathPublic('advices')}}">Советы эксперта</a>
                        <li><a href="{{ URL::to('about-us/') }}" class="{{classActivePathPublic('about-us')}}">О нас</a></li>
                        <li><a href="{{ URL::to('design/') }}" class="{{classActivePathPublic('design')}}">Строительство и дизайн</a>
                        <li><a href="{{ URL::to('contact-us/') }}" class="{{classActivePathPublic('contact-us')}}">Контакты</a></li>
                    </ul>
                </nav>
                <!-- END of Main Menu -->

        <div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div><!-- Mobile Menu handle -->
            <a id="submit-property-link" class="btn" href="{{ URL::to('submit-property') }}"><span>Предложите объект</span></a>
            </div>
      <!-- End of Main Menu -->
    </div>
    <div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
  </header>
