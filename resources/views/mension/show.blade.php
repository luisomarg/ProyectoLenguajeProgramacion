@extends('layouts.app')

@section('template_title')
    {{ $mension->name ?? 'Show Mension' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mension</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mension.index') }}"> Back</a>
                        </div>
                    </div>

                                             <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <thead class="thead">
                                                                <tr>
                                                                    <th>No</th> <th>Codigo</th><th>Mension</th><th>observaciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                                  
                                                                        
                                                                    <tr>
                                                                        <td>{{$mension->id}}</td> <td>{{$mension->codigo}}</td><td>{{$mension->mension}}</td><td>{{$mension->observaciones}}</td>
                                                                        
                                                                    
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
