@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" id="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="list-group">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <li class="list-group-item active" aria-current="true">Number of Online Users</li><br>
                                </div>
                                <div class="col-md-6">
                                    <li id="counter" class="list-group-item" aria-current="true"></li><br>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
