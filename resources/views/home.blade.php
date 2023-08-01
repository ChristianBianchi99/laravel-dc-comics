@extends('layouts.app')

@section('content')    
<div class="container h-100vh">
    <div class="row h-100">
        <div class="col-12 h-100">
            <div class="content h-100">
                <a href="{{ route('comic.index')}}" class="btn btn-lg btn-primary">Vai alla tua lista</a>
            </div>
        </div>
    </div>
</div>
@endsection