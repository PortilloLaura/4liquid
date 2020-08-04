@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card">
                    <div class="header3">
                        <div class="header_link">
                            Usuarios
                        </div>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px"class="abrTitle2">ID</th>
                                <th class="abrTitle2">Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="srvTitle2">{{ $user->id }}</td>
                                <td class="srvTitle2">{{ $user->name }}</td>
                                @can('users.show')
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}">
                                        <img class="crudimg" src="{{ url('img/images/show.png')}}">
                                    </a>
                                </td>
                                @endcan
                                @can('users.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}" >
                                        <img class="crudimg" src="{{ url('img/images/edit.png')}}">
                                    </a>
                                </td>
                                @endcan
                                @can('users.destroy')
                                <td width="10px">
                                {!! Form::open(['route' => ['users.destroy', $user->id], 
                                    'method' => 'DELETE']) !!}
                                    <input type="image" class="crudimg"
                                    src="{{ url('img/images/delete.png')}}">
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection