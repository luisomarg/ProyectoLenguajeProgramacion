@extends('layouts.app')

@section('template_title')
    {{ $carrera->name ?? 'Show Carrera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carrera</span>

                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <thead class="thead">
                                                                <tr>
                                                                    <th>No</th> <th>Codigo</th><th>Nombre</th><th>Area</th><th>observaciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                  
                                                                        
                                                                    <tr>
                                                                        <td>{{$carrera->id}}</td> <td>{{$carrera->codigo}}</td><td>{{$carrera->nombre}}</td><td>{{$carrera->area}}</td><td>{{$carrera->observaciones}}</td>
                                                                        
                                                                    
                                                                    </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                 </div>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
