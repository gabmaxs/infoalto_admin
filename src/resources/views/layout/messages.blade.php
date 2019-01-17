{{--@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{ $error }}
        </div>
    @endforeach
@endif --}}
<div class="alert alert-{{$type}} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <i class="fa fa-times-circle"></i> {{ $slot }}
</div>