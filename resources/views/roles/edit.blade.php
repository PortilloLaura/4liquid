@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="header2">
                    <div class="header_link">
                        Editar rol
                    </div>
                </div>
                <div class="card" style="padding: 5px;">

                <div class="panel-body">                    
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('roles.partials.form')
                        
                    {!! Form::close() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection