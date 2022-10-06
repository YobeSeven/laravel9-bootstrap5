@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$message}}</strong>
    </div>
@endif
@if ($message = Session::get('fail'))
    <div class="alert alert-success alert-block text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$message}}</strong>
    </div>
@endif
