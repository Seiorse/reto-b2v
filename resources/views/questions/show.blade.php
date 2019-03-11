@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Answers: {{$question->title}}</h1>
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

                <h6>{{ $question->description }}</h6>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            @foreach($question->answers as $answers)
                                <tr>
                                    <td>{{ $answers->description }}</td> 
                                    <td>{{ $answers->is_correct }}</td> 
                                    <td>{{ $answers->created_at }}</td> 
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/questions/{{ $question->id }}/answers/create">Agregar</a>
            </div>
        </div>
    
    </div>

@endsection