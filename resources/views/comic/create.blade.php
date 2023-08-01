@extends('layouts.app')

@section('content')
    <div class="container container-bg mt-3">
        <div class="row p-3">
            <div class="col">
                <h2>
                    Aggiungi un nuovo fumetto alla lista
                </h2>
                <form action="{{ route('comic.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input class="form-control" type="text" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Serie</label>
                        <input class="form-control" type="text" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select class="form-control" name="type" id="type">
                            <option value="" selected>Seleziona una tipologia</option>
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Uscita</label>
                        <input class="form-control" type="date" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="8"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-success" type="submit" value="Crea">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection