@extends('admin._layout.app')

@section('title', 'Provider');

@section('main')
    <section class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="display table table-striped table-bordered dataTable"
                           cellspacing="0"
                           width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc">ID</th>
                            <th class="sorting_asc">Status</th>
                            <th class="sorting_asc">First Name</th>
                            <th class="sorting_asc">Last Name</th>
                            <th class="sorting">Mobile Number</th>
                            <th class="sorting">Certificate Number</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Status</th>
                            <th rowspan="1" colspan="1">First Name</th>
                            <th rowspan="1" colspan="1">Last Name</th>
                            <th rowspan="1" colspan="1">Mobile Number</th>
                            <th rowspan="1" colspan="1">Certificate Number</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach ($providers as $provider)
                            <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#example').DataTable();
        });
    </script>
@stop