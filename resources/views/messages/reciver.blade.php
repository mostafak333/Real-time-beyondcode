
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Reciver</li>
                </ul>
                <hr>
                <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Message </label>
                    <textarea class="form-control" id="data" rows="3" readonly></textarea>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <script src='./js/app.js'></script>

    <script type="text/javascript">
        window.onload=function(){
            window.Echo.channel('EventTriggered')
            .listen('GetRequestEvent', (e) => {
                console.log('sadasd')
                document.querySelector('#data').innerHTML = e.message
            })
            }
    </script>
@endsection
