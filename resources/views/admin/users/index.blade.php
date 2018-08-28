@extends('admin._layout.app')

@section('title', 'Users');

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
                            <th class="sorting_asc">First Name</th>
                            <th class="sorting_asc">Last Name</th>
                            <th class="sorting">Mobile Number</th>
                            <th class="sorting">Payment Mode</th>
                            <th class="sorting">Rating</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">First Name</th>
                            <th rowspan="1" colspan="1">Last Name</th>
                            <th rowspan="1" colspan="1">Mobile Number</th>
                            <th rowspan="1" colspan="1">Payment Mode</th>
                            <th rowspan="1" colspan="1">Rating</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach ($users as $user)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->payment_mode }}</td>
                                <td>{{ $user->rating }}</td>
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