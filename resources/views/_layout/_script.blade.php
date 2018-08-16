<script src="{{ asset('js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/lib/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/lib/tether/tether.min.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>

<script src="{{ asset('js/lib/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('js/lib/table-edit/jquery.tabledit.min.js') }}"></script>
<script src="{{ asset('js/lib/input-mask/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>
<script>
    $(function () {
        $(".bar-chart").peity("bar", {
            delimiter: ",",
            fill: ["#919fa9"],
            height: 16,
            max: null,
            min: 0,
            padding: 0.1,
            width: 384
        });

        $('#table-edit').Tabledit({
            url: 'example.php',
            columns: {
                identifier: [0, 'id'],
                editable: [[1, 'name'], [2, 'description']]
            }
        });
    });
</script>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    $('.dob').mask("00-00-0000", {placeholder: "__-__-____"});
    $('.from_date').mask("00-00-0000", {placeholder: "__-__-____"});
    $('.to_date').mask("00-00-0000", {placeholder: "__-__-____"});
    $('.pickup_time').mask("00:00", {placeholder: "__:__"});
    $('.drop_time').mask("00:00", {placeholder: "__:__"});
</script>