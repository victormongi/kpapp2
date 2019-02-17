@if(session()->has('message'))
    <div class="notification is-success">
        {{ session()->get('message') }}
    </div>
@endif