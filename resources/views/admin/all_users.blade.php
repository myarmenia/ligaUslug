
@extends('layouts.admin_app')


@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center" >
        <div class="col-md-10 bg-white">
            <div class="panel-body">

                @if(session()->has('message'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('message_error'))
                <div class="alert alert-danger text-center">
                    {{ session()->get('message_error') }}
                </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach
                    </ul>
                </div>
                @endif
                    <h3 class="my-3 font-weight-bold">Все пользователи</h3>
                <table class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя пользователя</th>
                        <th scope="col">Фамилия пользователя</th>
                        <th scope="col">Эл. адрес</th>
                        <th scope="col">Телефонный номер</th>
                        <th scope="col" class="text-center">Фото</th>
                        {{-- <th scope="col" class="text-center"> Ссылки на личные страницы</th> --}}
                        {{-- <th scope="col"> Показать</th> --}}
                        <th scope="col">Дата регистрации пользователя</th>
                        <th scope="col">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_users as $items)
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td scope = "col">{{ $items->name }}</td>
                            <td scope = "col">{{ $items->last_name }}</td>
                            <td scope="col">{{$items->email }}</td>
                            <td scope="col">{{$items->phonenumber }}</td>
                            <td scope="col" class="text-center">
                                @php
                                $avatar = $items->img_path != Null ? $items->img_path :  'avatar.png';
                                @endphp
                                <img src="{{ asset('admin/img/img_user')}}/{{$avatar}}"   width="100">
                                {{-- <img src="{{asset('admin/img/img_user') }}/{{ $items->img_path }}" width="100"> --}}
                            </td>
                            <td scope="col">{{$items->created_at }}</td>
                            {{-- <td scope="col">
                                <p>{{ $items->fasebook_link }}</p>
                                <p>{{ $items->instagram_link }}</p>
                            </td> --}}
                            {{-- <td><a  href = "{{ route('user.show', $items->id )}}">Показать </a></td> --}}

                            <td>
                                <form role="form"  action="{{ route('user.destroy',$items->id) }}"  method="POST" style="width:70%;margin:0 auto">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn my-2" style="background:#394a59;color:#fff"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $all_users->links()}}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection('content')