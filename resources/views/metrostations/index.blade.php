@extends("app")

@section("content")

<br><br>

{{-- {{$stations}} --}}
{{Form::text('property_features', $stations, ['disabled' => true, 'data-role' => 'tagsinput'])}}

  <a class="btn" href="/back_from_metro/{{ $stations }}">Ok</a>
  {{-- <a class="btn" href="">Отменить</a> --}}

<br><br>

        <div class="container">

            <ul class="has-columns">
                @foreach ($metrostations as $letter => $metrostationCollection)
                    <div class="letter-group">
                        <h3>{{ $letter }}</h3>
                        <ul>
                            @foreach ($metrostationCollection as $metrostation)
                                <li>
                                    <a style="color:{{$metrostation->line->color}}" href="/station/{{ $metrostation->name }}/{{ $stations }}">
                                                                      {{ $metrostation->name }} - {{ $metrostation->line_id }} линия</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </ul>

        </div>

@endsection
