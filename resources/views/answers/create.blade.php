@extends('layouts.app')

@section('content')
    
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>New Answer: {{ $questions->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" align="right">
                <a class="btn btn-secondary"  href="/questions/{{ $questions->id }}">Regresa</a>
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
                <form action="/questions/{{ $questions->id }}/answers" method="POST">
                    @csrf
                    <div class="form-group">
                        <h6>{{ $questions->description }}</h6>

                        <label for="description">Descripción:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description') }}" />

                        <label for="is_correct">Es correcto(a):</label>
                        <input type="text" class="form-control" id="is_correct" name="is_correct" placeholder="Type is correct" value="{{ old('is_correct') }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

    </div>

@endsection