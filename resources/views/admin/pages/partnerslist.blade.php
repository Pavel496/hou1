@extends("admin.admin_app")

@section("content")
<div id="main">
	<div class="page-header">

		<div class="pull-right">
			<a href="{{URL::to('admin/partners/addpartners')}}" class="btn btn-primary">Добавить фото <i class="fa fa-plus"></i></a>
		</div>
		<h2>Дизайн</h2>
	</div>
	@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif

<div class="panel panel-default panel-shadow">
    <div class="panel-body">

        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th>Фото</th>
	                <th>Название</th>
	                <th>Надпись</th>
	                <th class="text-center width-100">Действие</th>
	            </tr>
            </thead>

            <tbody>
            @foreach($partnerslist as $i => $partners)
         	   <tr>
            	<td> @if($partners->partner_image)

									<img src="{{ URL::asset('upload/partners/'.$partners->partner_image.'.jpg') }}" width="100" alt="">
					@endif</td>
                <td>{{ $partners->name }}</td>
                <td>{{ $partners->url }}</td>
                <td class="text-center">
                <div class="btn-group">
								<button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									Actions <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu">
									<li><a href="{{ url('admin/partners/addpartners/'.Crypt::encryptString($partners->id)) }}"><i class="md md-edit"></i> Редактировать</a></li>
									<li><a href="{{ url('admin/partners/delete/'.Crypt::encryptString($partners->id)) }}"><i class="md md-delete"></i> Удалить</a></li>
								</ul>
							</div>

            </td>

            </tr>
           @endforeach

            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>



@endsection
