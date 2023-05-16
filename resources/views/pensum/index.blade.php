@extends('layouts.app')

@section('template_title')
    Pensum
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pensum') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pensum.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pensums as $pensum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            

                                            <td>
                                                <form action="{{ route('pensum.destroy',$pensum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pensum.show',$pensum->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pensum.edit',$pensum->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pensums->links() !!}
            </div>
        </div>
    </div>
@endsection
