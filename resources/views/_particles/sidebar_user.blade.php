<div class="col-lg-3 col-md-3 sidebar-left">
      <div class="widget member-card">
        <div class="member-card-header">
          <a href="#" class="member-card-avatar">
            @if(Auth::user()->image_icon)

            <img src="{{ URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg') }}" alt="">

            @else
              <img src="{{ URL::asset('site_assets/img/agent-img3.jpg') }}" alt="">
            @endif


          </a>
          <h3>{{ Auth::user()->name }}</h3>
          <p><i class="fa fa-envelope icon"></i>{{ Auth::user()->email }}</p>
        </div>
        <div class="member-card-content">

          <ul>
            <li class="{{classActiveUserMenu('dashboard')}}"><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard icon"></i>Обзор</a></li>
            <li class="{{classActiveUserMenu('my_properties')}}"><a href="{{ URL::to('my_properties') }}"><i class="fa fa-home icon"></i>Объекты</a></li>
            <li class="{{classActiveUserMenu('inquiries')}}"><a href="{{ URL::to('inquiries') }}"><i class="fa fa-envelope icon"></i>Сообщения</a></li>
            <li class="{{classActiveUserMenu('profile')}}"><a href="{{ URL::to('profile') }}"><i class="fa fa-user icon"></i>Профиль</a></li>
            <li class="{{classActiveUserMenu('change_pass')}}"><a href="{{ URL::to('change_pass') }}"><i class="fa fa-lock icon"></i>Сменить пароль</a></li>
            <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out icon"></i>Выйти</a></li>

          </ul>
        </div>
      </div>
    </div>
