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


    <div class="container-fluid">

        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>@yield('title')</h3>
                    </div>
                </div>
            </div>
        </header>

        @include('shared._flash')

        @yield('main')

    </div><!--.container-fluid-->
</div><!--.page-content-->

@include('admin._layout._script');

@yield('script')
</body>
</html>