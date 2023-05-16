@extends('layouts.app')

@section('template_title')
    {{ $area->name ?? 'Show Area' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Area</span>

                            <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <thead class="thead">
                                                                <tr>
                                                                    <th>No</th> <th>Codigo</th><th>Area</th><th>observaciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                 
                                                                    
                                                                        
                                                                    <tr>
                                                                        <td>{{$area->id}}</td> <td>{{$area->codigo}}</td><td>{{$area->area}}</td><td>{{$area->observaciones}}</td>
                                                                        
                                                                    
                                                                    </tr>
                                                            
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>





                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('areas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
