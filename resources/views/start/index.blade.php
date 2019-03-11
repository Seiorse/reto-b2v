@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" align="right">
                <a class="btn btn-primary" href="/start/create">Iniciar</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
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

                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection