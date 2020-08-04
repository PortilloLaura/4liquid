@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
            <div class="card">
                    <div class="header3">
                        <div class="header_link">
                            Roles
                        
                        @can('roles.create')
                            <a href="{{ route('roles.create') }}" 
                            class="btn btn-light btn-sm float-right">
                                Crear
                        </a>
                        @endcan
                    </div>
                    </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px" class="abrTitle2">ID</th>
                                <th class="abrTitle2">Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td class="srvTitle2">{{ $role->id }}</td>
                                <td class="srvTitle2">{{ $role->name }}</td>
                                @can('roles.show')
                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}">
                                        <img class="crudimg" src="{{ url('img/images/show.png')}}">
                                    </a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td width="10px">
                                    <a href="{{ route('roles.edit', $role->id) }}" >
                                        <img class="crudimg" src="{{ url('img/images/edit.png')}}">
                                    </a>
                                </td>
                                @endcan
                                @can('roles.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
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
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection