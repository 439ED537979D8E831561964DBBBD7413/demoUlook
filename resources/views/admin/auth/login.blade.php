@extends('admin.auth._layout.auth')

@section('main')


    <form class="sign-box" role="form" method="POST" action="{{ route('admin.login') }}">

        {{ csrf_field() }}

        <div class="sign-avatar">
            <img src="{{ asset('assets/img/taxi.png') }}" alt="">
        </div>
        <header class="sign-title">Admin Sign In</header>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}"
                   required autofocus/>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required/>
        </div>

        <div class="form-group">
            <div class="checkbox float-left">
                <input type="checkbox" id="signed-in"/>
                <label for="signed-in">Keep me signed in</label>
            </div>
        </div>
        <button type="submit" class="btn btn-rounded">Sign in</button>
        <!--<button type="button" class="close">
            <span aria-hidden="true">&times;</span>
        </button>-->
    </form>
@endsection