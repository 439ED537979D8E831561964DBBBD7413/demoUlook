<!DOCTYPE html>
<html>
<head lang="en">

    @include('backend._layout._head')

</head>
<body class="with-side-menu">

<header class="site-header">
    @include('backend._layout._header')
</header><!--.site-header-->

@include('backend._layout._sidebar')

<div class="page-content">

    <header class="page-content-header">
        <div class="container-fluid">
            <div class="tbl">
                <div class="tbl-row">

                    @yield('title')

                </div>
            </div>
        </div>
    </header>

    @include('backend.shared._flash')

    <div class="container-fluid">

        @yield('main')

    </div><!--.container-fluid-->
</div><!--.page-content-->

@include('backend._layout._script');
</body>
</html>