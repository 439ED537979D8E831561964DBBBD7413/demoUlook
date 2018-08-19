@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('alert'))
    <div class="alert alert-warning">{{ session('alert') }}</div>
@endif
@if (session('warning'))
    <div class="alert alert-warning">{{ session('warning') }}</div>
@endif
@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
@if($errors)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif