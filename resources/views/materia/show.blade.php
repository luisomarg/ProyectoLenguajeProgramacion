@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <tr>
                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <thead class="thead">
                                                                <tr>
                                                                <th>No</th> <th>Codigo</th><th>Materia</th><th>U.C</th><th>observaciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                  
                                                                        
                                                                    <tr>
                                                                        <td>{{$materia->id}}</td> <td>{{$materia->codigo}}</td><td>{{$materia->nombre}}</td><td>{{$materia->UC}}</td><td>{{$materia->observacion}}</td>
                                                                        
                                                                    
                                                                    </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
