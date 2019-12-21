@extends('panel.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>writer</th>
                            <th>tittle</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>option</th>
                        </tr>
                        </thead>
                        @if( $data_of_database && count( $data_of_database)> 0)

                            <tbody>
                            @foreach( $data_of_database as $data)
                                <tr>
                                    <td>{{ $data->post_id }}</td>
                                    <td>{{ $data->post_author }}</td>
                                    <td>{{ $data->post_tittle }}</td>
                                    <td>{{ $data->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $data->updated_at->format('d/m/Y') }}</td>
                                    <td>

                                        <a href="{{ Route('admin.edit' , $data->post_id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ Route('admin.delete' , $data->post_id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @else
                            <tbody>
                            <tr>
                                <td style="color: red">
                                    Table of Database is empty.
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
