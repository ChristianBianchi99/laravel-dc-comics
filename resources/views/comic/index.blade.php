@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Titolo
                            </th>
                            <th>
                                Serie
                            </th>
                            <th>
                                Tipologia
                            </th>
                            <th>
                                Uscita
                            </th>
                            <th>
                                Gestisci
                            </th>
                        </tr>
                        <tbody>
                            @foreach ($comics as $id => $comic)
                                <tr>
                                    <td>
                                        {{$comic->title}}
                                    </td>
                                    <td>
                                        {{$comic->series}}
                                    </td>
                                    <td>
                                        {{$comic->type}}
                                    </td>
                                    <td>
                                        {{$comic->sale_date}}
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="{{ route('comic.show', $comic->id)}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection