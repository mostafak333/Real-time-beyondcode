
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Sender</li>
                </ul>
                <hr>
                <form action="/send" >
                    @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Message</label>
                    <input class="form-control" name="data" rows="3">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary mb-2">send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
