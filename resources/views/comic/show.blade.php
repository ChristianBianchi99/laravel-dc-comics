@extends('layouts.app')

@section('content')
<div class="container container-bg">
    <div class="row my-5 h-100 p-3">
        <div class="col-4 h-100">
            <div class="comic-poster">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
        </div>
        <div class="col h-100">
            <div class="comic-details h-100">
                <h3>
                    {{$comic->title}}
                </h3>
                <p>
                    {{$comic->description}}
                </p>
                <div class="autors">
                    <div class="artists">
                        <strong>
                            Artists:
                        </strong>
                        <p>
                            {{$comic->artists}}
                        </p>
                    </div>
                    <div class="writers">
                        <strong>
                            Writers:
                        </strong>
                        <p>
                            {{$comic->writers}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection