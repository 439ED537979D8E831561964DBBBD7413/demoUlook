<script src="{{ asset('assets/admin/js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/lib/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/lib/tether/tether.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
<script>
    $(function () {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function () {
            setTimeout(function () {
                $('.page-center').matchHeight({remove: true});
                $('.page-center').matchHeight({
                    target: $('html')
                });
            }, 100);
        });
    });
</script>
<script src="{{ asset('assets/admin/js/app.js') }}"></script>