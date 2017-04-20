@if(Session::has('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif


