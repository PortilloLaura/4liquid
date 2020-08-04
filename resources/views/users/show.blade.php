@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card">
                    <div class="header2">
                        <div class="header_link">Usuario</div>
                    </div>
                    <div class="panel-body">            
                        <div class="tlsTitle"><span class="abrTitle">Nombre:</span> <span class="srvTitle">{{ $user->name }}</span></div>                            
                        <div class="tlsTitle"><span class="abrTitle">Email:</span> <span class="srvTitle">{{ $user->email }}</span></div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection