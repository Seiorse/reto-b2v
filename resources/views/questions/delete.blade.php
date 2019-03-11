@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Delete Question: {{$question->id}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" align="right">
                <a class="btn btn-secondary"  href="/questions">Regresa</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/questions/{{$question->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="title">Título: {{ $question->title }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="description">Descripción: {{ $question->description }}</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Borrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection