@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card">
                    <div class="header2">
                        <div class="header_link">Rol</div>
                    </div>
                    <div class="panel-body">            
                        <div class="tlsTitle"><span class="abrTitle">Nombre:</span> <span class="srvTitle">{{ $role->name }}</span></div>                            
                        <div class="tlsTitle"><span class="abrTitle">Alias:</span> <span class="srvTitle">{{ $role->slug }}</span></div>        
                        <div class="tlsTitle"><span class="abrTitle">Descripción:</span> <span class="srvTitle">{{ $role->description }}</span></div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection