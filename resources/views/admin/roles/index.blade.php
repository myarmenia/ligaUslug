@extends('layouts.admin_app')


@section('content')
<div class="container">
<div class="row">

        <div class="col-lg-12 my-5 margin-tb">
            <div class="pull-left">
                <h2 class="font-weight-bold my-3  pt-3">Управление ролями</h2>
            </div>
            <div class="pull-right my-3">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Создать новую роль</a>
            @endcan
            </div>
        </div>
    </div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>№</th>
     <th>Имя</th>
     <th width="400px">Действие</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Показывать</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Редактировать</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}


</div>
@endsection
