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
                        <form class="form-horizontal" method="GET" >
                            <div class="col-md-4">
                                <label for="">Filter By Printer Type</label>
                                <select class="form-control" name="filter_type">
                                    <option value="">- All -</option>
                                    @foreach($data['types'] as $t)
                                        <option value="{{ $t->id }}">{{ $t->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Filter By Price</label>
                                <select class="form-control" name="filter_price">
                                    <option value="">- All -</option>
                                    <option value="low">Lowest Price</option>
                                    <option value="high">Highest Price</option>
                                </select>
                            </div>
                           <div class="col-md-12">
                               <button style="margin-top: 5px;" type="submit" class="btn btn-default">Filter</button>
                           </div>
                        </form>

                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Condition</th>
                                <th>Added Date</th>
                                <th>Updated Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data['products'] as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->type->name }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td>{{ $p->condtion }}</td>
                                    <td>{{date('Y-m-d', strtotime($p->created_at))}}</td>
                                    <td>{{date('Y-m-d', strtotime($p->updated_at))}}</td>
                                    <td>{{ $p->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td style="width: 150px;">
                                        <button class="btn btn-primary btn-edit"  id="btnedit_{{$p->id}}">Edit</button>
                                        <button class="btn btn-danger btn-delete"  id="btndelete_{{$p->id}}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{ $data['products']->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection