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
                <a class="btn btn-primary" href="/questions/create">Agregar pregunta</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($questions as $questions)
                        <tr align="left">
                            
                            <td><h6><a class="" href= "/questions/{{ $questions->id }}"> {{ $questions->title }} </a></h6></td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        {{ $questions->description }}
                                    </div>
                                </div>



                            </td>
                            <td align="right"><a class="" href= "/questions/{{ $questions->id }}/edit"> Editar </a></td>
                            <td align="right"><a class="" href= "/questions/{{ $questions->id }}/delete"> Borrar </a></td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection