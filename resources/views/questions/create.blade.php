@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>New Question</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" align="right">
                <a class="btn btn-secondary"  href="/questions">Regresa</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/questions" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{ old('title') }}" />
                        <label for="description">Descripción:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description') }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

@endsection