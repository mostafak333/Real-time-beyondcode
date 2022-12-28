
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Online Usesrs</li>
                </ul>
                <hr>
                <ul class="list-group" id="online-users"></ul>
            </div>
        </div>
    </div>
@endsection
