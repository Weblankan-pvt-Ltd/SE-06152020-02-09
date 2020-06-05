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

        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
