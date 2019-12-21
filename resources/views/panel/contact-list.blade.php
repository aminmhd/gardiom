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
                            <th>Name</th>
                            <th>created_at</th>
                            <th>Condition</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        @if(count($contact_list_view) > 0)
                            <tbody>
                            @foreach($contact_list_view as $contact)
                                <tr>
                                    <td>{{  $contact->contact_id }}</td>
                                    <td>{{  $contact->contact_name }}</td>
                                    <td>{{  $contact->created_at }}</td>
                                    <td>{{  $contact->contact_condition}}</td>
                                    <td>
                                        {{-- <a class="btn btn-primary btn-sm" href="#">
                                             <i class="fas fa-folder">
                                             </i>
                                             View
                                         </a>--}}
                                        <a href="#" data-toggle="modal" data-target="#k{{ $contact->contact_id }}">
                                            <i class="fas fa-scroll" data-toggle="modal"></i>
                                        </a>
                                        <a href="{{ Route('admin.contact.destroy' ,  $contact-> contact_id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                @include('panel.modals' , $contact)
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
                            </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection
