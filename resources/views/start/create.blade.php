@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Start Examen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" align="right">
                <a class="btn btn-secondary"  href="/start">Regresa</a>
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
                <form action="/start" method="POST">

                    @csrf
                    <div class="form-group">
                        <table class="table">
                            @foreach($questions as $questions)
                                <tr align="left">
                                    
                                    <td><h6>{{ $questions->title }}</h6></td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                {{ $questions->description }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                @foreach($questions->answers as $answers)

                                                    <div class="col">
                                                        <input type="checkbox" name="tags[]" id="tags[]" value="{{ $answers->id }}">
                                                            {{ $answers->description }}
                                                        </input>                                                    
                                                    </div>
                                                    
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
            </div>

        </div>
    </div>

@endsection