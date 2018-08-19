<!DOCTYPE html>
<html>
<head lang="en">
    @include('admin.auth._layout._head')
</head>
<body>

<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">

            @include('shared._flash')

            @yield('main')

        </div>
    </div>
</div><!--.page-center-->


@include('admin.auth._layout._script')
</body>
</html>