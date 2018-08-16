<!DOCTYPE html>
<html>
<head lang="en">

    @include('admin._layout._head')

</head>
<body class="with-side-menu">

<header class="site-header">
    @include('admin._layout._header')
</header><!--.site-header-->

@include('admin._layout._sidebar')

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

    @include('shared._flash')

    <div class="container-fluid">

        @yield('main')

    </div><!--.container-fluid-->
</div><!--.page-content-->

@include('admin._layout._script');
</body>
</html>