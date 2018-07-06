@include('mobile.top')

</div>
<!-- end navbar top -->

	<!-- single -->
	<div class="pages section">
		<div class="container">
			<div class="single">
				<div class="properties">
					<div id="owl-properties">
						@foreach($property_gallery_images as $key=>$gallery_img)
						<div class="item">
							<a href="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" class="image-popup"><img class="responsive-img" src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" alt="sample image"></a>
						</div>
						@endforeach
					</div>
				</div>
				<div class="single-content">
					<h5>{{ $property->property_name }}</h5>
					<span><i class="fa fa-map-marker"></i>{{ $property->address }}</span>
					<div class="line"></div>
					<p>{!! stripslashes($property->description) !!}</p>

					<h6>Характеристики объекта</h6>
					<ul>
						<li>Название: {{ $property->property_name }}</li>
						<li>Цена: {{$property->currency.' '.number_format($property->price)}}</li>
						<li>Цель: {{ $property->property_purpose }}</li>
						<li>МКАД: {{$property->range}} км</li>
						<li>Участок: {{$property->land_area}} сот</li>
						<li>Дом: {{$property->build_area}} м<sup>2</sup></li>
						{{-- <li>bedroom: 3</li>
						<li>Bathroom: 2</li>
						<li>Car Park: 2</li> --}}
					</ul>

					<p>Более подробные сведения представлены в компьютерной версии сайта.</p>

					<br>
					<br>

			</div>
		</div>
	</div>
	<!-- end single post -->

	<script>

		$(function(){
			'use-strict';

			// portfolio image-popup
			$(".image-popup").magnificPopup({
			    type: "image",
			    removalDelay: 200,
			    mainClass: "mfp-with-zoom",
			    zoom: {
    				enabled: true,
					duration: 300,
    				easing: 'ease-in-out',
				}
			});

		});

	</script>

@include('mobile.bottom')
