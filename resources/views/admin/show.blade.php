@extends('admin.layouts.app')

@section('contentView')
    <div id="content">
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ ucfirst(str_replace('_', ' ', $table_name)) }}</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            @if ($errors->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $errors->first('success') }}
                                </div>
                            @endif
                            <thead>
                            <tr>
                                @foreach ($table_column as $column)
                                    <th>{{ $column->COLUMN_NAME }}</th>
                                @endforeach
                                @if ($table_name != 'admins' and $table_name != 'users')
                                    <th>Zarządzaj</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($table_data as $table)
                                <tr>
                                    @foreach ($table_column as $column)
                                        @php($name = $column->COLUMN_NAME)
                                        <td>{{ $table->$name }}</td>
                                    @endforeach
                                    @if ($table_name != 'admins' and $table_name != 'users')
                                        <td>
                                            <a href="{{ url('admin/edit').'/'.$table_name.'/'.$table->id }}" class="btn btn-warning btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                     @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection