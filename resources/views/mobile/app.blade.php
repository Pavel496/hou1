@include('mobile.top')

		<div class="side-nav-panel-right">
			<a href="#" data-activates="slide-out-left" class="side-nav-right"><i class="fa fa-bars"></i></a>
		</div>

	</div>
	<!-- end navbar top -->

<br>
<br>
	<!-- menu -->
	<div class="section find-home bg-second">
		<div class="container">
			<div class="section-head">
				<div class="underline2"></div>
				<div class="underline"></div>

				<nav>
			    <div class="nav-wrapper">
			      {{-- <a href="#" class="brand-logo">Logo</a> --}}
			      <ul id="nav-mobile" class="left">
			        <li><a href="{{ URL::to('/') }}" class="{{classActivePathPublic('')}}">Все</a></li>
			        <li><a href="{{ URL::to('sale/') }}" class="{{classActivePathPublic('sale')}}">Продажа</a></li>
			        <li><a href="{{ URL::to('rent/') }}" class="{{classActivePathPublic('rent')}}">Аренда</a></li>
							{{-- <li><a href="" class="{{classActivePathPublic('')}}">Советы эксперта</a></li> --}}
							<li><a href="{{ URL::to('') }}" class="{{classActivePathPublic('')}}">О нас</a></li>
							{{-- <li><a href="" class="{{classActivePathPublic('')}}">Строительство и дизайн</a></li> --}}
			      </ul>
			    </div>
			  </nav>
			</div>


  @if (\Request::is('searchproperties'))

		@if ($page=='Все объекты')
			<a style="color:orange;" href="/"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>
		@elseif ($page=='Продажа')
			<a style="color:orange;" href="/sale"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>
		@else
			<a style="color:orange;" href="/rent"><span><i class="fa fa-backward"></i></span>
				 Сбросить фильтр <span><i class="fa fa-backward"></i></span></a>
		@endif

  @else

		<div class="row">
			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="₽">
				<input type="hidden" name="currencyname" value="Рубли">
						 <button type="submit" class="btn submit" name="submit">₽</button>
			{!! Form::close() !!}
			</div>

			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="$">
				<input type="hidden" name="currencyname" value="Доллары">
						 <button type="submit" class="btn submit" name="submit">$</button>
			{!! Form::close() !!}
			</div>

			<div class="col s2">
			{!! Form::open(array('url'=>'currency','method'=>'POST', 'id'=>'agent_contact_form')) !!}
				<input type="hidden" name="currencysymbol" value="€">
				<input type="hidden" name="currencyname" value="Евро">
						 <button type="submit" class="btn submit" name="submit">€</button>
			{!! Form::close() !!}
			</div>
		</div>

  @endif

		</div>
	</div>
	<!-- end menu -->

  <!-- properties -->
  <div class="section real-estate bg-second">
    <div class="container">

      @yield("content")

      @include('mobile.objects')

      <div class="pagination-real-estate">
				<ul>
					{{ $propertieslist->links() }}
				</ul>
			</div>
		</div>
	</div>
	<!-- end properties -->

	<!-- side filter left-->
	<div class="side-nav-panel-left">
		<ul id="slide-out-left" class="side-nav side-nav-panel collapsible">
			{{-- <li class="profil">
				<img src="/upload/logo.png" alt="">
				<h2>John Doe</h2>
				<h6>Mobile Developer</h6>
			</li> --}}

			@include('mobile.filter')

		</ul>
	</div>
	<!-- end side filter left-->

@include('mobile.bottom')
