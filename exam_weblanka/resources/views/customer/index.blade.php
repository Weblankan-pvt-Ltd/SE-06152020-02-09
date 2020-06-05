@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Navigation</div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="{{ url('customers') }}">Customer Management</a></li>
                            <li><a href="{{ url('products') }}">Product Management</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-Mail</th>
                                    <th>Address</th>
                                    <th>Added Date</th>
                                    <th>Updated Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->address }}</td>
                                    <td>{{date('Y-m-d', strtotime($c->created_at))}}</td>
                                    <td>{{date('Y-m-d', strtotime($c->updated_at))}}</td>
                                    <td>{{ $c->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td style="width: 150px;">
                                        <button class="btn btn-primary btn-edit"  id="btnedit_{{$c->id}}">Edit</button>
                                        <button class="btn btn-danger btn-delete"  id="btndelete_{{$c->id}}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- Pagination -->
                            {{ $customers->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection